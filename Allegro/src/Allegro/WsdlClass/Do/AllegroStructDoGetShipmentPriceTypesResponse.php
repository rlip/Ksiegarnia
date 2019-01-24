<?php
/**
 * File for class AllegroStructDoGetShipmentPriceTypesResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetShipmentPriceTypesResponse originally named doGetShipmentPriceTypesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetShipmentPriceTypesResponse extends AllegroWsdlClass
{
    /**
     * The shipmentPriceTypes
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfShipmentpricetypestruct
     */
    public $shipmentPriceTypes;
    /**
     * Constructor method for doGetShipmentPriceTypesResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfShipmentpricetypestruct $_shipmentPriceTypes
     * @return AllegroStructDoGetShipmentPriceTypesResponse
     */
    public function __construct($_shipmentPriceTypes = NULL)
    {
        parent::__construct(array('shipmentPriceTypes'=>($_shipmentPriceTypes instanceof AllegroStructArrayOfShipmentpricetypestruct)?$_shipmentPriceTypes:new AllegroStructArrayOfShipmentpricetypestruct($_shipmentPriceTypes)),false);
    }
    /**
     * Get shipmentPriceTypes value
     * @return AllegroStructArrayOfShipmentpricetypestruct|null
     */
    public function getShipmentPriceTypes()
    {
        return $this->shipmentPriceTypes;
    }
    /**
     * Set shipmentPriceTypes value
     * @param AllegroStructArrayOfShipmentpricetypestruct $_shipmentPriceTypes the shipmentPriceTypes
     * @return AllegroStructArrayOfShipmentpricetypestruct
     */
    public function setShipmentPriceTypes($_shipmentPriceTypes)
    {
        return ($this->shipmentPriceTypes = $_shipmentPriceTypes);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetShipmentPriceTypesResponse
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
