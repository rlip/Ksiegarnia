<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 17.04.15
 * Time: 20:28
 */

namespace Admin\Operation;


use Application\Entity\EntityCategoryAllegro;
use Application\Entity\EntityCategoryRemote;
use Common\Operation\OperationAbstract;

class Category extends OperationAbstract
{

    protected $_aAllegroCategories;

    public function getCategoryMap()
    {
        if ($this->_isCached(__METHOD__)) {
            return $this->_getCached(__METHOD__);
        }
        $aCategories = $this->getEntityManager()->getRepository('Application\Entity\EntityCategoryRemote')->getAllAsArray();
        $aResults = array();
        foreach ($aCategories as $aCategory) {
            $aCategory['leaf'] = true;
            $aCategory['categoryaId'] = $aCategory['catergoryrCategorya'] ? $aCategory['catergoryrCategorya']['categoryaId'] : null;
            $aCategory['categoryaPath'] = $aCategory['catergoryrCategorya'] ? $this->_getCategoryAllegroPath($aCategory['catergoryrCategorya']['categoryaId']) : null;
            $aResults[$aCategory['categoryrId']] = $aCategory;
        }
        foreach ($aResults as $aRow) {
            if ($aRow['categoryr_parent_id'] != null) {
                $aResults[$aRow['categoryr_parent_id']]['leaf'] = false;
                $aResults[$aRow['categoryr_parent_id']]['results'][] = &$aResults[$aRow['categoryrId']];
            }
        }
        foreach ($aResults as $id => $aRow) {
            if ($aRow['categoryr_parent_id'] != null) {
                unset($aResults[$id]);
            }
        }
        $aResults = array_values($aResults);
        $this->_addToCache(__METHOD__, $aResults);
        return $aResults;
    }

    public function saveCategoryMap(){
        $iRemoteCategoryId = $this->getContentParam('categoryrId');
        $iAllegroCategoryId = $this->getContentParam('categoryaId');

        /** @var $oRemoteCategory EntityCategoryRemote*/
        $oRemoteCategory = $this->getEntityManager()->getRepository('Application\Entity\EntityCategoryRemote')->find($iRemoteCategoryId);
        /** @var $oAllegroCategory EntityCategoryAllegro*/
        $oAllegroCategory = $this->getEntityManager()->getRepository('Application\Entity\EntityCategoryAllegro')->find($iAllegroCategoryId);

        if(!$oRemoteCategory->getCategoryrId() || !$oAllegroCategory->getCategoryaId()){
            throw new \Exception('Kategorie nie zostały odnalezione');
        }

        $this->_mapAllegroCategoryForRemote($oRemoteCategory, $oAllegroCategory);
        $this->getEntityManager()->flush();
        $this->_removeFromCache( __CLASS__ . 'getCategoryMap');
    }


    /**
     * @param $oRemoteCategory \Application\Entity\EntityCategoryRemote
     * @param $oAllegroCategory \Application\Entity\EntityCategoryAllegro
     */
    protected function _mapAllegroCategoryForRemote(EntityCategoryRemote $oRemoteCategory, EntityCategoryAllegro $oAllegroCategory){
        $oRemoteCategory->setCatergoryrCategorya($oAllegroCategory);
        $oRemoteCategory->setCategoryrMappingChanged(true);
        $this->getEntityManager()->persist($oRemoteCategory);
        foreach($oRemoteCategory->getChildren() as $oChild){
            $this->_mapAllegroCategoryForRemote($oChild, $oAllegroCategory);
        }
    }

    public function getCategoryAllegro()
    {
        $aCategories = $this->_getAllegroCategories();
        $aResults = array();
        foreach ($aCategories as $aCategory) {
            $aCategory['leaf'] = true;
            $aResults[$aCategory['categoryaId']] = $aCategory;
        }
        foreach ($aResults as $aRow) {
            if ($aRow['categorya_parent_id'] != null) {
                $aResults[$aRow['categorya_parent_id']]['leaf'] = false;
                $aResults[$aRow['categorya_parent_id']]['results'][] = &$aResults[$aRow['categoryaId']];
            }
        }
        foreach ($aResults as $id => $aRow) {
            if ($aRow['categorya_parent_id'] != null) {
                unset($aResults[$id]);
            }
        }
        $aResults = array_values($aResults);
        return $aResults;
    }

    protected function _getCategoryAllegroPath($idCategory)
    {
        $aCategories = $this->_getAllegroCategories();
        $aReturn = array();
        $iCurrentId = $idCategory;
        for ($i = 0; $i < 10; $i++) { //nie przewiduję większego zagnieżdżenia niż 10
            if (isset($aCategories[$iCurrentId])) {
                $aReturn[] = $aCategories[$iCurrentId]['categoryaName'];
                $iCurrentId = $aCategories[$iCurrentId]['categorya_parent_id'];
                if (!$iCurrentId) {
                    break;
                }
            }
        }
        $aReturn = array_reverse($aReturn);
        return implode(' > ', $aReturn);
    }

    protected function _getAllegroCategories()
    {
        if (!$this->_aAllegroCategories) {
            if ($this->_isCached(__METHOD__)) {
                return $this->_getCached(__METHOD__);
            }
            $aResults = $this->getEntityManager()->getRepository('Application\Entity\EntityCategoryAllegro')->getAllCategoriesAssociative();
            $this->_addToCache(__METHOD__, $aResults);
            return $aResults;
        }
        return $this->_aAllegroCategories;
    }

} 