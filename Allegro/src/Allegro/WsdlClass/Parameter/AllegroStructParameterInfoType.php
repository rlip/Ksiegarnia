<?php
/**
 * File for class AllegroStructParameterInfoType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructParameterInfoType originally named ParameterInfoType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructParameterInfoType extends AllegroWsdlClass
{
    /**
     * The parameterName
     * @var string
     */
    public $parameterName;
    /**
     * The parameterValue
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfString
     */
    public $parameterValue;
    /**
     * The parameterUnit
     * @var string
     */
    public $parameterUnit;
    /**
     * The parameterIsRange
     * @var boolean
     */
    public $parameterIsRange;
    /**
     * Constructor method for ParameterInfoType
     * @see parent::__construct()
     * @param string $_parameterName
     * @param AllegroStructArrayOfString $_parameterValue
     * @param string $_parameterUnit
     * @param boolean $_parameterIsRange
     * @return AllegroStructParameterInfoType
     */
    public function __construct($_parameterName = NULL,$_parameterValue = NULL,$_parameterUnit = NULL,$_parameterIsRange = NULL)
    {
        parent::__construct(array('parameterName'=>$_parameterName,'parameterValue'=>($_parameterValue instanceof AllegroStructArrayOfString)?$_parameterValue:new AllegroStructArrayOfString($_parameterValue),'parameterUnit'=>$_parameterUnit,'parameterIsRange'=>$_parameterIsRange),false);
    }
    /**
     * Get parameterName value
     * @return string|null
     */
    public function getParameterName()
    {
        return $this->parameterName;
    }
    /**
     * Set parameterName value
     * @param string $_parameterName the parameterName
     * @return string
     */
    public function setParameterName($_parameterName)
    {
        return ($this->parameterName = $_parameterName);
    }
    /**
     * Get parameterValue value
     * @return AllegroStructArrayOfString|null
     */
    public function getParameterValue()
    {
        return $this->parameterValue;
    }
    /**
     * Set parameterValue value
     * @param AllegroStructArrayOfString $_parameterValue the parameterValue
     * @return AllegroStructArrayOfString
     */
    public function setParameterValue($_parameterValue)
    {
        return ($this->parameterValue = $_parameterValue);
    }
    /**
     * Get parameterUnit value
     * @return string|null
     */
    public function getParameterUnit()
    {
        return $this->parameterUnit;
    }
    /**
     * Set parameterUnit value
     * @param string $_parameterUnit the parameterUnit
     * @return string
     */
    public function setParameterUnit($_parameterUnit)
    {
        return ($this->parameterUnit = $_parameterUnit);
    }
    /**
     * Get parameterIsRange value
     * @return boolean|null
     */
    public function getParameterIsRange()
    {
        return $this->parameterIsRange;
    }
    /**
     * Set parameterIsRange value
     * @param boolean $_parameterIsRange the parameterIsRange
     * @return boolean
     */
    public function setParameterIsRange($_parameterIsRange)
    {
        return ($this->parameterIsRange = $_parameterIsRange);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructParameterInfoType
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
