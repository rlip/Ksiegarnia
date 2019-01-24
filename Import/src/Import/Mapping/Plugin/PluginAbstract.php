<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 29.03.15
 * Time: 19:36
 */

namespace Import\Mapping\Plugin;


use Common\Operation\CommonFunction;
use Import\Mapping\Mapping;
use Import\Mapping\DataRow;

abstract class PluginAbstract
{
    protected $_oCommon;
    /** @var DataRow */
    protected $_oDataRow;
    /** @var Mapping */
    protected $_oMapping;
    /** $var array */
    protected $_aSourceData;

    abstract public function execute();

    public function setDataRow(&$oDataRow)
    {
        $this->_oDataRow = $oDataRow;
    }

    protected function _addDataRowResult($value, $sKey = null){
        if(!$sKey){
            $sKey = $this->_getToKey();
        }
        $this->_oDataRow->setResultData($sKey, $value);
    }

    /**
     * @return \Import\Mapping\Mapping
     */
    protected function _getSourceData()
    {
        return $this->_aSourceData;
    }

    /**
     * @param array $aSourceData
     */
    public function setSourceData($aSourceData)
    {
        $this->_aSourceData = $aSourceData;
    }

    public function setMapping(Mapping &$oMapping)
    {
        $this->_oMapping = $oMapping;
    }

    protected function _getToKey(){
        return $this->_oMapping->getTo();
    }

    protected function _getFromKey(){
        return $this->_oMapping->getFrom();
    }

    /**
     * Zwraca wartość z danych wejściowych o kluczu from z klasy Mapping
     * @return mixed
     * @throws \Exception
     */
    protected function _getFromValue(){
        if(!isset($this->_aSourceData[$this->_getFromKey()])){
            throw new \Exception('Brak danych o kluczu ' . $this->_getFromKey());
        }
        return $this->_aSourceData[$this->_getFromKey()];
    }

    protected function _getCommon()
    {
        if (!$this->_oCommon) {
            $this->_oCommon = new CommonFunction();
        }
        return $this->_oCommon;
    }
}