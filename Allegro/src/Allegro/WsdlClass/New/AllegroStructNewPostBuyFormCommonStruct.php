<?php
/**
 * File for class AllegroStructNewPostBuyFormCommonStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructNewPostBuyFormCommonStruct originally named NewPostBuyFormCommonStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructNewPostBuyFormCommonStruct extends AllegroWsdlClass
{
    /**
     * The paymentMethodId
     * @var string
     */
    public $paymentMethodId;
    /**
     * The shipmentAddressType
     * @var int
     */
    public $shipmentAddressType;
    /**
     * The shipmentAddressData
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructAddressUserDataStruct
     */
    public $shipmentAddressData;
    /**
     * The contactPhone
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $contactPhone;
    /**
     * The invoiceOption
     * @var int
     */
    public $invoiceOption;
    /**
     * The invoiceInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructInvoiceInfoStruct
     */
    public $invoiceInfo;
    /**
     * Constructor method for NewPostBuyFormCommonStruct
     * @see parent::__construct()
     * @param string $_paymentMethodId
     * @param int $_shipmentAddressType
     * @param AllegroStructAddressUserDataStruct $_shipmentAddressData
     * @param string $_contactPhone
     * @param int $_invoiceOption
     * @param AllegroStructInvoiceInfoStruct $_invoiceInfo
     * @return AllegroStructNewPostBuyFormCommonStruct
     */
    public function __construct($_paymentMethodId = NULL,$_shipmentAddressType = NULL,$_shipmentAddressData = NULL,$_contactPhone = NULL,$_invoiceOption = NULL,$_invoiceInfo = NULL)
    {
        parent::__construct(array('paymentMethodId'=>$_paymentMethodId,'shipmentAddressType'=>$_shipmentAddressType,'shipmentAddressData'=>$_shipmentAddressData,'contactPhone'=>$_contactPhone,'invoiceOption'=>$_invoiceOption,'invoiceInfo'=>$_invoiceInfo),false);
    }
    /**
     * Get paymentMethodId value
     * @return string|null
     */
    public function getPaymentMethodId()
    {
        return $this->paymentMethodId;
    }
    /**
     * Set paymentMethodId value
     * @param string $_paymentMethodId the paymentMethodId
     * @return string
     */
    public function setPaymentMethodId($_paymentMethodId)
    {
        return ($this->paymentMethodId = $_paymentMethodId);
    }
    /**
     * Get shipmentAddressType value
     * @return int|null
     */
    public function getShipmentAddressType()
    {
        return $this->shipmentAddressType;
    }
    /**
     * Set shipmentAddressType value
     * @param int $_shipmentAddressType the shipmentAddressType
     * @return int
     */
    public function setShipmentAddressType($_shipmentAddressType)
    {
        return ($this->shipmentAddressType = $_shipmentAddressType);
    }
    /**
     * Get shipmentAddressData value
     * @return AllegroStructAddressUserDataStruct|null
     */
    public function getShipmentAddressData()
    {
        return $this->shipmentAddressData;
    }
    /**
     * Set shipmentAddressData value
     * @param AllegroStructAddressUserDataStruct $_shipmentAddressData the shipmentAddressData
     * @return AllegroStructAddressUserDataStruct
     */
    public function setShipmentAddressData($_shipmentAddressData)
    {
        return ($this->shipmentAddressData = $_shipmentAddressData);
    }
    /**
     * Get contactPhone value
     * @return string|null
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }
    /**
     * Set contactPhone value
     * @param string $_contactPhone the contactPhone
     * @return string
     */
    public function setContactPhone($_contactPhone)
    {
        return ($this->contactPhone = $_contactPhone);
    }
    /**
     * Get invoiceOption value
     * @return int|null
     */
    public function getInvoiceOption()
    {
        return $this->invoiceOption;
    }
    /**
     * Set invoiceOption value
     * @param int $_invoiceOption the invoiceOption
     * @return int
     */
    public function setInvoiceOption($_invoiceOption)
    {
        return ($this->invoiceOption = $_invoiceOption);
    }
    /**
     * Get invoiceInfo value
     * @return AllegroStructInvoiceInfoStruct|null
     */
    public function getInvoiceInfo()
    {
        return $this->invoiceInfo;
    }
    /**
     * Set invoiceInfo value
     * @param AllegroStructInvoiceInfoStruct $_invoiceInfo the invoiceInfo
     * @return AllegroStructInvoiceInfoStruct
     */
    public function setInvoiceInfo($_invoiceInfo)
    {
        return ($this->invoiceInfo = $_invoiceInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructNewPostBuyFormCommonStruct
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
