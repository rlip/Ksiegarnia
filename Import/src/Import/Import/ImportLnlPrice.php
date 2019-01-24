<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 24.03.15
 * Time: 19:44
 */

namespace Import\Import;
use Application\Entity\EntityProductAvailablePrice;
use Doctrine\ORM\Query\Expr\Join;
use Import\Mapping\Plugin\PluginRound;

class ImportLnLPrice extends ImportAbstract
{

    public function start(){
        $this->getServiceLocator()->get('Common')->trace('Rozpoczynam import cen Lnl');
        return parent::start();
    }

    protected function _initMappingConfig(){
        $this->setIdField('productl_index_lnl');
        $this->addRowMapping('product_id', 'productl_index_lnl');
        $this->addRowMapping('product_price', 'productp_price', new PluginRound(2));
    }


    protected function _importPart(&$aData){
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
        if(empty($oProducts)){
            $this->getServiceLocator()->get('Common')->trace('Nie znaleziono produktów do aktualizacji cen');
            return;
        }
        $this->getServiceLocator()->get('Common')->trace('Znaleziono ' . count($oProducts) . ' do aktualizacji cen');
        /** @var \Application\Entity\EntityProductList $oProduct */
        foreach ($oProducts as $oProduct) {
            $aProductData = $aData[$oProduct->getProductlIndexLnl()];
            $oProductPrice = $oProduct->getProductlAvailablePricePerSupplier($this->getSupplier());
            if ($oProductPrice === null) {
                $oProductPrice = new EntityProductAvailablePrice();
                $this->getEntityManager()->persist($oProductPrice);
                $oProductPrice->setProductapPriceLastUpdate(new \DateTime());
                $oProductPrice->setProductapRecentlyChanged(1);
                $oProductPrice->setProductapSupplier($this->getSupplier());
                $oProductPrice->setProductapProductl($oProduct);
                $oProductPrice->setProductapPrice($aProductData['productp_price']);
            } else {
                /** @var \Application\Entity\EntityProductAvailablePrice */
                if($oProductPrice->getProductapPrice() != $aProductData['productp_price']){ //uaktualniam tylko jeśli się coś zmieniło
                    $this->getEntityManager()->persist($oProductPrice);
                    $oProductPrice->setProductapPriceLastUpdate(new \DateTime());
                    $oProductPrice->setProductapRecentlyChanged(1);
                    $oProductPrice->setProductapPrice($aProductData['productp_price']);
                }
            }
        }
        $oEm->flush();
        $oEm->clear('Application\Entity\EntityProductList');
        $oEm->clear('Application\Entity\EntityProductAvailablePrice');
    }
    protected function _afterImport()
    {
        $this->_updateAvailabilityAndPrice();
    }

} 