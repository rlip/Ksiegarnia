<?php
/**
 * File for class AllegroStructDoGetSpecialItemsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetSpecialItemsResponse originally named doGetSpecialItemsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetSpecialItemsResponse extends AllegroWsdlClass
{
    /**
     * The sSpecialList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSpecialauctionstruct
     */
    public $sSpecialList;
    /**
     * Constructor method for doGetSpecialItemsResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfSpecialauctionstruct $_sSpecialList
     * @return AllegroStructDoGetSpecialItemsResponse
     */
    public function __construct($_sSpecialList = NULL)
    {
        parent::__construct(array('sSpecialList'=>($_sSpecialList instanceof AllegroStructArrayOfSpecialauctionstruct)?$_sSpecialList:new AllegroStructArrayOfSpecialauctionstruct($_sSpecialList)),false);
    }
    /**
     * Get sSpecialList value
     * @return AllegroStructArrayOfSpecialauctionstruct|null
     */
    public function getSSpecialList()
    {
        return $this->sSpecialList;
    }
    /**
     * Set sSpecialList value
     * @param AllegroStructArrayOfSpecialauctionstruct $_sSpecialList the sSpecialList
     * @return AllegroStructArrayOfSpecialauctionstruct
     */
    public function setSSpecialList($_sSpecialList)
    {
        return ($this->sSpecialList = $_sSpecialList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetSpecialItemsResponse
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
