<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 01.05.15
 * Time: 16:29
 */

namespace Import\Mapping;

use Common\Operation\CommonFunction;

class DataRow
{
    /** @var CommonFunction */
    protected $_oCommon;
    protected $_aSourceData;
    protected $_aResultData = array();
    protected $_aRowMapping = array();
    protected $_sIdField;

    /**
     * @return mixed
     */
    protected function _getSourceData()
    {
        return $this->_aSourceData;
    }

    /**
     * @param mixed $aSourceData
     */
    public function setSourceData($aSourceData)
    {
        $this->_aSourceData = $aSourceData;
    }


    /**
     * @return mixed
     */
    protected function _getRowMapping()
    {
        return $this->_aRowMapping;
    }

    /**
     * @param mixed $aRowMapping
     */
    public function setRowMapping($aRowMapping)
    {
        $this->_aRowMapping = $aRowMapping;
    }

    /**
     * @return mixed
     */
    protected function _getIdField()
    {
        return $this->_sIdField;
    }

    /**
     * @param mixed $sIdField
     */
    public function setIdField($sIdField)
    {
        $this->_sIdField = $sIdField;
    }

    /**
     * @param $sKey
     * @param $value
     * @internal param mixed $aData
     */
    public function setResultData($sKey, $value)
    {
        $this->_aResultData[$sKey] = $value;
    }

    protected function _getResultData()
    {
        return $this->_aResultData;
    }

    protected function _getCommon()
    {
        if (!$this->_oCommon) {
            $this->_oCommon = new CommonFunction();
        }
        return $this->_oCommon;
    }

    /**
     * Wykonuje pluginy, zwraca wartość id plus przetworzone dane, lub false
     * @throws \Exception
     * @return array|boolean
     */
    public function getResultData()
    {
        if (!$this->_getIdField()) {
            throw new \Exception('Nie ustawiono wartości _getIdField');
        }
        /** @var Mapping $oMapping */
        foreach ($this->_getRowMapping() as $oMapping) {
            $oMapping->executeMapping($this, $this->_getSourceData()); // przez $this->_addResult zbieram wynik
        }

        $aResult = $this->_getResultData();
        if(empty($aResult)){
            $this->_getCommon()->trace('$aResult jest pusty');
            return false;
        }
        if (!isset($aResult[$this->_getIdField()])) {
            $this->_getCommon()->trace('W $aResult nie znaleziono klucza ' . $this->_getIdField());
            return false;
        }
        return array($aResult[$this->_getIdField()], $aResult);


    }



}