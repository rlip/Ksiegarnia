<?php
/**
 * File for class AllegroStructShipmentDataStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructShipmentDataStruct originally named ShipmentDataStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructShipmentDataStruct extends AllegroWsdlClass
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
     * The shipmentType
     * @var int
     */
    public $shipmentType;
    /**
     * The shipmentTime
     * @var AllegroStructShipmentTimeStruct
     */
    public $shipmentTime;
    /**
     * Constructor method for ShipmentDataStruct
     * @see parent::__construct()
     * @param int $_shipmentId
     * @param string $_shipmentName
     * @param int $_shipmentType
     * @param AllegroStructShipmentTimeStruct $_shipmentTime
     * @return AllegroStructShipmentDataStruct
     */
    public function __construct($_shipmentId = NULL,$_shipmentName = NULL,$_shipmentType = NULL,$_shipmentTime = NULL)
    {
        parent::__construct(array('shipmentId'=>$_shipmentId,'shipmentName'=>$_shipmentName,'shipmentType'=>$_shipmentType,'shipmentTime'=>$_shipmentTime),false);
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
     * Get shipmentType value
     * @return int|null
     */
    public function getShipmentType()
    {
        return $this->shipmentType;
    }
    /**
     * Set shipmentType value
     * @param int $_shipmentType the shipmentType
     * @return int
     */
    public function setShipmentType($_shipmentType)
    {
        return ($this->shipmentType = $_shipmentType);
    }
    /**
     * Get shipmentTime value
     * @return AllegroStructShipmentTimeStruct|null
     */
    public function getShipmentTime()
    {
        return $this->shipmentTime;
    }
    /**
     * Set shipmentTime value
     * @param AllegroStructShipmentTimeStruct $_shipmentTime the shipmentTime
     * @return AllegroStructShipmentTimeStruct
     */
    public function setShipmentTime($_shipmentTime)
    {
        return ($this->shipmentTime = $_shipmentTime);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructShipmentDataStruct
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
