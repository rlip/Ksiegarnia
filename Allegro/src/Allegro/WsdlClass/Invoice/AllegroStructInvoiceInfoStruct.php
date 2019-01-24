<?php
/**
 * File for class AllegroStructInvoiceInfoStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructInvoiceInfoStruct originally named InvoiceInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructInvoiceInfoStruct extends AllegroWsdlClass
{
    /**
     * The invoiceAddressType
     * @var int
     */
    public $invoiceAddressType;
    /**
     * The invoiceAddressData
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructAddressUserDataStruct
     */
    public $invoiceAddressData;
    /**
     * The invoiceNip
     * @var string
     */
    public $invoiceNip;
    /**
     * Constructor method for InvoiceInfoStruct
     * @see parent::__construct()
     * @param int $_invoiceAddressType
     * @param AllegroStructAddressUserDataStruct $_invoiceAddressData
     * @param string $_invoiceNip
     * @return AllegroStructInvoiceInfoStruct
     */
    public function __construct($_invoiceAddressType = NULL,$_invoiceAddressData = NULL,$_invoiceNip = NULL)
    {
        parent::__construct(array('invoiceAddressType'=>$_invoiceAddressType,'invoiceAddressData'=>$_invoiceAddressData,'invoiceNip'=>$_invoiceNip),false);
    }
    /**
     * Get invoiceAddressType value
     * @return int|null
     */
    public function getInvoiceAddressType()
    {
        return $this->invoiceAddressType;
    }
    /**
     * Set invoiceAddressType value
     * @param int $_invoiceAddressType the invoiceAddressType
     * @return int
     */
    public function setInvoiceAddressType($_invoiceAddressType)
    {
        return ($this->invoiceAddressType = $_invoiceAddressType);
    }
    /**
     * Get invoiceAddressData value
     * @return AllegroStructAddressUserDataStruct|null
     */
    public function getInvoiceAddressData()
    {
        return $this->invoiceAddressData;
    }
    /**
     * Set invoiceAddressData value
     * @param AllegroStructAddressUserDataStruct $_invoiceAddressData the invoiceAddressData
     * @return AllegroStructAddressUserDataStruct
     */
    public function setInvoiceAddressData($_invoiceAddressData)
    {
        return ($this->invoiceAddressData = $_invoiceAddressData);
    }
    /**
     * Get invoiceNip value
     * @return string|null
     */
    public function getInvoiceNip()
    {
        return $this->invoiceNip;
    }
    /**
     * Set invoiceNip value
     * @param string $_invoiceNip the invoiceNip
     * @return string
     */
    public function setInvoiceNip($_invoiceNip)
    {
        return ($this->invoiceNip = $_invoiceNip);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructInvoiceInfoStruct
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
