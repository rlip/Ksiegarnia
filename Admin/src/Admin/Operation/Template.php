<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 17.04.15
 * Time: 20:28
 */

namespace Admin\Operation;

use Application\Entity\EntityAllegroTemplateDesignCategory;
use Application\Entity\EntityAllegroTemplateDesignList;
use Application\Entity\EntityAllegroTemplateShipmentCategory;
use Application\Entity\EntityAllegroTemplateShipmentHasAllegroShipment;
use Application\Entity\EntityAllegroTemplateShipmentList;
use Common\Operation\OperationAbstract;
use ExtJs\JsonModel\SuccessModel;

class Template extends OperationAbstract
{
    public function getTemplateDesignList()
    {
        return $this->getEntityManager()->getRepository('Application\Entity\EntityAllegroTemplateDesignList')->getPaginationListExtModel($this->getPayload(), array('allegrotdlId', 'allegrotdlName', 'allegrotdlIsDefault'));
    }

    public function getTemplateDesignFrom()
    {
        $oTemplate = $this->getEntityManager()->getRepository('Application\Entity\EntityAllegroTemplateDesignList')->find($this->getContentParam('allegrotdlId'));
        $aAllegroCategoryIds = array();
        /** @var EntityAllegroTemplateDesignCategory $oDesignCategory */
        foreach ($oTemplate->getAllegrotdlCategory()->toArray() as $oDesignCategory) {
            $aAllegroCategoryIds[] = $oDesignCategory->getAllegrotdcCategorya()->getCategoryaId();
        }
        $aReturn = $oTemplate->serialize();
        $aReturn['selectedAllegroCategories'] = $aAllegroCategoryIds;
        return new SuccessModel($aReturn);
    }

    public function saveTemplateDesignFrom()
    {
        $iId = $this->getContentParam('allegrotdlId');
        $sName = $this->getContentParam('allegrotdlName');
        $sValue = $this->getContentParam('allegrotdlValue');
        $bIsDefault = $this->getContentParam('allegrotdlIsDefault');
        $aCategories = $this->getContentParam('selectedAllegroCategories');
        if ($iId) {
            $oTemplate = $this->getEntityManager()->find('Application\Entity\EntityAllegroTemplateDesignList', $iId);
            //usuwam stare powiazania
            $qb = $this->getEntityManager()->createQueryBuilder();
            $qb->delete('Application\Entity\EntityAllegroTemplateDesignCategory', 'c');
            $qb->andWhere($qb->expr()->eq('c.allegrotdcAllegrotdl', ':allegrotdcAllegrotdl'));
            $qb->setParameter(':allegrotdcAllegrotdl', $oTemplate);
            $qb->getQuery()->execute();
        } else {
            $oTemplate = new EntityAllegroTemplateDesignList();
        }
        $this->getEntityManager()->persist($oTemplate);
        $oTemplate->setallegrotdlName($sName);
        $oTemplate->setallegrotdlValue($sValue);
        $oTemplate->setAllegrotdlIsDefault($bIsDefault);
        foreach ($aCategories as $idCategory) {
            $oCategoryAllegro = $this->getEntityManager()->getReference('Application\Entity\EntityCategoryAllegro', $idCategory);
            $oDesignCategory = new EntityAllegroTemplateDesignCategory();
            $this->getEntityManager()->persist($oDesignCategory);
            $oDesignCategory->setAllegrotdcCategorya($oCategoryAllegro);
            $oDesignCategory->setAllegrotdcAllegrotdl($oTemplate);
        }
        $this->getEntityManager()->flush();
        return new SuccessModel();
    }

    public function deleteTemplateDesignList()
    {
        return $this->_commonDelete('Application\Entity\EntityAllegroTemplateDesignList', 'allegrotdlId');
    }

    public function getTemplateShipmentList()
    {
        return $this->getEntityManager()->getRepository('Application\Entity\EntityAllegroTemplateShipmentList')->getPaginationListExtModel($this->getPayload(), array('allegrotslId', 'allegrotslName', 'allegrotslIsDefault'));
    }

