<?php
/**
 * File for class AllegroStructDoSetShipmentPriceTypeRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoSetShipmentPriceTypeRequest originally named DoSetShipmentPriceTypeRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoSetShipmentPriceTypeRequest extends AllegroWsdlClass
{
    /**
     * The sessionId
     * @var string
     */
    public $sessionId;
    /**
     * The shipmentPriceTypeId
     * @var int
     */
    public $shipmentPriceTypeId;
    /**
     * Constructor method for DoSetShipmentPriceTypeRequest
     * @see parent::__construct()
     * @param string $_sessionId
     * @param int $_shipmentPriceTypeId
     * @return AllegroStructDoSetShipmentPriceTypeRequest
     */
    public function __construct($_sessionId = NULL,$_shipmentPriceTypeId = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'shipmentPriceTypeId'=>$_shipmentPriceTypeId),false);
    }
    /**
     * Get sessionId value
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param string $_sessionId the sessionId
     * @return string
     */
    public function setSessionId($_sessionId)
    {
        return ($this->sessionId = $_sessionId);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoSetShipmentPriceTypeRequest
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
