<?php
/**
 * File for class AllegroStructCompanySecondAddressStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructCompanySecondAddressStruct originally named CompanySecondAddressStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructCompanySecondAddressStruct extends AllegroWsdlClass
{
    /**
     * The companyWorkerFirstName
     * @var string
     */
    public $companyWorkerFirstName;
    /**
     * The companyWorkerLastName
     * @var string
     */
    public $companyWorkerLastName;
    /**
     * The companyAddress
     * @var string
     */
    public $companyAddress;
    /**
     * The companyPostcode
     * @var string
     */
    public $companyPostcode;
    /**
     * The companyCity
     * @var string
     */
    public $companyCity;
    /**
     * The companyCountryId
     * @var int
     */
    public $companyCountryId;
    /**
     * The companyStateId
     * @var int
     */
    public $companyStateId;
    /**
     * Constructor method for CompanySecondAddressStruct
     * @see parent::__construct()
     * @param string $_companyWorkerFirstName
     * @param string $_companyWorkerLastName
     * @param string $_companyAddress
     * @param string $_companyPostcode
     * @param string $_companyCity
     * @param int $_companyCountryId
     * @param int $_companyStateId
     * @return AllegroStructCompanySecondAddressStruct
     */
    public function __construct($_companyWorkerFirstName = NULL,$_companyWorkerLastName = NULL,$_companyAddress = NULL,$_companyPostcode = NULL,$_companyCity = NULL,$_companyCountryId = NULL,$_companyStateId = NULL)
    {
        parent::__construct(array('companyWorkerFirstName'=>$_companyWorkerFirstName,'companyWorkerLastName'=>$_companyWorkerLastName,'companyAddress'=>$_companyAddress,'companyPostcode'=>$_companyPostcode,'companyCity'=>$_companyCity,'companyCountryId'=>$_companyCountryId,'companyStateId'=>$_companyStateId),false);
    }
    /**
     * Get companyWorkerFirstName value
     * @return string|null
     */
    public function getCompanyWorkerFirstName()
    {
        return $this->companyWorkerFirstName;
    }
    /**
     * Set companyWorkerFirstName value
     * @param string $_companyWorkerFirstName the companyWorkerFirstName
     * @return string
     */
    public function setCompanyWorkerFirstName($_companyWorkerFirstName)
    {
        return ($this->companyWorkerFirstName = $_companyWorkerFirstName);
    }
    /**
     * Get companyWorkerLastName value
     * @return string|null
     */
    public function getCompanyWorkerLastName()
    {
        return $this->companyWorkerLastName;
    }
    /**
     * Set companyWorkerLastName value
     * @param string $_companyWorkerLastName the companyWorkerLastName
     * @return string
     */
    public function setCompanyWorkerLastName($_companyWorkerLastName)
    {
        return ($this->companyWorkerLastName = $_companyWorkerLastName);
    }
    /**
     * Get companyAddress value
     * @return string|null
     */
    public function getCompanyAddress()
    {
        return $this->companyAddress;
    }
    /**
     * Set companyAddress value
     * @param string $_companyAddress the companyAddress
     * @return string
     */
    public function setCompanyAddress($_companyAddress)
    {
        return ($this->companyAddress = $_companyAddress);
    }
    /**
     * Get companyPostcode value
     * @return string|null
     */
    public function getCompanyPostcode()
    {
        return $this->companyPostcode;
    }
    /**
     * Set companyPostcode value
     * @param string $_companyPostcode the companyPostcode
     * @return string
     */
    public function setCompanyPostcode($_companyPostcode)
    {
        return ($this->companyPostcode = $_companyPostcode);
    }
    /**
     * Get companyCity value
     * @return string|null
     */
    public function getCompanyCity()
    {
        return $this->companyCity;
    }
    /**
     * Set companyCity value
     * @param string $_companyCity the companyCity
     * @return string
     */
    public function setCompanyCity($_companyCity)
    {
        return ($this->companyCity = $_companyCity);
    }
    /**
     * Get companyCountryId value
     * @return int|null
     */
    public function getCompanyCountryId()
    {
        return $this->companyCountryId;
    }
    /**
     * Set companyCountryId value
     * @param int $_companyCountryId the companyCountryId
     * @return int
     */
    public function setCompanyCountryId($_companyCountryId)
    {
        return ($this->companyCountryId = $_companyCountryId);
    }
    /**
     * Get companyStateId value
     * @return int|null
     */
    public function getCompanyStateId()
    {
        return $this->companyStateId;
    }
    /**
     * Set companyStateId value
     * @param int $_companyStateId the companyStateId
     * @return int
     */
    public function setCompanyStateId($_companyStateId)
    {
        return ($this->companyStateId = $_companyStateId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructCompanySecondAddressStruct
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
