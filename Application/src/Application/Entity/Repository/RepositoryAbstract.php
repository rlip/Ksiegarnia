<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 26.03.15
 * Time: 21:22
 */

namespace Application\Entity\Repository;

use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;
use ExtJs\JsonModel\SuccessModel;

abstract class RepositoryAbstract extends EntityRepository
{

    protected $_sEntityAlias = 'entity';
    protected $_aConfigData = array();

    public function getSingleId()
    {
        return $this->getClassMetadata()->getSingleIdentifierFieldName();
    }

    public function getEntityAlias()
    {
        return $this->_sEntityAlias;
    }

    public function getPaginationListExtModel($aConfigData, $aFields = null){
        $oSuccessModel = new SuccessModel();
        $aResult = $this->getPaginationList($aConfigData, $aFields);
        $aResult->setUseOutputWalkers(false);
        $oSuccessModel->setResult($aResult);
        $oSuccessModel->setTotal(count($aResult));
        return $oSuccessModel;
    }

    public function getPaginationList($aConfigData, $aFields){
        $iStart = (isset($aConfigData['start']) AND $aConfigData['start'] >= 0)  ? $aConfigData['start'] : 0;
        $iLimit = (isset($aConfigData['limit']) AND $aConfigData['limit'] >= 0) ? $aConfigData['limit'] : 20;
        $this->_setConfigData($aConfigData);
        $aFields = $this->_processFields($aFields);

        $qb = $this->_getQueryBuilder($aFields)
            ->setFirstResult($iStart)
            ->setMaxResults($iLimit);
        return new Paginator($qb->getQuery());
    }

    protected function  _processFields($aFields = null){
        if(is_array($aFields)){
            foreach($aFields as &$aField){
                if(strpos('.', $aField) === false){
                    $aField = $this->getEntityAlias() . '.' . $aField;
                }
            }
        }
        return $aFields;
    }

    public function getAllAsArray($aFields = null)
    {
        $aFields = $this->_processFields($aFields);
        $hydrationMode = AbstractQuery::HYDRATE_ARRAY;
        $oQuery = $this->_getQueryBuilder($aFields)->getQuery();
        $oQuery->setHint(Query::HINT_INCLUDE_META_COLUMNS, true);
        $aResults =  $oQuery->getResult($hydrationMode);
        return $aResults;
    }

    protected function _getQueryBuilder($aFields = null){
        if(!$aFields){
            $aFields = $this->getEntityAlias();
        }
        $oQB = $this->getEntityManager()->createQueryBuilder();
        $oQB->select($aFields)
            ->from($this->getClassName(), $this->getEntityAlias());
        $this->_addJoin($oQB);
        $this->_addSort($oQB);
        $this->_addFilter($oQB);
        return $oQB;
    }

    protected abstract function _addJoin(QueryBuilder $oQB);
    protected abstract function _addSort(QueryBuilder $oQB);
    protected abstract function _addFilter(QueryBuilder $oQB);

    /**
     * @return array
     */
    public function _getConfigData()
    {
        return $this->_aConfigData;
    }

    /**
     * @param array $aConfigData
     */
    public function _setConfigData($aConfigData)
    {
        $this->_aConfigData = $aConfigData;
    }
}
