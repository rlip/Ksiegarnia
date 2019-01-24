<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 29.03.15
 * Time: 21:12
 */

namespace Import\Mapping\Plugin;

class PluginStripSlashes extends PluginAbstract
{
    public function execute()
    {
        $this->_addDataRowResult(stripslashes($this->_getFromValue()));
    }
} 