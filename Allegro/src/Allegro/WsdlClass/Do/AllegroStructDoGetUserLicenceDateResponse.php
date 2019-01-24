<?php
/**
 * File for class AllegroStructDoGetUserLicenceDateResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetUserLicenceDateResponse originally named doGetUserLicenceDateResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetUserLicenceDateResponse extends AllegroWsdlClass
{
    /**
     * The getDateValue
     * @var float
     */
    public $getDateValue;
    /**
     * Constructor method for doGetUserLicenceDateResponse
     * @see parent::__construct()
     * @param float $_getDateValue
     * @return AllegroStructDoGetUserLicenceDateResponse
     */
    public function __construct($_getDateValue = NULL)
    {
        parent::__construct(array('getDateValue'=>$_getDateValue),false);
    }
    /**
     * Get getDateValue value
     * @return float|null
     */
    public function getGetDateValue()
    {
        return $this->getDateValue;
    }
    /**
     * Set getDateValue value
     * @param float $_getDateValue the getDateValue
     * @return float
     */
    public function setGetDateValue($_getDateValue)
    {
        return ($this->getDateValue = $_getDateValue);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetUserLicenceDateResponse
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
