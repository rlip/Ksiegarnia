<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 29.03.15
 * Time: 21:12
 */

namespace Import\Mapping\Plugin;


use Application\Entity\Repository\RepositoryProduct;

class PluginBinding extends PluginAbstract
{

    public function execute()
    {
        $sValue = strtolower($this->_getCommon()->cleanChars($this->_getFromValue()));
        if (strpos($sValue, 'miekka')) {
            $this->_addDataRowResult(RepositoryProduct::BINDING_SOFT);
        } elseif (strpos($sValue, 'twarda')) {
            $this->_addDataRowResult(RepositoryProduct::BINDING_HARD);
        } elseif (strpos($sValue, 'pudelko')) {
            $this->_addDataRowResult(RepositoryProduct::BINDING_BOX);
        } elseif (strpos($sValue, 'karton')) {
            $this->_addDataRowResult(RepositoryProduct::BINDING_CARTON);
        } elseif (strpos($sValue, 'cd')) {
            $this->_addDataRowResult(RepositoryProduct::BINDING_CD);
        } else {
            $this->_addDataRowResult(RepositoryProduct::BINDING_NO_DATA);
        }
    }
} 