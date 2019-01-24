<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 29.03.15
 * Time: 21:12
 */

namespace Import\Mapping\Plugin;

class PluginRound extends PluginAbstract
{
    protected $_iPrecision;

    public function __construct($_iPrecision = 2)
    {
        $this->_iPrecision = $_iPrecision;
    }

    public function execute()
    {
        $this->_addDataRowResult(round($this->_getFromValue(), $this->_iPrecision));
    }
} 