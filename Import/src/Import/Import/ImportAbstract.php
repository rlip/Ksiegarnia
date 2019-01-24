<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 24.03.15
 * Time: 19:44
 */

namespace Import\Import;

use Application\Entity\EntityCategoryRemote;
use Application\Entity\EntityImport;
use Application\Entity\EntityPublisher;
use Import\Mapping\Plugin\PluginAbstract;
use Import\Downloader\DownloaderFactory;
use Import\Mapping\DataRow;
use Import\Mapping\Mapping;
use Import\Packer\PackerFactory;
use Import\Reader\ReaderAbstract;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

abstract class ImportAbstract implements ServiceLocatorAwareInterface
{
    const PAGE_SIZE = 500; //todo! z 10k
    const MAX_PART_LIMIT = 1000;
    const MIN_IN_STOCK = 3; //todo! to chyba lepiej z bazy
    const EMPTY_CATEGORY = 'BRAK';
    const DEBUG = true;

    /** @var ReaderAbstract */
    protected $_oReader;
    /** @var ServiceLocatorInterface */
    protected $_oServiceLocator;
    /** @var EntityImport */
    protected $_oImportTemplate;
    /** @var \Doctrine\ORM\EntityManager */
    protected $_oEntityManager;

    protected $_aPublishers;

    protected $_oSupplier;
    /** @var array tablica kategorii */
    protected $_aRemoteCategories = array();

    protected $_aRowMapping = array();
    protected $_sIdField;

    /**
     * @return array
     */
    protected function _getRowMapping()
    {
        return $this->_aRowMapping;
    }

    /**
     * @param $sFrom
     * @param null $sTo
     * @param array|PluginAbstract $aPlugins
     */
    public function addRowMapping($sFrom, $sTo = null, $aPlugins = array())
    {
        if (!is_array($aPlugins)) {
            $aPlugins = array($aPlugins);
        }
        $this->_aRowMapping[] = new Mapping($sFrom, $sTo, $aPlugins);
    }

    /**
     * Funkcja która otrzyma partię produktów do dodania/aktualizacji
     * @param $aData
     * @return mixed
     */
    abstract protected function _importPart(&$aData);

    /**
     * Funkcja ustawiająca $_aRowPlugins i $_sIdField,
     * @return mixed
     */
    abstract protected function _initMappingConfig();

    /**
     * Funkcja uruchamiana na koniec importu
     */
    protected function _afterImport(){
        //to override
    }

    /**
     * @param ServiceLocatorInterface $oServiceLocator
     */
    public function setServiceLocator(ServiceLocatorInterface $oServiceLocator)
    {
        $this->_oServiceLocator = $oServiceLocator;
    }

    /**
     * @return mixed
     */
    protected function _getIdField()
    {
        return $this->_sIdField;
    }

    /**
     * @param mixed $sIdField
     */
    public function setIdField($sIdField)
    {
        $this->_sIdField = $sIdField;
    }

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getEntityManager()
    {
        if ($this->_oEntityManager === null) {
            $this->_oEntityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        }
        return $this->_oEntityManager;
    }

    /**
     * @return ServiceLocatorInterface
     * @throws \Exception
     */
    public function getServiceLocator()
    {
        if (!$this->_oServiceLocator) {
            throw new \Exception('Do klasy ' . get_class($this) . ' nie załadowano _oServiceLocator');
        }
        return $this->_oServiceLocator;
    }

    /**
     * @param EntityImport $oEntity
     */
    public function setImportTemplate(EntityImport $oEntity)
    {
        $this->_oImportTemplate = $oEntity;
    }

    /**
     * @return ReaderAbstract
     * @throws \Exception
     */
    public function getReader()
    {
        if (!$this->_oReader) {
            throw new \Exception('Do klasy ' . get_class($this) . ' nie załadowano _oReader');
        }
        return $this->_oReader;
    }

    /**
     * @param ReaderAbstract $oReader
     */
    public function setReader(ReaderAbstract $oReader)
    {
        $this->_oReader = $oReader;
    }

    /**
     * @return \Application\Entity\EntitySupplier
     * @throws \Exception
     */
    public function getSupplier()
    {
        if (!$this->_oSupplier) {
            $this->_oSupplier = $this->getImportTemplate()->getImportSupplier();
        }
        return $this->_oSupplier;
    }


    /**
     * @throws \Exception
     * @return EntityImport
     */
    public function getImportTemplate()
    {
        if (!$this->_oImportTemplate) {
            throw new \Exception('Do klasy ' . get_class($this) . ' nie załadowano _oImportTemplate');
        }
        return $this->_oImportTemplate;
    }

