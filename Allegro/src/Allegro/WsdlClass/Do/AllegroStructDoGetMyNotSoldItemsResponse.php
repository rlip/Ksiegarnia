<?php
/**
 * File for class AllegroStructDoGetMyNotSoldItemsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMyNotSoldItemsResponse originally named doGetMyNotSoldItemsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMyNotSoldItemsResponse extends AllegroWsdlClass
{
    /**
     * The notSoldItemsCounter
     * @var int
     */
    public $notSoldItemsCounter;
    /**
     * The notSoldItemsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfNotsolditemstruct
     */
    public $notSoldItemsList;
    /**
     * Constructor method for doGetMyNotSoldItemsResponse
     * @see parent::__construct()
     * @param int $_notSoldItemsCounter
     * @param AllegroStructArrayOfNotsolditemstruct $_notSoldItemsList
     * @return AllegroStructDoGetMyNotSoldItemsResponse
     */
    public function __construct($_notSoldItemsCounter = NULL,$_notSoldItemsList = NULL)
    {
        parent::__construct(array('notSoldItemsCounter'=>$_notSoldItemsCounter,'notSoldItemsList'=>($_notSoldItemsList instanceof AllegroStructArrayOfNotsolditemstruct)?$_notSoldItemsList:new AllegroStructArrayOfNotsolditemstruct($_notSoldItemsList)),false);
    }
    /**
     * Get notSoldItemsCounter value
     * @return int|null
     */
    public function getNotSoldItemsCounter()
    {
        return $this->notSoldItemsCounter;
    }
    /**
     * Set notSoldItemsCounter value
     * @param int $_notSoldItemsCounter the notSoldItemsCounter
     * @return int
     */
    public function setNotSoldItemsCounter($_notSoldItemsCounter)
    {
        return ($this->notSoldItemsCounter = $_notSoldItemsCounter);
    }
    /**
     * Get notSoldItemsList value
     * @return AllegroStructArrayOfNotsolditemstruct|null
     */
    public function getNotSoldItemsList()
    {
        return $this->notSoldItemsList;
    }
    /**
     * Set notSoldItemsList value
     * @param AllegroStructArrayOfNotsolditemstruct $_notSoldItemsList the notSoldItemsList
     * @return AllegroStructArrayOfNotsolditemstruct
     */
    public function setNotSoldItemsList($_notSoldItemsList)
    {
        return ($this->notSoldItemsList = $_notSoldItemsList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMyNotSoldItemsResponse
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
