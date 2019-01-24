<?php
/**
 * File for class AllegroStructDoGetMyWatchedItemsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMyWatchedItemsResponse originally named doGetMyWatchedItemsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMyWatchedItemsResponse extends AllegroWsdlClass
{
    /**
     * The watchedItemsCounter
     * @var int
     */
    public $watchedItemsCounter;
    /**
     * The watchedItemsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfWatcheditemstruct
     */
    public $watchedItemsList;
    /**
     * Constructor method for doGetMyWatchedItemsResponse
     * @see parent::__construct()
     * @param int $_watchedItemsCounter
     * @param AllegroStructArrayOfWatcheditemstruct $_watchedItemsList
     * @return AllegroStructDoGetMyWatchedItemsResponse
     */
    public function __construct($_watchedItemsCounter = NULL,$_watchedItemsList = NULL)
    {
        parent::__construct(array('watchedItemsCounter'=>$_watchedItemsCounter,'watchedItemsList'=>($_watchedItemsList instanceof AllegroStructArrayOfWatcheditemstruct)?$_watchedItemsList:new AllegroStructArrayOfWatcheditemstruct($_watchedItemsList)),false);
    }
    /**
     * Get watchedItemsCounter value
     * @return int|null
     */
    public function getWatchedItemsCounter()
    {
        return $this->watchedItemsCounter;
    }
    /**
     * Set watchedItemsCounter value
     * @param int $_watchedItemsCounter the watchedItemsCounter
     * @return int
     */
    public function setWatchedItemsCounter($_watchedItemsCounter)
    {
        return ($this->watchedItemsCounter = $_watchedItemsCounter);
    }
    /**
     * Get watchedItemsList value
     * @return AllegroStructArrayOfWatcheditemstruct|null
     */
    public function getWatchedItemsList()
    {
        return $this->watchedItemsList;
    }
    /**
     * Set watchedItemsList value
     * @param AllegroStructArrayOfWatcheditemstruct $_watchedItemsList the watchedItemsList
     * @return AllegroStructArrayOfWatcheditemstruct
     */
    public function setWatchedItemsList($_watchedItemsList)
    {
        return ($this->watchedItemsList = $_watchedItemsList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMyWatchedItemsResponse
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
