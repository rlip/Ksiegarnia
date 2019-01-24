<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 26.03.15
 * Time: 21:22
 */

namespace Application\Entity\Repository;
use Doctrine\ORM\QueryBuilder;

class RepositoryProduct extends RepositoryAbstract
{
    const BINDING_NO_DATA = 0;
    const BINDING_SOFT = 1;
    const BINDING_HARD = 2;
    const BINDING_BOX = 3;
    const BINDING_CARTON = 4;
    const BINDING_CD = 5;

    static function bindingTypeToName($iType)
    {
        switch ($iType) {
            case self::BINDING_SOFT:
                return 'Miękka';
            case self::BINDING_HARD:
                return 'Twarda';
            case self::BINDING_BOX:
                return 'Pudełko';
            case self::BINDING_CARTON:
                return 'Karton';
            case self::BINDING_CD:
                return 'CD';
        }
        return '';
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