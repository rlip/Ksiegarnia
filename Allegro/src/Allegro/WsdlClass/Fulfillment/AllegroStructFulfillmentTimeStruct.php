<?php
/**
 * File for class AllegroStructFulfillmentTimeStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructFulfillmentTimeStruct originally named FulfillmentTimeStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructFulfillmentTimeStruct extends AllegroWsdlClass
{
    /**
     * The fulfillmentTimeFrom
     * @var int
     */
    public $fulfillmentTimeFrom;
    /**
     * The fulfillmentTimeTo
     * @var int
     */
    public $fulfillmentTimeTo;
    /**
     * Constructor method for FulfillmentTimeStruct
     * @see parent::__construct()
     * @param int $_fulfillmentTimeFrom
     * @param int $_fulfillmentTimeTo
     * @return AllegroStructFulfillmentTimeStruct
     */
    public function __construct($_fulfillmentTimeFrom = NULL,$_fulfillmentTimeTo = NULL)
    {
        parent::__construct(array('fulfillmentTimeFrom'=>$_fulfillmentTimeFrom,'fulfillmentTimeTo'=>$_fulfillmentTimeTo),false);
    }
    /**
     * Get fulfillmentTimeFrom value
     * @return int|null
     */
    public function getFulfillmentTimeFrom()
    {
        return $this->fulfillmentTimeFrom;
    }
    /**
     * Set fulfillmentTimeFrom value
     * @param int $_fulfillmentTimeFrom the fulfillmentTimeFrom
     * @return int
     */
    public function setFulfillmentTimeFrom($_fulfillmentTimeFrom)
    {
        return ($this->fulfillmentTimeFrom = $_fulfillmentTimeFrom);
    }
    /**
     * Get fulfillmentTimeTo value
     * @return int|null
     */
    public function getFulfillmentTimeTo()
    {
        return $this->fulfillmentTimeTo;
    }
    /**
     * Set fulfillmentTimeTo value
     * @param int $_fulfillmentTimeTo the fulfillmentTimeTo
     * @return int
     */
    public function setFulfillmentTimeTo($_fulfillmentTimeTo)
    {
        return ($this->fulfillmentTimeTo = $_fulfillmentTimeTo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructFulfillmentTimeStruct
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
