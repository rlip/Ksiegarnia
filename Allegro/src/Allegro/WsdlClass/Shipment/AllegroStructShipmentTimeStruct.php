<?php
/**
 * File for class AllegroStructShipmentTimeStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructShipmentTimeStruct originally named ShipmentTimeStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructShipmentTimeStruct extends AllegroWsdlClass
{
    /**
     * The shipmentTimeFrom
     * @var int
     */
    public $shipmentTimeFrom;
    /**
     * The shipmentTimeTo
     * @var int
     */
    public $shipmentTimeTo;
    /**
     * Constructor method for ShipmentTimeStruct
     * @see parent::__construct()
     * @param int $_shipmentTimeFrom
     * @param int $_shipmentTimeTo
     * @return AllegroStructShipmentTimeStruct
     */
    public function __construct($_shipmentTimeFrom = NULL,$_shipmentTimeTo = NULL)
    {
        parent::__construct(array('shipmentTimeFrom'=>$_shipmentTimeFrom,'shipmentTimeTo'=>$_shipmentTimeTo),false);
    }
    /**
     * Get shipmentTimeFrom value
     * @return int|null
     */
    public function getShipmentTimeFrom()
    {
        return $this->shipmentTimeFrom;
    }
    /**
     * Set shipmentTimeFrom value
     * @param int $_shipmentTimeFrom the shipmentTimeFrom
     * @return int
     */
    public function setShipmentTimeFrom($_shipmentTimeFrom)
    {
        return ($this->shipmentTimeFrom = $_shipmentTimeFrom);
    }
    /**
     * Get shipmentTimeTo value
     * @return int|null
     */
    public function getShipmentTimeTo()
    {
        return $this->shipmentTimeTo;
    }
    /**
     * Set shipmentTimeTo value
     * @param int $_shipmentTimeTo the shipmentTimeTo
     * @return int
     */
    public function setShipmentTimeTo($_shipmentTimeTo)
    {
        return ($this->shipmentTimeTo = $_shipmentTimeTo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructShipmentTimeStruct
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
