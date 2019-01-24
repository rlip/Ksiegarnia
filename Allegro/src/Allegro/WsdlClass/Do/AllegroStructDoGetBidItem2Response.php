<?php
/**
 * File for class AllegroStructDoGetBidItem2Response
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetBidItem2Response originally named doGetBidItem2Response
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetBidItem2Response extends AllegroWsdlClass
{
    /**
     * The biditemList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfBidliststruct2
     */
    public $biditemList;
    /**
     * Constructor method for doGetBidItem2Response
     * @see parent::__construct()
     * @param AllegroStructArrayOfBidliststruct2 $_biditemList
     * @return AllegroStructDoGetBidItem2Response
     */
    public function __construct($_biditemList = NULL)
    {
        parent::__construct(array('biditemList'=>($_biditemList instanceof AllegroStructArrayOfBidliststruct2)?$_biditemList:new AllegroStructArrayOfBidliststruct2($_biditemList)),false);
    }
    /**
     * Get biditemList value
     * @return AllegroStructArrayOfBidliststruct2|null
     */
    public function getBiditemList()
    {
        return $this->biditemList;
    }
    /**
     * Set biditemList value
     * @param AllegroStructArrayOfBidliststruct2 $_biditemList the biditemList
     * @return AllegroStructArrayOfBidliststruct2
     */
    public function setBiditemList($_biditemList)
    {
        return ($this->biditemList = $_biditemList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetBidItem2Response
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