    /**
     * Funkcja rozpoczynająca import
     * @return mixed
     */
    public function start()
    {
        $oImportTemplate = $this->getImportTemplate();
        if ($oImportTemplate->getImportDownloadRequire()) {
            $this->getServiceLocator()->get('Common')->trace('Rozpoczynam pobieranie');
            $oDownloaderFactory = new DownloaderFactory();
            $oDownloader = $oDownloaderFactory->getDownloader($oImportTemplate);
            $oDownloader->startDownload();
        }

        if ($oImportTemplate->getImportUnpackRequire()) {
            $this->getServiceLocator()->get('Common')->trace('Rozpoczynam rozpakowywanie');
            $oPackerFactory = new PackerFactory();
            $oPacker = $oPackerFactory->getPacker($oImportTemplate);
            $oPacker->startUnpack();
        }
        $this->getServiceLocator()->get('Common')->trace('Rozpoczynam odczytywanie');
        $this->_initMappingConfig();
        $this->_useReader();
        $this->getServiceLocator()->get('Common')->trace('Uruchamiam funkcje po importowe');
        $this->_afterImport();
        $this->getServiceLocator()->get('Common')->trace('Import danego dostawcy został zakończony');
    }

    /**
     * Zbiera dane i co PAGE_SIZE wywołuje funkcję _importPart
     */
    protected function _useReader()
    {
        $i = 0;
        while (++$i < self::MAX_PART_LIMIT) {
            $aData = $this->_getPart();
            if (empty($aData)) {
                break;
            }
            $this->getServiceLocator()->get('Common')->trace('Przetwarzam część od ' . ($i - 1) * self::PAGE_SIZE . ' do ' . $i * self::PAGE_SIZE);
            $this->_importPart($aData, $i);
        }
        if ($i == self::MAX_PART_LIMIT) {
            throw new \Exception('Osiągnięto limit części');
        }
    }

    /**
     * Porcjuje dane pojedyńczo odczytywane readerem
     * @return array
     */
    protected function _getPart()
    {
        $aReturn = array();
        while (true) {
            $aRow = $this->getReader()->next();
            if (empty($aRow)) {
                break; //kończymy jak już nic nie ma do odczytu
            }
            $oDataRow = new DataRow();
            $oDataRow->setSourceData($aRow);
            $oDataRow->setIdField($this->_getIdField());
            $oDataRow->setRowMapping($this->_getRowMapping());
            $aResult = $oDataRow->getResultData();
            if($aResult){
                list($id, $aData) = $aResult;
                $aReturn[$id] = $aData;
            }
            if (count($aReturn) == self::PAGE_SIZE) {
                break; //albo jak osiągnie się limit
            }
        }
        return $aReturn;
    }

    /**
     * Pobiera wydawcę, tworzy go jeśli nie istnieje
     * @param $sName
     */
    protected function _getPublisherByName($sName)
    {
        if ($this->_aPublishers === null) {
            $this->getServiceLocator()->get('Common')->trace('Pobieram wydawców');
            $aPublishers = $this->getEntityManager()->getRepository('Application\Entity\EntityPublisher')->findAll();
            /** @var $oPublisher \Application\Entity\EntityPublisher */
            foreach ($aPublishers as $oPublisher) {
                $this->_aPublishers[$oPublisher->getPublisherName()] = $oPublisher;
            }
            $this->getServiceLocator()->get('Common')->trace('Pobrano ' . count($aPublishers) . ' wydawców');
        }
        if (!isset($this->_aPublishers[$sName])) {
            $oPublisher = new EntityPublisher();
            $oPublisher
                ->setPublisherName($sName);
            $this->getEntityManager()->persist($oPublisher);
            $this->getEntityManager()->flush($oPublisher);
            $this->_aPublishers[$sName] = $oPublisher;
        }
        return $this->_aPublishers[$sName];
    }

