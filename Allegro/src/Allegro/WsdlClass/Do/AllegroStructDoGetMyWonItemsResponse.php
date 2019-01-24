<?php
/**
 * File for class AllegroStructDoGetMyWonItemsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMyWonItemsResponse originally named doGetMyWonItemsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMyWonItemsResponse extends AllegroWsdlClass
{
    /**
     * The wonItemsCounter
     * @var int
     */
    public $wonItemsCounter;
    /**
     * The wonItemsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfWonitemstruct
     */
    public $wonItemsList;
    /**
     * Constructor method for doGetMyWonItemsResponse
     * @see parent::__construct()
     * @param int $_wonItemsCounter
     * @param AllegroStructArrayOfWonitemstruct $_wonItemsList
     * @return AllegroStructDoGetMyWonItemsResponse
     */
    public function __construct($_wonItemsCounter = NULL,$_wonItemsList = NULL)
    {
        parent::__construct(array('wonItemsCounter'=>$_wonItemsCounter,'wonItemsList'=>($_wonItemsList instanceof AllegroStructArrayOfWonitemstruct)?$_wonItemsList:new AllegroStructArrayOfWonitemstruct($_wonItemsList)),false);
    }
    /**
     * Get wonItemsCounter value
     * @return int|null
     */
    public function getWonItemsCounter()
    {
        return $this->wonItemsCounter;
    }
    /**
     * Set wonItemsCounter value
     * @param int $_wonItemsCounter the wonItemsCounter
     * @return int
     */
    public function setWonItemsCounter($_wonItemsCounter)
    {
        return ($this->wonItemsCounter = $_wonItemsCounter);
    }
    /**
     * Get wonItemsList value
     * @return AllegroStructArrayOfWonitemstruct|null
     */
    public function getWonItemsList()
    {
        return $this->wonItemsList;
    }
    /**
     * Set wonItemsList value
     * @param AllegroStructArrayOfWonitemstruct $_wonItemsList the wonItemsList
     * @return AllegroStructArrayOfWonitemstruct
     */
    public function setWonItemsList($_wonItemsList)
    {
        return ($this->wonItemsList = $_wonItemsList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMyWonItemsResponse
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
