<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 02.05.15
 * Time: 15:43
 */

namespace Import\Image;

use Application\Entity\EntityProductList;
use Zend\ServiceManager\ServiceLocatorInterface;

class ImageImporter
{

    /** @var ServiceLocatorInterface */
    protected $_oServiceLocator;
    /** @var EntityProductList */
    protected $_oProduct;
    /** @var \Doctrine\ORM\EntityManager */
    protected $_oEntityManager;

    const LNL_IMAGE_URL = 'http://ll.com.pl/components/com_virtuemart/shop_image/product/';
    const DEFAULT_WIDTH = 400;

    /**
     * @return \Application\Entity\EntityProductList
     */
    protected function _getProduct()
    {
        return $this->_oProduct;
    }

    /**
     * @param \Application\Entity\EntityProductList $oProduct
     */
    public function setProduct(EntityProductList $oProduct)
    {
        $this->_oProduct = $oProduct;
    }

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    protected function _getEntityManager()
    {
        if ($this->_oEntityManager === null) {
            $this->_oEntityManager = $this->_getServiceLocator()->get('doctrine.entitymanager.orm_default');
        }
        return $this->_oEntityManager;
    }

    /**
     * @param ServiceLocatorInterface $oServiceLocator
     */
    public function setServiceLocator(ServiceLocatorInterface $oServiceLocator)
    {
        $this->_oServiceLocator = $oServiceLocator;
    }

    /**
     * @return ServiceLocatorInterface
     * @throws \Exception
     */
    protected function _getServiceLocator()
    {
        if (!$this->_oServiceLocator) {
            throw new \Exception('Do klasy ' . get_class($this) . ' nie załadowano _oServiceLocator');
        }
        return $this->_oServiceLocator;
    }

    /**
     * Zwraca ścieżkę do lokalnego pliku i jego szerokość
     */
    public function getImage()
    {
        $oProduct = $this->_getProduct();
        $sRemoteImage = $oProduct->getProductlRemoteImage();
        if (!$sRemoteImage || $sRemoteImage == '') {
            return 0;
        }
        try {
            /** @var $oImagine \Imagine\Gd\Imagine */
            $oImagine = $this->_getServiceLocator()->get('ImagineService');

            /** @var $oImage \Imagine\Gd\Image */
            $oImage = $oImagine->open(self::LNL_IMAGE_URL . $sRemoteImage);
            if ($oImage->getSize()->getWidth() > self::DEFAULT_WIDTH) {
                $oImage->resize(
                    $oImage->getSize()->widen(self::DEFAULT_WIDTH)
                );
            }
            $sPath = $this->_generateFilePath();
            $oImage->save(getcwd() .$sPath);
            return $oImage->getSize()->getWidth();

        } catch (\Exception $e) {
            $this->_getServiceLocator()->get('Common')->trace('Wystąpił błąd podczas przetwarzania obrazka produktu o id ' . $oProduct->getProductlId() . ': ' . $e->getMessage());
            return 0;
        }
    }

    protected function _generateFilePath()
    {
        $oProduct = $this->_getProduct();
        $sFilename = str_pad($oProduct->getProductlId(), 3, 0, STR_PAD_LEFT);
        $sFilenameLast3 = substr($sFilename, -3);
        $sPath = DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'thumb';
        $this->_createDirectoryIfNotExist($sPath);
        $sPath .= DIRECTORY_SEPARATOR . $sFilenameLast3[0];
        $this->_createDirectoryIfNotExist($sPath);
        $sPath .= DIRECTORY_SEPARATOR . $sFilenameLast3[1];
        $this->_createDirectoryIfNotExist($sPath);
        $sPath .= DIRECTORY_SEPARATOR . $sFilenameLast3[2];
        $this->_createDirectoryIfNotExist($sPath);
        return $sPath . DIRECTORY_SEPARATOR . $sFilename . '.jpeg';
    }

    protected function _createDirectoryIfNotExist($sPath){
        if (!file_exists(getcwd() . $sPath)) {
            mkdir(getcwd() . $sPath, 0777, true);
        }
    }

}