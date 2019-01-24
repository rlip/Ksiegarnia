<?php
/**
 * File for class AllegroStructDoRequestCancelBidResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoRequestCancelBidResponse originally named doRequestCancelBidResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoRequestCancelBidResponse extends AllegroWsdlClass
{
    /**
     * The requestValue
     * @var int
     */
    public $requestValue;
    /**
     * Constructor method for doRequestCancelBidResponse
     * @see parent::__construct()
     * @param int $_requestValue
     * @return AllegroStructDoRequestCancelBidResponse
     */
    public function __construct($_requestValue = NULL)
    {
        parent::__construct(array('requestValue'=>$_requestValue),false);
    }
    /**
     * Get requestValue value
     * @return int|null
     */
    public function getRequestValue()
    {
        return $this->requestValue;
    }
    /**
     * Set requestValue value
     * @param int $_requestValue the requestValue
     * @return int
     */
    public function setRequestValue($_requestValue)
    {
        return ($this->requestValue = $_requestValue);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoRequestCancelBidResponse
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
