<?php
/**
 * File for class AllegroStructSellerPaymentInfoStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSellerPaymentInfoStruct originally named SellerPaymentInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSellerPaymentInfoStruct extends AllegroWsdlClass
{
    /**
     * The shipmentPaymentInfoPza
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfShipmentpaymentinfostruct
     */
    public $shipmentPaymentInfoPza;
    /**
     * The shipmentPaymentInfoNonPza
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfShipmentpaymentinfostruct
     */
    public $shipmentPaymentInfoNonPza;
    /**
     * Constructor method for SellerPaymentInfoStruct
     * @see parent::__construct()
     * @param AllegroStructArrayOfShipmentpaymentinfostruct $_shipmentPaymentInfoPza
     * @param AllegroStructArrayOfShipmentpaymentinfostruct $_shipmentPaymentInfoNonPza
     * @return AllegroStructSellerPaymentInfoStruct
     */
    public function __construct($_shipmentPaymentInfoPza = NULL,$_shipmentPaymentInfoNonPza = NULL)
    {
        parent::__construct(array('shipmentPaymentInfoPza'=>($_shipmentPaymentInfoPza instanceof AllegroStructArrayOfShipmentpaymentinfostruct)?$_shipmentPaymentInfoPza:new AllegroStructArrayOfShipmentpaymentinfostruct($_shipmentPaymentInfoPza),'shipmentPaymentInfoNonPza'=>($_shipmentPaymentInfoNonPza instanceof AllegroStructArrayOfShipmentpaymentinfostruct)?$_shipmentPaymentInfoNonPza:new AllegroStructArrayOfShipmentpaymentinfostruct($_shipmentPaymentInfoNonPza)),false);
    }
    /**
     * Get shipmentPaymentInfoPza value
     * @return AllegroStructArrayOfShipmentpaymentinfostruct|null
     */
    public function getShipmentPaymentInfoPza()
    {
        return $this->shipmentPaymentInfoPza;
    }
    /**
     * Set shipmentPaymentInfoPza value
     * @param AllegroStructArrayOfShipmentpaymentinfostruct $_shipmentPaymentInfoPza the shipmentPaymentInfoPza
     * @return AllegroStructArrayOfShipmentpaymentinfostruct
     */
    public function setShipmentPaymentInfoPza($_shipmentPaymentInfoPza)
    {
        return ($this->shipmentPaymentInfoPza = $_shipmentPaymentInfoPza);
    }
    /**
     * Get shipmentPaymentInfoNonPza value
     * @return AllegroStructArrayOfShipmentpaymentinfostruct|null
     */
    public function getShipmentPaymentInfoNonPza()
    {
        return $this->shipmentPaymentInfoNonPza;
    }
    /**
     * Set shipmentPaymentInfoNonPza value
     * @param AllegroStructArrayOfShipmentpaymentinfostruct $_shipmentPaymentInfoNonPza the shipmentPaymentInfoNonPza
     * @return AllegroStructArrayOfShipmentpaymentinfostruct
     */
    public function setShipmentPaymentInfoNonPza($_shipmentPaymentInfoNonPza)
    {
        return ($this->shipmentPaymentInfoNonPza = $_shipmentPaymentInfoNonPza);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSellerPaymentInfoStruct
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
