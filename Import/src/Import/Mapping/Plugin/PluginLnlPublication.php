<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 29.03.15
 * Time: 21:12
 */

namespace Import\Mapping\Plugin;


class PluginLnlPublication extends PluginAbstract
{

    public function execute()
    {
        $aMatches = array();
        $sValue = $this->_getFromValue();
        $sPlace = '';
        $sYear = 0;

        preg_match("/(^|\s)(\d{4})(\s|$)/", $sValue, $aMatches);
        if (isset($aMatches[2])) {
            $sYear = $aMatches[2];
            $sPlace = str_replace($sYear, '', $sValue);
        }

        $this->_addDataRowResult($sPlace, 'productl_publication_place');
        $this->_addDataRowResult($sYear, 'productl_publication_year');
    }
} 