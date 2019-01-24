<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 26.03.15
 * Time: 21:22
 */

namespace Application\Entity\Repository;
use Doctrine\ORM\QueryBuilder;

class RepositorySupplier extends RepositoryAbstract
{
    const SUPPLIER_ID_LOCAL_STORAGE = 1;
    const SUPPLIER_ID_LNL = 2;

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