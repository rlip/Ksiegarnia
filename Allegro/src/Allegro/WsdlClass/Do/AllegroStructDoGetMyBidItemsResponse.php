<?php
/**
 * File for class AllegroStructDoGetMyBidItemsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMyBidItemsResponse originally named doGetMyBidItemsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMyBidItemsResponse extends AllegroWsdlClass
{
    /**
     * The bidItemsCounter
     * @var int
     */
    public $bidItemsCounter;
    /**
     * The bidItemsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfBiditemstruct
     */
    public $bidItemsList;
    /**
     * Constructor method for doGetMyBidItemsResponse
     * @see parent::__construct()
     * @param int $_bidItemsCounter
     * @param AllegroStructArrayOfBiditemstruct $_bidItemsList
     * @return AllegroStructDoGetMyBidItemsResponse
     */
    public function __construct($_bidItemsCounter = NULL,$_bidItemsList = NULL)
    {
        parent::__construct(array('bidItemsCounter'=>$_bidItemsCounter,'bidItemsList'=>($_bidItemsList instanceof AllegroStructArrayOfBiditemstruct)?$_bidItemsList:new AllegroStructArrayOfBiditemstruct($_bidItemsList)),false);
    }
    /**
     * Get bidItemsCounter value
     * @return int|null
     */
    public function getBidItemsCounter()
    {
        return $this->bidItemsCounter;
    }
    /**
     * Set bidItemsCounter value
     * @param int $_bidItemsCounter the bidItemsCounter
     * @return int
     */
    public function setBidItemsCounter($_bidItemsCounter)
    {
        return ($this->bidItemsCounter = $_bidItemsCounter);
    }
    /**
     * Get bidItemsList value
     * @return AllegroStructArrayOfBiditemstruct|null
     */
    public function getBidItemsList()
    {
        return $this->bidItemsList;
    }
    /**
     * Set bidItemsList value
     * @param AllegroStructArrayOfBiditemstruct $_bidItemsList the bidItemsList
     * @return AllegroStructArrayOfBiditemstruct
     */
    public function setBidItemsList($_bidItemsList)
    {
        return ($this->bidItemsList = $_bidItemsList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMyBidItemsResponse
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
