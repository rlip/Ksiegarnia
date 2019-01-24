<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 24.03.15
 * Time: 19:44
 */

namespace Import\Import;

use Application\Entity\EntityProductAvailablePrice;
use Application\Entity\EntityProductList;
use Import\Mapping\Plugin\PluginBinding;
use Import\Mapping\Plugin\PluginLnlDescription;
use Import\Mapping\Plugin\PluginLnlDimension;
use Import\Mapping\Plugin\PluginLnlPublication;
use Import\Mapping\Plugin\PluginRemoveChars;
use Import\Mapping\Plugin\PluginStripSlashes;
use Doctrine\ORM\Query\Expr\Join;

class ImportLnlProduct extends ImportAbstract
{
    public function start()
    {
        $this->getServiceLocator()->get('Common')->trace('Rozpoczynam import produktów Lnl');
        return parent::start();
    }

    protected function _initMappingConfig()
    {
        $this->setIdField('productl_index_lnl');
        $this->addRowMapping('product_id', 'productl_index_lnl');
        $this->addRowMapping('product_desc', 'productl_description', new PluginLnlDescription());
        $this->addRowMapping('product_full_image', 'productl_remote_image');
        $this->addRowMapping('product_name', 'productl_title');
        $this->addRowMapping('autor', 'productl_author');
        $this->addRowMapping('stron', 'productl_pages');
        $this->addRowMapping('oprawa', 'productl_binding_type', new PluginBinding());
        $this->addRowMapping('isbn', 'productl_isbn', new PluginRemoveChars(array(',', '-')));
        $this->addRowMapping('ean', 'productl_bar_code', new PluginRemoveChars('-'));
        $this->addRowMapping('miejscerok', null, new PluginLnlPublication());
        $this->addRowMapping('wymiary', null, new PluginLnlDimension());
        $this->addRowMapping('wydawca_nazwa', 'publisher_name', array(new PluginRemoveChars("\n"), new PluginStripSlashes()));
        $this->addRowMapping('product_in_stock', 'productap_in_stock', new PluginStripSlashes());
    }


    protected function _importPart(&$aData)
    {
        $oEm = $this->getEntityManager();
        $oQB = $oEm->createQueryBuilder();
        $oQB->select('product')
            ->from('Application\Entity\EntityProductList', 'product')
            ->leftJoin(
                'Application\Entity\EntityProductAvailablePrice',
                'productAvailablePrice',
                Join::WITH,
                'productAvailablePrice.productapProductl = product.productlId AND productAvailablePrice.productapSupplier = :supplier')
            ->where($oQB->expr()->in('product.productlIndexLnl', array_keys($aData)))
            ->setParameter('supplier', $this->getSupplier());
        $oProducts = $oQB->getQuery()->getResult();

        //aktualizacja
        $this->getServiceLocator()->get('Common')->trace('Znaleziono ' . count($oProducts) . ' do aktualizacji');
        /** @var \Application\Entity\EntityProductList $oProduct */
        foreach ($oProducts as $oProduct) {
            $oEm->persist($oProduct);
            $aProductData = $aData[$oProduct->getProductlIndexLnl()];
            $this->_updateAvailability($oProduct, $aProductData);
            unset($aData[$oProduct->getProductlIndexLnl()]); //resztę produktów dodam jako nowe
        }

        //dodawanie nowych
        $this->getServiceLocator()->get('Common')->trace('Znaleziono ' . count($aData) . ' do dodania');
        foreach ($aData as $aProductData) {
            $oProduct = new EntityProductList();
            $oEm->persist($oProduct);
            $oProduct->setFromArray($aProductData);
            $oProduct->setProductlPublisher($this->_getPublisherByName($aProductData['publisher_name']));
            $this->_updateAvailability($oProduct, $aProductData);
            $this->_setCategory($oProduct, $aProductData);
        }
        $oEm->flush();
        $oEm->clear('Application\Entity\EntityProductList');
        $oEm->clear('Application\Entity\EntityProductAvailablePrice');
    }

