<?php
/**
 * File for class AllegroStructMyAccountStruct2
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructMyAccountStruct2 originally named MyAccountStruct2
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructMyAccountStruct2 extends AllegroWsdlClass
{
    /**
     * The myAccountArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfString
     */
    public $myAccountArray;
    /**
     * Constructor method for MyAccountStruct2
     * @see parent::__construct()
     * @param AllegroStructArrayOfString $_myAccountArray
     * @return AllegroStructMyAccountStruct2
     */
    public function __construct($_myAccountArray = NULL)
    {
        parent::__construct(array('myAccountArray'=>($_myAccountArray instanceof AllegroStructArrayOfString)?$_myAccountArray:new AllegroStructArrayOfString($_myAccountArray)),false);
    }
    /**
     * Get myAccountArray value
     * @return AllegroStructArrayOfString|null
     */
    public function getMyAccountArray()
    {
        return $this->myAccountArray;
    }
    /**
     * Set myAccountArray value
     * @param AllegroStructArrayOfString $_myAccountArray the myAccountArray
     * @return AllegroStructArrayOfString
     */
    public function setMyAccountArray($_myAccountArray)
    {
        return ($this->myAccountArray = $_myAccountArray);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructMyAccountStruct2
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
