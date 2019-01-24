<?php
/**
 * File for class AllegroStructDoGetMySellItemsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMySellItemsResponse originally named doGetMySellItemsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMySellItemsResponse extends AllegroWsdlClass
{
    /**
     * The sellItemsCounter
     * @var int
     */
    public $sellItemsCounter;
    /**
     * The sellItemsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSellitemstruct
     */
    public $sellItemsList;
    /**
     * Constructor method for doGetMySellItemsResponse
     * @see parent::__construct()
     * @param int $_sellItemsCounter
     * @param AllegroStructArrayOfSellitemstruct $_sellItemsList
     * @return AllegroStructDoGetMySellItemsResponse
     */
    public function __construct($_sellItemsCounter = NULL,$_sellItemsList = NULL)
    {
        parent::__construct(array('sellItemsCounter'=>$_sellItemsCounter,'sellItemsList'=>($_sellItemsList instanceof AllegroStructArrayOfSellitemstruct)?$_sellItemsList:new AllegroStructArrayOfSellitemstruct($_sellItemsList)),false);
    }
    /**
     * Get sellItemsCounter value
     * @return int|null
     */
    public function getSellItemsCounter()
    {
        return $this->sellItemsCounter;
    }
    /**
     * Set sellItemsCounter value
     * @param int $_sellItemsCounter the sellItemsCounter
     * @return int
     */
    public function setSellItemsCounter($_sellItemsCounter)
    {
        return ($this->sellItemsCounter = $_sellItemsCounter);
    }
    /**
     * Get sellItemsList value
     * @return AllegroStructArrayOfSellitemstruct|null
     */
    public function getSellItemsList()
    {
        return $this->sellItemsList;
    }
    /**
     * Set sellItemsList value
     * @param AllegroStructArrayOfSellitemstruct $_sellItemsList the sellItemsList
     * @return AllegroStructArrayOfSellitemstruct
     */
    public function setSellItemsList($_sellItemsList)
    {
        return ($this->sellItemsList = $_sellItemsList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMySellItemsResponse
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