    /**
     * Zwraca remote category dla danej nazwy, tworzy ją jeśli nie znajdzie, uwzględniając dostawców
     * @param $sName
     * @return EntityCategoryRemote
     */
    protected function _getRemoteCategoryByName($sName)
    {
        if (!isset($this->_aRemoteCategories[$this->getSupplier()->getSupplierId()])) {
            $this->_aRemoteCategories[$this->getSupplier()->getSupplierId()] = array();
            $this->getServiceLocator()->get('Common')->trace('Pobieram kategorie');
            $aCategories = $this->getEntityManager()->getRepository('Application\Entity\EntityCategoryRemote')->findBy(
                array(
                    'categoryrSupplier' => $this->getSupplier()
                )
            );
            /** @var $oCategory \Application\Entity\EntityCategoryRemote */
            foreach ($aCategories as $oCategory) {
                $this->_aRemoteCategories[$this->getSupplier()->getSupplierId()][$oCategory->getCategoryrName()] = $oCategory;
            }
            $this->getServiceLocator()->get('Common')->trace('Pobrano ' . count($aCategories) . ' kategorii');
        }
        if (!isset($this->_aRemoteCategories[$this->getSupplier()->getSupplierId()][$sName])) {
            $oCategory = new EntityCategoryRemote();
            $oCategory->setCategoryrSupplier($this->getSupplier());
            $oCategory->setCategoryrName($sName);
            $oCategory->setCategoryrMappingChanged(false);
            $this->getEntityManager()->persist($oCategory);
            $this->getEntityManager()->flush($oCategory);
            $this->_aRemoteCategories[$this->getSupplier()->getSupplierId()][$sName] = $oCategory;
        }
        return $this->_aRemoteCategories[$this->getSupplier()->getSupplierId()][$sName];
    }

    protected function _getHttpPageData($url)
    {
        $user_agent = 'Mozilla/5.0 (Windows NT 6.1; rv:8.0) Gecko/20100101 Firefox/8.0';
        $options = array(
            CURLOPT_CUSTOMREQUEST => "GET", //set request type post or get
            CURLOPT_POST => false, //set to GET
            CURLOPT_USERAGENT => $user_agent, //set user agent
            CURLOPT_COOKIEFILE => "cookie.txt", //set cookie file
            CURLOPT_COOKIEJAR => "cookie.txt", //set cookie jar
            CURLOPT_RETURNTRANSFER => true, // return web page
            CURLOPT_HEADER => false, // don't return headers
            CURLOPT_FOLLOWLOCATION => true, // follow redirects
            CURLOPT_ENCODING => "", // handle all encodings
            CURLOPT_AUTOREFERER => true, // set referer on redirect
            CURLOPT_CONNECTTIMEOUT => 120, // timeout on connect
            CURLOPT_TIMEOUT => 120, // timeout on response
            CURLOPT_MAXREDIRS => 10, // stop after 10 redirects
        );

        $ch = curl_init($url);
        curl_setopt_array($ch, $options);
        $content = curl_exec($ch);
        $err = curl_errno($ch);
        $errmsg = curl_error($ch);
        $header = curl_getinfo($ch);
        curl_close($ch);

        $header['errno'] = $err;
        $header['errmsg'] = $errmsg;
        $header['content'] = $content;
        return $header;
    }

    protected function _updateAvailabilityAndPrice(){
        $oConnection = $this->getEntityManager()->getConnection();
        $this->getServiceLocator()->get('Common')->trace('Ustawiam productl_best_productap_changed na 1 i productl_best_productap_id na najlepszą product_available_price');
        $oConnection->executeQuery('UPDATE product_list SET productl_best_productap_changed = 1, productl_best_productap_id =
                (
                SELECT productap_id
                FROM product_available_price
                WHERE productap_price >= 5 AND productap_productl_id = productl_id AND productap_in_stock > 0
                ORDER BY productap_price ASC limit 1
                )
                WHERE productl_id IN
                (
                SELECT DISTINCT productap_productl_id
                FROM product_available_price
                WHERE productap_recently_changed = 1
                )'
        );

        $this->getServiceLocator()->get('Common')->trace('Ustawiam productl_price_supplier na najlepszą cenę i productl_in_stock z tej ceny');
        // w tych, które zmieniłem, kasuję flagę productl_best_productap_changed
        $oConnection->executeQuery('UPDATE product_list
                INNER JOIN product_available_price
                ON product_list.productl_best_productap_id = product_available_price.productap_id
                SET
                product_list.productl_price_supplier = product_available_price.productap_price,
                product_list.productl_in_stock = product_available_price.productap_in_stock,
                product_list.productl_best_productap_changed = 0
                WHERE product_list.productl_best_productap_changed = 1'
        );

        $this->getServiceLocator()->get('Common')->trace('Ustawiam in_stock na 0 dla produktów o zmienionej cenie lub dostępności, a bez productl_best_productap_id');
        $oConnection->executeQuery('update product_list set productl_in_stock = 0 where productl_best_productap_changed = 1');

        $this->getServiceLocator()->get('Common')->trace('Ustawiam productl_best_productap_changed na 0');
        $oConnection->executeQuery('update product_list set productl_best_productap_changed = 0 where productl_best_productap_changed = 1');

        $this->getServiceLocator()->get('Common')->trace('Ustawiam productap_recently_changed na 0');
        $oConnection->executeQuery('update product_available_price set productap_recently_changed = 0 where productap_recently_changed = 1');
    }

}