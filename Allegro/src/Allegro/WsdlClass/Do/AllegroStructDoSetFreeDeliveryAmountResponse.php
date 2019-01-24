<?php
/**
 * File for class AllegroStructDoSetFreeDeliveryAmountResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoSetFreeDeliveryAmountResponse originally named doSetFreeDeliveryAmountResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoSetFreeDeliveryAmountResponse extends AllegroWsdlClass
{
    /**
     * The responseStatus
     * @var boolean
     */
    public $responseStatus;
    /**
     * Constructor method for doSetFreeDeliveryAmountResponse
     * @see parent::__construct()
     * @param boolean $_responseStatus
     * @return AllegroStructDoSetFreeDeliveryAmountResponse
     */
    public function __construct($_responseStatus = NULL)
    {
        parent::__construct(array('responseStatus'=>$_responseStatus),false);
    }
    /**
     * Get responseStatus value
     * @return boolean|null
     */
    public function getResponseStatus()
    {
        return $this->responseStatus;
    }
    /**
     * Set responseStatus value
     * @param boolean $_responseStatus the responseStatus
     * @return boolean
     */
    public function setResponseStatus($_responseStatus)
    {
        return ($this->responseStatus = $_responseStatus);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoSetFreeDeliveryAmountResponse
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
