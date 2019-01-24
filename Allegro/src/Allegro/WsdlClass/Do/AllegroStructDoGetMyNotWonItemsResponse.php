<?php
/**
 * File for class AllegroStructDoGetMyNotWonItemsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMyNotWonItemsResponse originally named doGetMyNotWonItemsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMyNotWonItemsResponse extends AllegroWsdlClass
{
    /**
     * The notWonItemsCounter
     * @var int
     */
    public $notWonItemsCounter;
    /**
     * The notWonItemsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfNotwonitemstruct
     */
    public $notWonItemsList;
    /**
     * Constructor method for doGetMyNotWonItemsResponse
     * @see parent::__construct()
     * @param int $_notWonItemsCounter
     * @param AllegroStructArrayOfNotwonitemstruct $_notWonItemsList
     * @return AllegroStructDoGetMyNotWonItemsResponse
     */
    public function __construct($_notWonItemsCounter = NULL,$_notWonItemsList = NULL)
    {
        parent::__construct(array('notWonItemsCounter'=>$_notWonItemsCounter,'notWonItemsList'=>($_notWonItemsList instanceof AllegroStructArrayOfNotwonitemstruct)?$_notWonItemsList:new AllegroStructArrayOfNotwonitemstruct($_notWonItemsList)),false);
    }
    /**
     * Get notWonItemsCounter value
     * @return int|null
     */
    public function getNotWonItemsCounter()
    {
        return $this->notWonItemsCounter;
    }
    /**
     * Set notWonItemsCounter value
     * @param int $_notWonItemsCounter the notWonItemsCounter
     * @return int
     */
    public function setNotWonItemsCounter($_notWonItemsCounter)
    {
        return ($this->notWonItemsCounter = $_notWonItemsCounter);
    }
    /**
     * Get notWonItemsList value
     * @return AllegroStructArrayOfNotwonitemstruct|null
     */
    public function getNotWonItemsList()
    {
        return $this->notWonItemsList;
    }
    /**
     * Set notWonItemsList value
     * @param AllegroStructArrayOfNotwonitemstruct $_notWonItemsList the notWonItemsList
     * @return AllegroStructArrayOfNotwonitemstruct
     */
    public function setNotWonItemsList($_notWonItemsList)
    {
        return ($this->notWonItemsList = $_notWonItemsList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMyNotWonItemsResponse
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
