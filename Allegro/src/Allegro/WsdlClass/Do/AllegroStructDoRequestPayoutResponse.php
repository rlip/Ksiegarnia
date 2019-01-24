<?php
/**
 * File for class AllegroStructDoRequestPayoutResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoRequestPayoutResponse originally named doRequestPayoutResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoRequestPayoutResponse extends AllegroWsdlClass
{
    /**
     * The requestPayout
     * @var AllegroStructRequestPayoutStruct
     */
    public $requestPayout;
    /**
     * Constructor method for doRequestPayoutResponse
     * @see parent::__construct()
     * @param AllegroStructRequestPayoutStruct $_requestPayout
     * @return AllegroStructDoRequestPayoutResponse
     */
    public function __construct($_requestPayout = NULL)
    {
        parent::__construct(array('requestPayout'=>$_requestPayout),false);
    }
    /**
     * Get requestPayout value
     * @return AllegroStructRequestPayoutStruct|null
     */
    public function getRequestPayout()
    {
        return $this->requestPayout;
    }
    /**
     * Set requestPayout value
     * @param AllegroStructRequestPayoutStruct $_requestPayout the requestPayout
     * @return AllegroStructRequestPayoutStruct
     */
    public function setRequestPayout($_requestPayout)
    {
        return ($this->requestPayout = $_requestPayout);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoRequestPayoutResponse
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
