<?php
/**
 * File for class AllegroStructDoGetMyAddressesResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMyAddressesResponse originally named doGetMyAddressesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMyAddressesResponse extends AllegroWsdlClass
{
    /**
     * The addressesInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfAddressinfostruct
     */
    public $addressesInfo;
    /**
     * Constructor method for doGetMyAddressesResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfAddressinfostruct $_addressesInfo
     * @return AllegroStructDoGetMyAddressesResponse
     */
    public function __construct($_addressesInfo = NULL)
    {
        parent::__construct(array('addressesInfo'=>($_addressesInfo instanceof AllegroStructArrayOfAddressinfostruct)?$_addressesInfo:new AllegroStructArrayOfAddressinfostruct($_addressesInfo)),false);
    }
    /**
     * Get addressesInfo value
     * @return AllegroStructArrayOfAddressinfostruct|null
     */
    public function getAddressesInfo()
    {
        return $this->addressesInfo;
    }
    /**
     * Set addressesInfo value
     * @param AllegroStructArrayOfAddressinfostruct $_addressesInfo the addressesInfo
     * @return AllegroStructArrayOfAddressinfostruct
     */
    public function setAddressesInfo($_addressesInfo)
    {
        return ($this->addressesInfo = $_addressesInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMyAddressesResponse
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
