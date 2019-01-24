<?php
/**
 * File for class AllegroStructShipmentPriceTypeStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructShipmentPriceTypeStruct originally named ShipmentPriceTypeStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructShipmentPriceTypeStruct extends AllegroWsdlClass
{
    /**
     * The shipmentPriceTypeId
     * @var int
     */
    public $shipmentPriceTypeId;
    /**
     * The shipmentPriceTypeName
     * @var string
     */
    public $shipmentPriceTypeName;
    /**
     * Constructor method for ShipmentPriceTypeStruct
     * @see parent::__construct()
     * @param int $_shipmentPriceTypeId
     * @param string $_shipmentPriceTypeName
     * @return AllegroStructShipmentPriceTypeStruct
     */
    public function __construct($_shipmentPriceTypeId = NULL,$_shipmentPriceTypeName = NULL)
    {
        parent::__construct(array('shipmentPriceTypeId'=>$_shipmentPriceTypeId,'shipmentPriceTypeName'=>$_shipmentPriceTypeName),false);
    }
    /**
     * Get shipmentPriceTypeId value
     * @return int|null
     */
    public function getShipmentPriceTypeId()
    {
        return $this->shipmentPriceTypeId;
    }
    /**
     * Set shipmentPriceTypeId value
     * @param int $_shipmentPriceTypeId the shipmentPriceTypeId
     * @return int
     */
    public function setShipmentPriceTypeId($_shipmentPriceTypeId)
    {
        return ($this->shipmentPriceTypeId = $_shipmentPriceTypeId);
    }
    /**
     * Get shipmentPriceTypeName value
     * @return string|null
     */
    public function getShipmentPriceTypeName()
    {
        return $this->shipmentPriceTypeName;
    }
    /**
     * Set shipmentPriceTypeName value
     * @param string $_shipmentPriceTypeName the shipmentPriceTypeName
     * @return string
     */
    public function setShipmentPriceTypeName($_shipmentPriceTypeName)
    {
        return ($this->shipmentPriceTypeName = $_shipmentPriceTypeName);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructShipmentPriceTypeStruct
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
