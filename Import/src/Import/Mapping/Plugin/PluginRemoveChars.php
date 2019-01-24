<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 29.03.15
 * Time: 21:12
 */

namespace Import\Mapping\Plugin;

class PluginRemoveChars extends PluginAbstract
{
    protected $_aChars; //tablica lub string

    public function __construct($aChars)
    {
        $this->_aChars = $aChars;
    }

    public function execute()
    {
        $this->_addDataRowResult(str_replace($this->_aChars, '', $this->_getFromValue()));
    }
} 