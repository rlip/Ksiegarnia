<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 26.03.15
 * Time: 21:22
 */

namespace Application\Entity\Repository;
use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\QueryBuilder;

class RepositoryCategoryAllegro extends RepositoryAbstract
{
    /**
     * Zwraca wszystkie kategorie w tablicy i kluczach równych id kategorii
     */
    public function getAllCategoriesAssociative(){
        $aCategories = $this->getAllAsArray();
        $aResult = array();
        foreach($aCategories as $a){
            $aResult[$a['categoryaId']] = $a;
        }
        return $aResult;
    }

    protected function _addJoin(QueryBuilder $oQB)
    {
    }

    protected function _addSort(QueryBuilder $oQB)
    {
    }

    protected function _addFilter(QueryBuilder $oQB)
    {
    }

}