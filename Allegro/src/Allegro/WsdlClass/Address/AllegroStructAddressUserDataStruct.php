<?php
/**
 * File for class AllegroStructAddressUserDataStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructAddressUserDataStruct originally named AddressUserDataStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructAddressUserDataStruct extends AllegroWsdlClass
{
    /**
     * The userCompany
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $userCompany;
    /**
     * The userFullName
     * @var string
     */
    public $userFullName;
    /**
     * The userAddress
     * @var string
     */
    public $userAddress;
    /**
     * The userPostcode
     * @var string
     */
    public $userPostcode;
    /**
     * The userCity
     * @var string
     */
    public $userCity;
    /**
     * Constructor method for AddressUserDataStruct
     * @see parent::__construct()
     * @param string $_userCompany
     * @param string $_userFullName
     * @param string $_userAddress
     * @param string $_userPostcode
     * @param string $_userCity
     * @return AllegroStructAddressUserDataStruct
     */
    public function __construct($_userCompany = NULL,$_userFullName = NULL,$_userAddress = NULL,$_userPostcode = NULL,$_userCity = NULL)
    {
        parent::__construct(array('userCompany'=>$_userCompany,'userFullName'=>$_userFullName,'userAddress'=>$_userAddress,'userPostcode'=>$_userPostcode,'userCity'=>$_userCity),false);
    }
    /**
     * Get userCompany value
     * @return string|null
     */
    public function getUserCompany()
    {
        return $this->userCompany;
    }
    /**
     * Set userCompany value
     * @param string $_userCompany the userCompany
     * @return string
     */
    public function setUserCompany($_userCompany)
    {
        return ($this->userCompany = $_userCompany);
    }
    /**
     * Get userFullName value
     * @return string|null
     */
    public function getUserFullName()
    {
        return $this->userFullName;
    }
    /**
     * Set userFullName value
     * @param string $_userFullName the userFullName
     * @return string
     */
    public function setUserFullName($_userFullName)
    {
        return ($this->userFullName = $_userFullName);
    }
    /**
     * Get userAddress value
     * @return string|null
     */
    public function getUserAddress()
    {
        return $this->userAddress;
    }
    /**
     * Set userAddress value
     * @param string $_userAddress the userAddress
     * @return string
     */
    public function setUserAddress($_userAddress)
    {
        return ($this->userAddress = $_userAddress);
    }
    /**
     * Get userPostcode value
     * @return string|null
     */
    public function getUserPostcode()
    {
        return $this->userPostcode;
    }
    /**
     * Set userPostcode value
     * @param string $_userPostcode the userPostcode
     * @return string
     */
    public function setUserPostcode($_userPostcode)
    {
        return ($this->userPostcode = $_userPostcode);
    }
    /**
     * Get userCity value
     * @return string|null
     */
    public function getUserCity()
    {
        return $this->userCity;
    }
    /**
     * Set userCity value
     * @param string $_userCity the userCity
     * @return string
     */
    public function setUserCity($_userCity)
    {
        return ($this->userCity = $_userCity);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructAddressUserDataStruct
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
