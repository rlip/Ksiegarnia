<?php
/**
 * File for class AllegroStructInvoiceDataStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructInvoiceDataStruct originally named InvoiceDataStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructInvoiceDataStruct extends AllegroWsdlClass
{
    /**
     * The companyName
     * @var string
     */
    public $companyName;
    /**
     * The companyNip
     * @var string
     */
    public $companyNip;
    /**
     * Constructor method for InvoiceDataStruct
     * @see parent::__construct()
     * @param string $_companyName
     * @param string $_companyNip
     * @return AllegroStructInvoiceDataStruct
     */
    public function __construct($_companyName = NULL,$_companyNip = NULL)
    {
        parent::__construct(array('companyName'=>$_companyName,'companyNip'=>$_companyNip),false);
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
     * @return AllegroStructInvoiceDataStruct
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
