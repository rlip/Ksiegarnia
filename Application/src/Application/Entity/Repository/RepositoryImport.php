<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 26.03.15
 * Time: 21:22
 */

namespace Application\Entity\Repository;
use Doctrine\ORM\QueryBuilder;

class RepositoryImport extends RepositoryAbstract
{
    const CODE_LOCAL_STORAGE = 'LOCAL_STORAGE';
    const CODE_LNL_PRICE = 'LNL_PRICE';
    const CODE_LNL_PRODUCT = 'LNL_PRODUCT';

    const DOWNLOAD_TYPE_HTTP = 1;

    const UNPACK_TYPE_BZ2 = 1;

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