<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 29.03.15
 * Time: 21:12
 */

namespace Import\Mapping\Plugin;


class PluginLnlDimension extends PluginAbstract
{
    const MIN_LENGTH_MM = 10;
    const MAX_LENGTH_MM = 300;

    public function execute()
    {
        if($sValue = $this->_getFromValue()){
            $aResults = explode('x', $sValue, 2);
            if(!is_array($aResults)){
                return;
            }
            sort($aResults);
            if(isset($aResults[0])){
                $iLength = intval($aResults[0]);
                if(($iLength >= self::MIN_LENGTH_MM) AND ($iLength <= self::MAX_LENGTH_MM)){
                    $this->_addDataRowResult($iLength, 'productl_width');
                }
            }
            if(isset($aResults[1])){
                $iLength = intval($aResults[1]);
                if(($iLength >= self::MIN_LENGTH_MM) AND ($iLength <= self::MAX_LENGTH_MM)){
                    $this->_addDataRowResult($iLength, 'productl_length');
                }
            }
        }
    }
} 