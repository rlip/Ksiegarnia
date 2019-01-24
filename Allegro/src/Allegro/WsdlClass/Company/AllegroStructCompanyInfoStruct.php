<?php
/**
 * File for class AllegroStructCompanyInfoStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructCompanyInfoStruct originally named CompanyInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructCompanyInfoStruct extends AllegroWsdlClass
{
    /**
     * The companyFirstName
     * @var string
     */
    public $companyFirstName;
    /**
     * The companyLastName
     * @var string
     */
    public $companyLastName;
    /**
     * The companyName
     * @var string
     */
    public $companyName;
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
     * The companyNip
     * @var string
     */
    public $companyNip;
    /**
     * Constructor method for CompanyInfoStruct
     * @see parent::__construct()
     * @param string $_companyFirstName
     * @param string $_companyLastName
     * @param string $_companyName
     * @param string $_companyAddress
     * @param string $_companyPostcode
     * @param string $_companyCity
     * @param string $_companyNip
     * @return AllegroStructCompanyInfoStruct
     */
    public function __construct($_companyFirstName = NULL,$_companyLastName = NULL,$_companyName = NULL,$_companyAddress = NULL,$_companyPostcode = NULL,$_companyCity = NULL,$_companyNip = NULL)
    {
        parent::__construct(array('companyFirstName'=>$_companyFirstName,'companyLastName'=>$_companyLastName,'companyName'=>$_companyName,'companyAddress'=>$_companyAddress,'companyPostcode'=>$_companyPostcode,'companyCity'=>$_companyCity,'companyNip'=>$_companyNip),false);
    }
    /**
     * Get companyFirstName value
     * @return string|null
     */
    public function getCompanyFirstName()
    {
        return $this->companyFirstName;
    }
    /**
     * Set companyFirstName value
     * @param string $_companyFirstName the companyFirstName
     * @return string
     */
    public function setCompanyFirstName($_companyFirstName)
    {
        return ($this->companyFirstName = $_companyFirstName);
    }
    /**
     * Get companyLastName value
     * @return string|null
     */
    public function getCompanyLastName()
    {
        return $this->companyLastName;
    }
    /**
     * Set companyLastName value
     * @param string $_companyLastName the companyLastName
     * @return string
     */
    public function setCompanyLastName($_companyLastName)
    {
        return ($this->companyLastName = $_companyLastName);
    }
    /**
     * Get companyName value
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }
    /**
     * Set companyName value
     * @param string $_companyName the companyName
     * @return string
     */
    public function setCompanyName($_companyName)
    {
        return ($this->companyName = $_companyName);
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
     * Get companyNip value
     * @return string|null
     */
    public function getCompanyNip()
    {
        return $this->companyNip;
    }
    /**
     * Set companyNip value
     * @param string $_companyNip the companyNip
     * @return string
     */
    public function setCompanyNip($_companyNip)
    {
        return ($this->companyNip = $_companyNip);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructCompanyInfoStruct
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
