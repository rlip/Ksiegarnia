<?php
/**
 * File for class AllegroStructShipmentPaymentInfoStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructShipmentPaymentInfoStruct originally named ShipmentPaymentInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructShipmentPaymentInfoStruct extends AllegroWsdlClass
{
    /**
     * The shipmentId
     * @var int
     */
    public $shipmentId;
    /**
     * The shipmentName
     * @var string
     */
    public $shipmentName;
    /**
     * The shipmentAmount
     * @var float
     */
    public $shipmentAmount;
    /**
     * The shipmentPaymentType
     * @var int
     */
    public $shipmentPaymentType;
    /**
     * The shipmentItemIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $shipmentItemIds;
    /**
     * Constructor method for ShipmentPaymentInfoStruct
     * @see parent::__construct()
     * @param int $_shipmentId
     * @param string $_shipmentName
     * @param float $_shipmentAmount
     * @param int $_shipmentPaymentType
     * @param AllegroStructArrayOfLong $_shipmentItemIds
     * @return AllegroStructShipmentPaymentInfoStruct
     */
    public function __construct($_shipmentId = NULL,$_shipmentName = NULL,$_shipmentAmount = NULL,$_shipmentPaymentType = NULL,$_shipmentItemIds = NULL)
    {
        parent::__construct(array('shipmentId'=>$_shipmentId,'shipmentName'=>$_shipmentName,'shipmentAmount'=>$_shipmentAmount,'shipmentPaymentType'=>$_shipmentPaymentType,'shipmentItemIds'=>($_shipmentItemIds instanceof AllegroStructArrayOfLong)?$_shipmentItemIds:new AllegroStructArrayOfLong($_shipmentItemIds)),false);
    }
    /**
     * Get shipmentId value
     * @return int|null
     */
    public function getShipmentId()
    {
        return $this->shipmentId;
    }
    /**
     * Set shipmentId value
     * @param int $_shipmentId the shipmentId
     * @return int
     */
    public function setShipmentId($_shipmentId)
    {
        return ($this->shipmentId = $_shipmentId);
    }
    /**
     * Get shipmentName value
     * @return string|null
     */
    public function getShipmentName()
    {
        return $this->shipmentName;
    }
    /**
     * Set shipmentName value
     * @param string $_shipmentName the shipmentName
     * @return string
     */
    public function setShipmentName($_shipmentName)
    {
        return ($this->shipmentName = $_shipmentName);
    }
    /**
     * Get shipmentAmount value
     * @return float|null
     */
    public function getShipmentAmount()
    {
        return $this->shipmentAmount;
    }
    /**
     * Set shipmentAmount value
     * @param float $_shipmentAmount the shipmentAmount
     * @return float
     */
    public function setShipmentAmount($_shipmentAmount)
    {
        return ($this->shipmentAmount = $_shipmentAmount);
    }
    /**
     * Get shipmentPaymentType value
     * @return int|null
     */
    public function getShipmentPaymentType()
    {
        return $this->shipmentPaymentType;
    }
    /**
     * Set shipmentPaymentType value
     * @param int $_shipmentPaymentType the shipmentPaymentType
     * @return int
     */
    public function setShipmentPaymentType($_shipmentPaymentType)
    {
        return ($this->shipmentPaymentType = $_shipmentPaymentType);
    }
    /**
     * Get shipmentItemIds value
     * @return AllegroStructArrayOfLong|null
     */
    public function getShipmentItemIds()
    {
        return $this->shipmentItemIds;
    }
    /**
     * Set shipmentItemIds value
     * @param AllegroStructArrayOfLong $_shipmentItemIds the shipmentItemIds
     * @return AllegroStructArrayOfLong
     */
    public function setShipmentItemIds($_shipmentItemIds)
    {
        return ($this->shipmentItemIds = $_shipmentItemIds);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructShipmentPaymentInfoStruct
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
