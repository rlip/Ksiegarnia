<?php
/**
 * File for class AllegroStructAddressInfoStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructAddressInfoStruct originally named AddressInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructAddressInfoStruct extends AllegroWsdlClass
{
    /**
     * The addressType
     * @var int
     */
    public $addressType;
    /**
     * The addressUserData
     * @var AllegroStructAddressUserDataStruct
     */
    public $addressUserData;
    /**
     * Constructor method for AddressInfoStruct
     * @see parent::__construct()
     * @param int $_addressType
     * @param AllegroStructAddressUserDataStruct $_addressUserData
     * @return AllegroStructAddressInfoStruct
     */
    public function __construct($_addressType = NULL,$_addressUserData = NULL)
    {
        parent::__construct(array('addressType'=>$_addressType,'addressUserData'=>$_addressUserData),false);
    }
    /**
     * Get addressType value
     * @return int|null
     */
    public function getAddressType()
    {
        return $this->addressType;
    }
    /**
     * Set addressType value
     * @param int $_addressType the addressType
     * @return int
     */
    public function setAddressType($_addressType)
    {
        return ($this->addressType = $_addressType);
    }
    /**
     * Get addressUserData value
     * @return AllegroStructAddressUserDataStruct|null
     */
    public function getAddressUserData()
    {
        return $this->addressUserData;
    }
    /**
     * Set addressUserData value
     * @param AllegroStructAddressUserDataStruct $_addressUserData the addressUserData
     * @return AllegroStructAddressUserDataStruct
     */
    public function setAddressUserData($_addressUserData)
    {
        return ($this->addressUserData = $_addressUserData);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructAddressInfoStruct
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
