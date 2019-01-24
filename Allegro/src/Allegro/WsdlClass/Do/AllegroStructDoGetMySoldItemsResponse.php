<?php
/**
 * File for class AllegroStructDoGetMySoldItemsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMySoldItemsResponse originally named doGetMySoldItemsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMySoldItemsResponse extends AllegroWsdlClass
{
    /**
     * The soldItemsCounter
     * @var int
     */
    public $soldItemsCounter;
    /**
     * The soldItemsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSolditemstruct
     */
    public $soldItemsList;
    /**
     * Constructor method for doGetMySoldItemsResponse
     * @see parent::__construct()
     * @param int $_soldItemsCounter
     * @param AllegroStructArrayOfSolditemstruct $_soldItemsList
     * @return AllegroStructDoGetMySoldItemsResponse
     */
    public function __construct($_soldItemsCounter = NULL,$_soldItemsList = NULL)
    {
        parent::__construct(array('soldItemsCounter'=>$_soldItemsCounter,'soldItemsList'=>($_soldItemsList instanceof AllegroStructArrayOfSolditemstruct)?$_soldItemsList:new AllegroStructArrayOfSolditemstruct($_soldItemsList)),false);
    }
    /**
     * Get soldItemsCounter value
     * @return int|null
     */
    public function getSoldItemsCounter()
    {
        return $this->soldItemsCounter;
    }
    /**
     * Set soldItemsCounter value
     * @param int $_soldItemsCounter the soldItemsCounter
     * @return int
     */
    public function setSoldItemsCounter($_soldItemsCounter)
    {
        return ($this->soldItemsCounter = $_soldItemsCounter);
    }
    /**
     * Get soldItemsList value
     * @return AllegroStructArrayOfSolditemstruct|null
     */
    public function getSoldItemsList()
    {
        return $this->soldItemsList;
    }
    /**
     * Set soldItemsList value
     * @param AllegroStructArrayOfSolditemstruct $_soldItemsList the soldItemsList
     * @return AllegroStructArrayOfSolditemstruct
     */
    public function setSoldItemsList($_soldItemsList)
    {
        return ($this->soldItemsList = $_soldItemsList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMySoldItemsResponse
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
