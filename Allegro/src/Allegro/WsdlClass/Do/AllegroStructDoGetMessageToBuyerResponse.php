<?php
/**
 * File for class AllegroStructDoGetMessageToBuyerResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMessageToBuyerResponse originally named doGetMessageToBuyerResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMessageToBuyerResponse extends AllegroWsdlClass
{
    /**
     * The messageToBuyer
     * @var AllegroStructMessageToBuyerStruct
     */
    public $messageToBuyer;
    /**
     * Constructor method for doGetMessageToBuyerResponse
     * @see parent::__construct()
     * @param AllegroStructMessageToBuyerStruct $_messageToBuyer
     * @return AllegroStructDoGetMessageToBuyerResponse
     */
    public function __construct($_messageToBuyer = NULL)
    {
        parent::__construct(array('messageToBuyer'=>$_messageToBuyer),false);
    }
    /**
     * Get messageToBuyer value
     * @return AllegroStructMessageToBuyerStruct|null
     */
    public function getMessageToBuyer()
    {
        return $this->messageToBuyer;
    }
    /**
     * Set messageToBuyer value
     * @param AllegroStructMessageToBuyerStruct $_messageToBuyer the messageToBuyer
     * @return AllegroStructMessageToBuyerStruct
     */
    public function setMessageToBuyer($_messageToBuyer)
    {
        return ($this->messageToBuyer = $_messageToBuyer);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMessageToBuyerResponse
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
