<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 29.03.15
 * Time: 21:12
 */

namespace Import\Mapping\Plugin;


class PluginLnlDescription extends PluginAbstract
{

    public function execute()
    {
        $aMatches = array();
        $sValue = $this->_getFromValue();
        preg_match("/<\/ul>(.+)/s", $sValue, $aMatches);
        if (isset($aMatches[1])) {
            $sValue = $aMatches[1];
        }
        $sValue = trim(preg_replace("/\n\n/", "", $sValue), "\n");
        $this->_addDataRowResult($sValue);
    }
} 