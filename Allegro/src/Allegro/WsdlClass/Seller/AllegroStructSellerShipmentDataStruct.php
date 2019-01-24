<?php
/**
 * File for class AllegroStructSellerShipmentDataStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSellerShipmentDataStruct originally named SellerShipmentDataStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSellerShipmentDataStruct extends AllegroWsdlClass
{
    /**
     * The sellerId
     * @var int
     */
    public $sellerId;
    /**
     * The sellerPaymentInfo
     * @var AllegroStructSellerPaymentInfoStruct
     */
    public $sellerPaymentInfo;
    /**
     * The sellerOtherShipmentIsActive
     * @var int
     */
    public $sellerOtherShipmentIsActive;
    /**
     * The generalDeliveryPaymentInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfShipmentpaymentinfostruct
     */
    public $generalDeliveryPaymentInfo;
    /**
     * Constructor method for SellerShipmentDataStruct
     * @see parent::__construct()
     * @param int $_sellerId
     * @param AllegroStructSellerPaymentInfoStruct $_sellerPaymentInfo
     * @param int $_sellerOtherShipmentIsActive
     * @param AllegroStructArrayOfShipmentpaymentinfostruct $_generalDeliveryPaymentInfo
     * @return AllegroStructSellerShipmentDataStruct
     */
    public function __construct($_sellerId = NULL,$_sellerPaymentInfo = NULL,$_sellerOtherShipmentIsActive = NULL,$_generalDeliveryPaymentInfo = NULL)
    {
        parent::__construct(array('sellerId'=>$_sellerId,'sellerPaymentInfo'=>$_sellerPaymentInfo,'sellerOtherShipmentIsActive'=>$_sellerOtherShipmentIsActive,'generalDeliveryPaymentInfo'=>($_generalDeliveryPaymentInfo instanceof AllegroStructArrayOfShipmentpaymentinfostruct)?$_generalDeliveryPaymentInfo:new AllegroStructArrayOfShipmentpaymentinfostruct($_generalDeliveryPaymentInfo)),false);
    }
    /**
     * Get sellerId value
     * @return int|null
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }
    /**
     * Set sellerId value
     * @param int $_sellerId the sellerId
     * @return int
     */
    public function setSellerId($_sellerId)
    {
        return ($this->sellerId = $_sellerId);
    }
    /**
     * Get sellerPaymentInfo value
     * @return AllegroStructSellerPaymentInfoStruct|null
     */
    public function getSellerPaymentInfo()
    {
        return $this->sellerPaymentInfo;
    }
    /**
     * Set sellerPaymentInfo value
     * @param AllegroStructSellerPaymentInfoStruct $_sellerPaymentInfo the sellerPaymentInfo
     * @return AllegroStructSellerPaymentInfoStruct
     */
    public function setSellerPaymentInfo($_sellerPaymentInfo)
    {
        return ($this->sellerPaymentInfo = $_sellerPaymentInfo);
    }
    /**
     * Get sellerOtherShipmentIsActive value
     * @return int|null
     */
    public function getSellerOtherShipmentIsActive()
    {
        return $this->sellerOtherShipmentIsActive;
    }
    /**
     * Set sellerOtherShipmentIsActive value
     * @param int $_sellerOtherShipmentIsActive the sellerOtherShipmentIsActive
     * @return int
     */
    public function setSellerOtherShipmentIsActive($_sellerOtherShipmentIsActive)
    {
        return ($this->sellerOtherShipmentIsActive = $_sellerOtherShipmentIsActive);
    }
    /**
     * Get generalDeliveryPaymentInfo value
     * @return AllegroStructArrayOfShipmentpaymentinfostruct|null
     */
    public function getGeneralDeliveryPaymentInfo()
    {
        return $this->generalDeliveryPaymentInfo;
    }
    /**
     * Set generalDeliveryPaymentInfo value
     * @param AllegroStructArrayOfShipmentpaymentinfostruct $_generalDeliveryPaymentInfo the generalDeliveryPaymentInfo
     * @return AllegroStructArrayOfShipmentpaymentinfostruct
     */
    public function setGeneralDeliveryPaymentInfo($_generalDeliveryPaymentInfo)
    {
        return ($this->generalDeliveryPaymentInfo = $_generalDeliveryPaymentInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSellerShipmentDataStruct
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
