<?php
/**
 * File for class AllegroStructDoGetSystemTimeResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetSystemTimeResponse originally named doGetSystemTimeResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetSystemTimeResponse extends AllegroWsdlClass
{
    /**
     * The serverTime
     * @var long
     */
    public $serverTime;
    /**
     * Constructor method for doGetSystemTimeResponse
     * @see parent::__construct()
     * @param long $_serverTime
     * @return AllegroStructDoGetSystemTimeResponse
     */
    public function __construct($_serverTime = NULL)
    {
        parent::__construct(array('serverTime'=>$_serverTime),false);
    }
    /**
     * Get serverTime value
     * @return long|null
     */
    public function getServerTime()
    {
        return $this->serverTime;
    }
    /**
     * Set serverTime value
     * @param long $_serverTime the serverTime
     * @return long
     */
    public function setServerTime($_serverTime)
    {
        return ($this->serverTime = $_serverTime);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetSystemTimeResponse
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
