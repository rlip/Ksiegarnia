<?php
/**
 * File for class AllegroStructDoGetMyWatchItemsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMyWatchItemsResponse originally named doGetMyWatchItemsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMyWatchItemsResponse extends AllegroWsdlClass
{
    /**
     * The watchItemsCounter
     * @var int
     */
    public $watchItemsCounter;
    /**
     * The watchItemsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfWatchitemstruct
     */
    public $watchItemsList;
    /**
     * Constructor method for doGetMyWatchItemsResponse
     * @see parent::__construct()
     * @param int $_watchItemsCounter
     * @param AllegroStructArrayOfWatchitemstruct $_watchItemsList
     * @return AllegroStructDoGetMyWatchItemsResponse
     */
    public function __construct($_watchItemsCounter = NULL,$_watchItemsList = NULL)
    {
        parent::__construct(array('watchItemsCounter'=>$_watchItemsCounter,'watchItemsList'=>($_watchItemsList instanceof AllegroStructArrayOfWatchitemstruct)?$_watchItemsList:new AllegroStructArrayOfWatchitemstruct($_watchItemsList)),false);
    }
    /**
     * Get watchItemsCounter value
     * @return int|null
     */
    public function getWatchItemsCounter()
    {
        return $this->watchItemsCounter;
    }
    /**
     * Set watchItemsCounter value
     * @param int $_watchItemsCounter the watchItemsCounter
     * @return int
     */
    public function setWatchItemsCounter($_watchItemsCounter)
    {
        return ($this->watchItemsCounter = $_watchItemsCounter);
    }
    /**
     * Get watchItemsList value
     * @return AllegroStructArrayOfWatchitemstruct|null
     */
    public function getWatchItemsList()
    {
        return $this->watchItemsList;
    }
    /**
     * Set watchItemsList value
     * @param AllegroStructArrayOfWatchitemstruct $_watchItemsList the watchItemsList
     * @return AllegroStructArrayOfWatchitemstruct
     */
    public function setWatchItemsList($_watchItemsList)
    {
        return ($this->watchItemsList = $_watchItemsList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMyWatchItemsResponse
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