    /**
     * Ustawiam kategorię allegro i remote, tylko podczas dodawania nowych produktów
     * @param EntityProductList $oProduct
     * @param array $aProductData
     */
    protected function _setCategory(EntityProductList &$oProduct, array &$aProductData)
    {
        $sRemoteCategoryName = $this->_getRemoteCategoryName($aProductData);
        $oRemoteCategory = $this->_getRemoteCategoryByName($sRemoteCategoryName);
        $oProduct->setProductlCategoryr($oRemoteCategory);
        $oProduct->setProductlCategorya($oRemoteCategory->getCatergoryrCategorya());
    }

    protected function _getRemoteCategoryName($aProductData)
    {
        $sUrl = 'http://ll.com.pl/index.php?page=shop.product_details&product_id=' . $aProductData['productl_index_lnl'];
        $aData = $this->_getHttpPageData($sUrl);
        if (!isset($aData['content'])) {
            $this->getServiceLocator()->get('Common')->trace('Wystąpił błąd pobrania strony o adresie: ' . $sUrl);
            return '';
        }
        $aMatches = array();
        preg_match('/<a class="pathway"(.*)>(.*)<\/a>/', $aData['content'], $aMatches);
        if (isset($aMatches[2])) {
            return ucfirst($aMatches[2]);
        }
        return self::EMPTY_CATEGORY;
    }

    /**
     * Aktualizacja dostępności, jeśli jej nie ma lub jest różna
     * @param $oProduct
     * @param $aProductData
     */
    protected function _updateAvailability(EntityProductList &$oProduct, array &$aProductData)
    {
        if ($aProductData['productap_in_stock'] < self::MIN_IN_STOCK) {
            $aProductData['productap_in_stock'] = 0;
        }
        /** @var \Doctrine\ORM\PersistentCollection $oProductAvailableCollection */
        $oProductAvailable = $oProduct->getProductlAvailablePricePerSupplier($this->getSupplier());
        if ($oProductAvailable === null) {
            $oProductAvailable = new EntityProductAvailablePrice(); //tworzę nowy wpis
            $this->getEntityManager()->persist($oProductAvailable);
            $oProductAvailable->setProductapAvailableLastUpdate(new \DateTime());
            $oProductAvailable->setProductapRecentlyChanged(1);
            $oProductAvailable->setProductapInStock($aProductData['productap_in_stock']);
            $oProductAvailable->setProductapSupplier($this->getSupplier());
            $oProductAvailable->setProductapProductl($oProduct);
            $oProductAvailable->setProductapPrice(0);
        } else {
            if ($oProductAvailable->getProductapInStock() != $aProductData['productap_in_stock']) {
                $this->getEntityManager()->persist($oProductAvailable);
                $oProductAvailable->setProductapAvailableLastUpdate(new \DateTime());
                $oProductAvailable->setProductapRecentlyChanged(1);
                $oProductAvailable->setProductapInStock($aProductData['productap_in_stock']);
            }
        }
    }

    protected function _afterImport()
    {
        $this->_updateAvailabilityAndPrice();
        $oConnection = $this->getEntityManager()->getConnection();
        ///duplikaty

        $this->getServiceLocator()->get('Common')->trace('Ustawiam productl_is_duplicate na 0');
        $oConnection->executeQuery('update product_list set productl_is_duplicate = 0 where productl_is_duplicate = 1');

        $this->getServiceLocator()->get('Common')->trace('Pobieram id produktów nie będących duplikatami');
        $sql = 'SELECT productl_id
            FROM (
            SELECT productl_id, productl_bar_code
            FROM product_list
            ORDER BY productl_in_stock DESC) x
            GROUP BY productl_bar_code';
        $stmt = $this->getEntityManager()->getConnection()->prepare($sql);
        $stmt->execute();
        $aResults = $stmt->fetchAll();
        $aProductIds = array();
        foreach ($aResults as $aResult) {
            $aProductIds[] = $aResult['productl_id'];
        }
        if (!empty($aProductIds)) {
            $this->getServiceLocator()->get('Common')->trace('Ustawiam productl_is_duplicate = 1 dla duplikatów. Nie-duplikatów: ' . count($aProductIds));
            $oConnection->executeQuery('update product_list set productl_is_duplicate = 1 where productl_is_duplicate = 0 AND productl_id not in (' . implode(',', $aProductIds) . ')');
        }
        $this->getServiceLocator()->get('Common')->trace('Koniec _afterImport');
    }

}