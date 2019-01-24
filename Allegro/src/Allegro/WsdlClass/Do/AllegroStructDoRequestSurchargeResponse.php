<?php
/**
 * File for class AllegroStructDoRequestSurchargeResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoRequestSurchargeResponse originally named doRequestSurchargeResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoRequestSurchargeResponse extends AllegroWsdlClass
{
    /**
     * The surchargeResult
     * @var int
     */
    public $surchargeResult;
    /**
     * Constructor method for doRequestSurchargeResponse
     * @see parent::__construct()
     * @param int $_surchargeResult
     * @return AllegroStructDoRequestSurchargeResponse
     */
    public function __construct($_surchargeResult = NULL)
    {
        parent::__construct(array('surchargeResult'=>$_surchargeResult),false);
    }
    /**
     * Get surchargeResult value
     * @return int|null
     */
    public function getSurchargeResult()
    {
        return $this->surchargeResult;
    }
    /**
     * Set surchargeResult value
     * @param int $_surchargeResult the surchargeResult
     * @return int
     */
    public function setSurchargeResult($_surchargeResult)
    {
        return ($this->surchargeResult = $_surchargeResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoRequestSurchargeResponse
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