    public function getTemplateShipmentFrom()
    {
        /** @var \Application\Entity\EntityAllegroTemplateShipmentList $oTemplate */
        $oTemplate = $this->getEntityManager()->getRepository('Application\Entity\EntityAllegroTemplateShipmentList')->find($this->getContentParam('allegrotslId'));
        if(!$oTemplate){
            throw new \Exception('Nie znaleziono szablonu');
        }
        $aAllegroCategoryIds = array();
        /** @var EntityAllegroTemplateShipmentCategory $oShipmentCategory */
        foreach ($oTemplate->getAllegrotslCategory()->toArray() as $oShipmentCategory) {
            $aAllegroCategoryIds[] = $oShipmentCategory->getAllegrotscCategorya()->getCategoryaId();
        }

        $aAllegroShipments = array();
        /** @var \Application\Entity\EntityAllegroTemplateShipmentHasAllegroShipment $oAllegroHasShipment */
        foreach ($oTemplate->getAllegrotslHasAllegroShipment()->toArray() as $oAllegroHasShipment) {
            $aData = $oAllegroHasShipment->serialize();
            $aData['allegrosName'] = $oAllegroHasShipment->getAllegrotshasAllegros()->getAllegrosName();
            $aData['allegrosId'] = $oAllegroHasShipment->getAllegrotshasAllegros()->getAllegrosId();
            $aAllegroShipments[] = $aData;
        }

        $aReturn = $oTemplate->serialize();
        $aReturn['selectedAllegroCategories'] = $aAllegroCategoryIds;
        $aReturn['selectedShipments'] = $aAllegroShipments;
        return new SuccessModel($aReturn);
    }

    public function saveTemplateShipmentFrom()
    {
        $iId = $this->getContentParam('allegrotslId');
        $sName = $this->getContentParam('allegrotslName');
        $sValue = $this->getContentParam('allegrotslValue');
        $bIsDefault = $this->getContentParam('allegrotslIsDefault');
        $aCategories = $this->getContentParam('selectedAllegroCategories');
        if ($iId) {
            $oTemplate = $this->getEntityManager()->find('Application\Entity\EntityAllegroTemplateShipmentList', $iId);
            //usuwam stare powiązania kategorii
            $qb = $this->getEntityManager()->createQueryBuilder();
            $qb->delete('Application\Entity\EntityAllegroTemplateShipmentCategory', 'c');
            $qb->andWhere($qb->expr()->eq('c.allegrotscAllegrotsl', ':allegrotscAllegrotsl'));
            $qb->setParameter(':allegrotscAllegrotsl', $oTemplate);
            $qb->getQuery()->execute();

            //usuwam stare powiązania szablonów wysyłki allegro
            $qb = $this->getEntityManager()->createQueryBuilder();
            $qb->delete('Application\Entity\EntityAllegroTemplateShipmentHasAllegroShipment', 's');
            $qb->andWhere($qb->expr()->eq('s.allegrotshasAllegrotsl', ':allegrotshasAllegrotsl'));
            $qb->setParameter(':allegrotshasAllegrotsl', $oTemplate);
            $qb->getQuery()->execute();
        } else {
            $oTemplate = new EntityAllegroTemplateShipmentList();
        }
        $this->getEntityManager()->persist($oTemplate);
        $oTemplate->setallegrotslName($sName);
        $oTemplate->setallegrotslValue($sValue);
        $oTemplate->setAllegrotslIsDefault($bIsDefault);
        foreach ($aCategories as $idCategory) {
            /** @var \Application\Entity\EntityCategoryAllegro $oCategoryAllegro */
            $oCategoryAllegro = $this->getEntityManager()->getReference('Application\Entity\EntityCategoryAllegro', $idCategory);
            $oShipmentCategory = new EntityAllegroTemplateShipmentCategory();
            $this->getEntityManager()->persist($oShipmentCategory);
            $oShipmentCategory->setAllegrotscCategorya($oCategoryAllegro);
            $oShipmentCategory->setAllegrotscAllegrotsl($oTemplate);
        }
        $aAllegroTemplateShipmentHasAllegroShipment = $this->getContentParam('allegroTemplateShipmentHasAllegroShipment');
        foreach($aAllegroTemplateShipmentHasAllegroShipment as $oShipment){
            /** @var \Application\Entity\EntityAllegroShipment $oAllegroShipment */
            $oAllegroShipment = $this->getEntityManager()->getReference('Application\Entity\EntityAllegroShipment', $oShipment->allegrosId);
            $oShipmentTemplateHasAllegroShipment = new EntityAllegroTemplateShipmentHasAllegroShipment();
            $this->getEntityManager()->persist($oShipmentTemplateHasAllegroShipment);
            $oShipmentTemplateHasAllegroShipment->setAllegrotshasAllegros($oAllegroShipment);
            $oShipmentTemplateHasAllegroShipment->setAllegrotshasFistItem($oShipment->allegrotshasFistItem);
            $oShipmentTemplateHasAllegroShipment->setAllegrotshasNextItem($oShipment->allegrotshasNextItem);
            $oShipmentTemplateHasAllegroShipment->setAllegrotshasInPack($oShipment->allegrotshasInPack);
            $oShipmentTemplateHasAllegroShipment->setAllegrotshasAllegrotsl($oTemplate);
        }
        $this->getEntityManager()->flush();
        return new SuccessModel();
    }

    public function deleteTemplateShipmentList()
    {
        return $this->_commonDelete('Application\Entity\EntityAllegroTemplateShipmentList', 'allegrotslId');
    }
}