<?php
/**
 * File for class AllegroStructDoBidItemResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoBidItemResponse originally named doBidItemResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoBidItemResponse extends AllegroWsdlClass
{
    /**
     * The bidPrice
     * @var string
     */
    public $bidPrice;
    /**
     * Constructor method for doBidItemResponse
     * @see parent::__construct()
     * @param string $_bidPrice
     * @return AllegroStructDoBidItemResponse
     */
    public function __construct($_bidPrice = NULL)
    {
        parent::__construct(array('bidPrice'=>$_bidPrice),false);
    }
    /**
     * Get bidPrice value
     * @return string|null
     */
    public function getBidPrice()
    {
        return $this->bidPrice;
    }
    /**
     * Set bidPrice value
     * @param string $_bidPrice the bidPrice
     * @return string
     */
    public function setBidPrice($_bidPrice)
    {
        return ($this->bidPrice = $_bidPrice);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoBidItemResponse
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
