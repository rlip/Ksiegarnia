<?php
/**
 * File for class AllegroStructSellFormType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSellFormType originally named SellFormType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSellFormType extends AllegroWsdlClass
{
    /**
     * The sellFormId
     * @var int
     */
    public $sellFormId;
    /**
     * The sellFormTitle
     * @var string
     */
    public $sellFormTitle;
    /**
     * The sellFormCat
     * @var int
     */
    public $sellFormCat;
    /**
     * The sellFormType
     * @var int
     */
    public $sellFormType;
    /**
     * The sellFormResType
     * @var int
     */
    public $sellFormResType;
    /**
     * The sellFormDefValue
     * @var int
     */
    public $sellFormDefValue;
    /**
     * The sellFormOpt
     * @var int
     */
    public $sellFormOpt;
    /**
     * The sellFormPos
     * @var int
     */
    public $sellFormPos;
    /**
     * The sellFormLength
     * @var int
     */
    public $sellFormLength;
    /**
     * The sellMinValue
     * @var string
     */
    public $sellMinValue;
    /**
     * The sellMaxValue
     * @var string
     */
    public $sellMaxValue;
    /**
     * The sellFormDesc
     * @var string
     */
    public $sellFormDesc;
    /**
     * The sellFormOptsValues
     * @var string
     */
    public $sellFormOptsValues;
    /**
     * The sellFormFieldDesc
     * @var string
     */
    public $sellFormFieldDesc;
    /**
     * The sellFormParamId
     * @var int
     */
    public $sellFormParamId;
    /**
     * The sellFormParamValues
     * @var string
     */
    public $sellFormParamValues;
    /**
     * The sellFormParentId
     * @var int
     */
    public $sellFormParentId;
    /**
     * The sellFormParentValue
     * @var string
     */
    public $sellFormParentValue;
    /**
     * The sellFormUnit
     * @var string
     */
    public $sellFormUnit;
    /**
     * The sellFormOptions
     * @var int
     */
    public $sellFormOptions;
    /**
     * Constructor method for SellFormType
     * @see parent::__construct()
     * @param int $_sellFormId
     * @param string $_sellFormTitle
     * @param int $_sellFormCat
     * @param int $_sellFormType
     * @param int $_sellFormResType
     * @param int $_sellFormDefValue
     * @param int $_sellFormOpt
     * @param int $_sellFormPos
     * @param int $_sellFormLength
     * @param string $_sellMinValue
     * @param string $_sellMaxValue
     * @param string $_sellFormDesc
     * @param string $_sellFormOptsValues
     * @param string $_sellFormFieldDesc
     * @param int $_sellFormParamId
     * @param string $_sellFormParamValues
     * @param int $_sellFormParentId
     * @param string $_sellFormParentValue
     * @param string $_sellFormUnit
     * @param int $_sellFormOptions
     * @return AllegroStructSellFormType
     */
    public function __construct($_sellFormId = NULL,$_sellFormTitle = NULL,$_sellFormCat = NULL,$_sellFormType = NULL,$_sellFormResType = NULL,$_sellFormDefValue = NULL,$_sellFormOpt = NULL,$_sellFormPos = NULL,$_sellFormLength = NULL,$_sellMinValue = NULL,$_sellMaxValue = NULL,$_sellFormDesc = NULL,$_sellFormOptsValues = NULL,$_sellFormFieldDesc = NULL,$_sellFormParamId = NULL,$_sellFormParamValues = NULL,$_sellFormParentId = NULL,$_sellFormParentValue = NULL,$_sellFormUnit = NULL,$_sellFormOptions = NULL)
    {
        parent::__construct(array('sellFormId'=>$_sellFormId,'sellFormTitle'=>$_sellFormTitle,'sellFormCat'=>$_sellFormCat,'sellFormType'=>$_sellFormType,'sellFormResType'=>$_sellFormResType,'sellFormDefValue'=>$_sellFormDefValue,'sellFormOpt'=>$_sellFormOpt,'sellFormPos'=>$_sellFormPos,'sellFormLength'=>$_sellFormLength,'sellMinValue'=>$_sellMinValue,'sellMaxValue'=>$_sellMaxValue,'sellFormDesc'=>$_sellFormDesc,'sellFormOptsValues'=>$_sellFormOptsValues,'sellFormFieldDesc'=>$_sellFormFieldDesc,'sellFormParamId'=>$_sellFormParamId,'sellFormParamValues'=>$_sellFormParamValues,'sellFormParentId'=>$_sellFormParentId,'sellFormParentValue'=>$_sellFormParentValue,'sellFormUnit'=>$_sellFormUnit,'sellFormOptions'=>$_sellFormOptions),false);
    }
    /**
     * Get sellFormId value
     * @return int|null
     */
    public function getSellFormId()
    {
        return $this->sellFormId;
    }
    /**
     * Set sellFormId value
     * @param int $_sellFormId the sellFormId
     * @return int
     */
    public function setSellFormId($_sellFormId)
    {
        return ($this->sellFormId = $_sellFormId);
    }
    /**
     * Get sellFormTitle value
     * @return string|null
     */
    public function getSellFormTitle()
    {
        return $this->sellFormTitle;
    }
    /**
     * Set sellFormTitle value
     * @param string $_sellFormTitle the sellFormTitle
     * @return string
     */
    public function setSellFormTitle($_sellFormTitle)
    {
        return ($this->sellFormTitle = $_sellFormTitle);
    }
    /**
     * Get sellFormCat value
     * @return int|null
     */
    public function getSellFormCat()
    {
        return $this->sellFormCat;
    }
    /**
     * Set sellFormCat value
     * @param int $_sellFormCat the sellFormCat
     * @return int
     */
    public function setSellFormCat($_sellFormCat)
    {
        return ($this->sellFormCat = $_sellFormCat);
    }
    /**
     * Get sellFormType value
     * @return int|null
     */
    public function getSellFormType()
    {
        return $this->sellFormType;
    }
    /**
     * Set sellFormType value
     * @param int $_sellFormType the sellFormType
     * @return int
     */
    public function setSellFormType($_sellFormType)
    {
        return ($this->sellFormType = $_sellFormType);
    }
    /**
     * Get sellFormResType value
     * @return int|null
     */
    public function getSellFormResType()
    {
        return $this->sellFormResType;
    }
    /**
     * Set sellFormResType value
     * @param int $_sellFormResType the sellFormResType
     * @return int
     */
    public function setSellFormResType($_sellFormResType)
    {
        return ($this->sellFormResType = $_sellFormResType);
    }
    /**
     * Get sellFormDefValue value
     * @return int|null
     */
    public function getSellFormDefValue()
    {
        return $this->sellFormDefValue;
    }
    /**
     * Set sellFormDefValue value
     * @param int $_sellFormDefValue the sellFormDefValue
     * @return int
     */
    public function setSellFormDefValue($_sellFormDefValue)
    {
        return ($this->sellFormDefValue = $_sellFormDefValue);
    }
    /**
     * Get sellFormOpt value
     * @return int|null
     */
    public function getSellFormOpt()
    {
        return $this->sellFormOpt;
    }
    /**
     * Set sellFormOpt value
     * @param int $_sellFormOpt the sellFormOpt
     * @return int
     */
    public function setSellFormOpt($_sellFormOpt)
    {
        return ($this->sellFormOpt = $_sellFormOpt);
    }
    /**
     * Get sellFormPos value
     * @return int|null
     */
    public function getSellFormPos()
    {
        return $this->sellFormPos;
    }
    /**
     * Set sellFormPos value
     * @param int $_sellFormPos the sellFormPos
     * @return int
     */
    public function setSellFormPos($_sellFormPos)
    {
        return ($this->sellFormPos = $_sellFormPos);
    }
    /**
     * Get sellFormLength value
     * @return int|null
     */
    public function getSellFormLength()
    {
        return $this->sellFormLength;
    }
    /**
     * Set sellFormLength value
     * @param int $_sellFormLength the sellFormLength
     * @return int
     */
    public function setSellFormLength($_sellFormLength)
    {
        return ($this->sellFormLength = $_sellFormLength);
    }
    /**
     * Get sellMinValue value
     * @return string|null
     */
    public function getSellMinValue()
    {
        return $this->sellMinValue;
    }
    /**
     * Set sellMinValue value
     * @param string $_sellMinValue the sellMinValue
     * @return string
     */
    public function setSellMinValue($_sellMinValue)
    {
        return ($this->sellMinValue = $_sellMinValue);
    }
    /**
     * Get sellMaxValue value
     * @return string|null
     */
    public function getSellMaxValue()
    {
        return $this->sellMaxValue;
    }
    /**
     * Set sellMaxValue value
     * @param string $_sellMaxValue the sellMaxValue
     * @return string
     */
    public function setSellMaxValue($_sellMaxValue)
    {
        return ($this->sellMaxValue = $_sellMaxValue);
    }
    /**
     * Get sellFormDesc value
     * @return string|null
     */
    public function getSellFormDesc()
    {
        return $this->sellFormDesc;
    }
    /**
     * Set sellFormDesc value
     * @param string $_sellFormDesc the sellFormDesc
     * @return string
     */
    public function setSellFormDesc($_sellFormDesc)
    {
        return ($this->sellFormDesc = $_sellFormDesc);
    }
    /**
     * Get sellFormOptsValues value
     * @return string|null
     */
    public function getSellFormOptsValues()
    {
        return $this->sellFormOptsValues;
    }
    /**
     * Set sellFormOptsValues value
     * @param string $_sellFormOptsValues the sellFormOptsValues
     * @return string
     */
    public function setSellFormOptsValues($_sellFormOptsValues)
    {
        return ($this->sellFormOptsValues = $_sellFormOptsValues);
    }
    /**
     * Get sellFormFieldDesc value
     * @return string|null
     */
    public function getSellFormFieldDesc()
    {
        return $this->sellFormFieldDesc;
    }
    /**
     * Set sellFormFieldDesc value
     * @param string $_sellFormFieldDesc the sellFormFieldDesc
     * @return string
     */
    public function setSellFormFieldDesc($_sellFormFieldDesc)
    {
        return ($this->sellFormFieldDesc = $_sellFormFieldDesc);
    }
    /**
     * Get sellFormParamId value
     * @return int|null
     */
    public function getSellFormParamId()
    {
        return $this->sellFormParamId;
    }
    /**
     * Set sellFormParamId value
     * @param int $_sellFormParamId the sellFormParamId
     * @return int
     */
    public function setSellFormParamId($_sellFormParamId)
    {
        return ($this->sellFormParamId = $_sellFormParamId);
    }
    /**
     * Get sellFormParamValues value
     * @return string|null
     */
    public function getSellFormParamValues()
    {
        return $this->sellFormParamValues;
    }
    /**
     * Set sellFormParamValues value
     * @param string $_sellFormParamValues the sellFormParamValues
     * @return string
     */
    public function setSellFormParamValues($_sellFormParamValues)
    {
        return ($this->sellFormParamValues = $_sellFormParamValues);
    }
    /**
     * Get sellFormParentId value
     * @return int|null
     */
    public function getSellFormParentId()
    {
        return $this->sellFormParentId;
    }
    /**
     * Set sellFormParentId value
     * @param int $_sellFormParentId the sellFormParentId
     * @return int
     */
    public function setSellFormParentId($_sellFormParentId)
    {
        return ($this->sellFormParentId = $_sellFormParentId);
    }
    /**
     * Get sellFormParentValue value
     * @return string|null
     */
    public function getSellFormParentValue()
    {
        return $this->sellFormParentValue;
    }
    /**
     * Set sellFormParentValue value
     * @param string $_sellFormParentValue the sellFormParentValue
     * @return string
     */
    public function setSellFormParentValue($_sellFormParentValue)
    {
        return ($this->sellFormParentValue = $_sellFormParentValue);
    }
    /**
     * Get sellFormUnit value
     * @return string|null
     */
    public function getSellFormUnit()
    {
        return $this->sellFormUnit;
    }
    /**
     * Set sellFormUnit value
     * @param string $_sellFormUnit the sellFormUnit
     * @return string
     */
    public function setSellFormUnit($_sellFormUnit)
    {
        return ($this->sellFormUnit = $_sellFormUnit);
    }
    /**
     * Get sellFormOptions value
     * @return int|null
     */
    public function getSellFormOptions()
    {
        return $this->sellFormOptions;
    }
    /**
     * Set sellFormOptions value
     * @param int $_sellFormOptions the sellFormOptions
     * @return int
     */
    public function setSellFormOptions($_sellFormOptions)
    {
        return ($this->sellFormOptions = $_sellFormOptions);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSellFormType
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
