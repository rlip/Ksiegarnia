<?php
/**
 * File for class AllegroStructDoGetMyFutureItemsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMyFutureItemsResponse originally named doGetMyFutureItemsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMyFutureItemsResponse extends AllegroWsdlClass
{
    /**
     * The futureItemsCounter
     * @var int
     */
    public $futureItemsCounter;
    /**
     * The futureItemsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFutureitemstruct
     */
    public $futureItemsList;
    /**
     * Constructor method for doGetMyFutureItemsResponse
     * @see parent::__construct()
     * @param int $_futureItemsCounter
     * @param AllegroStructArrayOfFutureitemstruct $_futureItemsList
     * @return AllegroStructDoGetMyFutureItemsResponse
     */
    public function __construct($_futureItemsCounter = NULL,$_futureItemsList = NULL)
    {
        parent::__construct(array('futureItemsCounter'=>$_futureItemsCounter,'futureItemsList'=>($_futureItemsList instanceof AllegroStructArrayOfFutureitemstruct)?$_futureItemsList:new AllegroStructArrayOfFutureitemstruct($_futureItemsList)),false);
    }
    /**
     * Get futureItemsCounter value
     * @return int|null
     */
    public function getFutureItemsCounter()
    {
        return $this->futureItemsCounter;
    }
    /**
     * Set futureItemsCounter value
     * @param int $_futureItemsCounter the futureItemsCounter
     * @return int
     */
    public function setFutureItemsCounter($_futureItemsCounter)
    {
        return ($this->futureItemsCounter = $_futureItemsCounter);
    }
    /**
     * Get futureItemsList value
     * @return AllegroStructArrayOfFutureitemstruct|null
     */
    public function getFutureItemsList()
    {
        return $this->futureItemsList;
    }
    /**
     * Set futureItemsList value
     * @param AllegroStructArrayOfFutureitemstruct $_futureItemsList the futureItemsList
     * @return AllegroStructArrayOfFutureitemstruct
     */
    public function setFutureItemsList($_futureItemsList)
    {
        return ($this->futureItemsList = $_futureItemsList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMyFutureItemsResponse
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
