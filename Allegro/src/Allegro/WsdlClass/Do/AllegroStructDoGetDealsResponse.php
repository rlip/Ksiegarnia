<?php
/**
 * File for class AllegroStructDoGetDealsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetDealsResponse originally named doGetDealsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetDealsResponse extends AllegroWsdlClass
{
    /**
     * The dealsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfDealsstruct
     */
    public $dealsList;
    /**
     * Constructor method for doGetDealsResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfDealsstruct $_dealsList
     * @return AllegroStructDoGetDealsResponse
     */
    public function __construct($_dealsList = NULL)
    {
        parent::__construct(array('dealsList'=>($_dealsList instanceof AllegroStructArrayOfDealsstruct)?$_dealsList:new AllegroStructArrayOfDealsstruct($_dealsList)),false);
    }
    /**
     * Get dealsList value
     * @return AllegroStructArrayOfDealsstruct|null
     */
    public function getDealsList()
    {
        return $this->dealsList;
    }
    /**
     * Set dealsList value
     * @param AllegroStructArrayOfDealsstruct $_dealsList the dealsList
     * @return AllegroStructArrayOfDealsstruct
     */
    public function setDealsList($_dealsList)
    {
        return ($this->dealsList = $_dealsList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetDealsResponse
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
