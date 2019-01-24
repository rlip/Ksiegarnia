<?php
/**
 * File for class AllegroStructCompanyExtraDataStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructCompanyExtraDataStruct originally named CompanyExtraDataStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructCompanyExtraDataStruct extends AllegroWsdlClass
{
    /**
     * The companyType
     * @var string
     */
    public $companyType;
    /**
     * The companyNip
     * @var string
     */
    public $companyNip;
    /**
     * The companyRegon
     * @var string
     */
    public $companyRegon;
    /**
     * The companyKrs
     * @var string
     */
    public $companyKrs;
    /**
     * The companyActivitySort
     * @var string
     */
    public $companyActivitySort;
    /**
     * Constructor method for CompanyExtraDataStruct
     * @see parent::__construct()
     * @param string $_companyType
     * @param string $_companyNip
     * @param string $_companyRegon
     * @param string $_companyKrs
     * @param string $_companyActivitySort
     * @return AllegroStructCompanyExtraDataStruct
     */
    public function __construct($_companyType = NULL,$_companyNip = NULL,$_companyRegon = NULL,$_companyKrs = NULL,$_companyActivitySort = NULL)
    {
        parent::__construct(array('companyType'=>$_companyType,'companyNip'=>$_companyNip,'companyRegon'=>$_companyRegon,'companyKrs'=>$_companyKrs,'companyActivitySort'=>$_companyActivitySort),false);
    }
    /**
     * Get companyType value
     * @return string|null
     */
    public function getCompanyType()
    {
        return $this->companyType;
    }
    /**
     * Set companyType value
     * @param string $_companyType the companyType
     * @return string
     */
    public function setCompanyType($_companyType)
    {
        return ($this->companyType = $_companyType);
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
     * Get companyRegon value
     * @return string|null
     */
    public function getCompanyRegon()
    {
        return $this->companyRegon;
    }
    /**
     * Set companyRegon value
     * @param string $_companyRegon the companyRegon
     * @return string
     */
    public function setCompanyRegon($_companyRegon)
    {
        return ($this->companyRegon = $_companyRegon);
    }
    /**
     * Get companyKrs value
     * @return string|null
     */
    public function getCompanyKrs()
    {
        return $this->companyKrs;
    }
    /**
     * Set companyKrs value
     * @param string $_companyKrs the companyKrs
     * @return string
     */
    public function setCompanyKrs($_companyKrs)
    {
        return ($this->companyKrs = $_companyKrs);
    }
    /**
     * Get companyActivitySort value
     * @return string|null
     */
    public function getCompanyActivitySort()
    {
        return $this->companyActivitySort;
    }
    /**
     * Set companyActivitySort value
     * @param string $_companyActivitySort the companyActivitySort
     * @return string
     */
    public function setCompanyActivitySort($_companyActivitySort)
    {
        return ($this->companyActivitySort = $_companyActivitySort);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructCompanyExtraDataStruct
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
