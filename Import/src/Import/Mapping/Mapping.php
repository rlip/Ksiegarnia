<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 29.03.15
 * Time: 19:15
 */

namespace Import\Mapping;


class Mapping
{
    protected $_sFrom;
    protected $_sTo;
    protected $_aPlugins;

    public function __construct($sFrom, $sTo, $aPlugins = array())
    {
        $this->_sFrom = $sFrom;
        $this->_sTo = $sTo;
        $this->_aPlugins = $aPlugins;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->_sFrom;
    }

    /**
     * @return string
     */
    public function getTo()
    {
        return $this->_sTo;
    }

    /**
     * @param DataRow $oDataRow tu trzeba zapisać wynik
     * @param array $aSourceData
     * @internal param array $aData
     */
    public function executeMapping(DataRow &$oDataRow, array $aSourceData)
    {
        if(empty($this->_aPlugins)){
            $oDataRow->setResultData($this->getTo(), trim($aSourceData[$this->getFrom()]));
            return;
        }
        /** @var \Import\Mapping\Plugin\PluginAbstract $oPlugin */
        foreach ($this->_aPlugins as $oPlugin) {
            $oPlugin->setDataRow($oDataRow); //to potrzebne żeby dodawać wynik
            $oPlugin->setSourceData($aSourceData); //to żeby mieć dostęp do pełnego wiersza danych
            $oPlugin->setMapping($this); // a tu jest zapisane pod jakim kluczem zapisać dane
            $oPlugin->execute();
        }
    }

}