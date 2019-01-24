<?php
/**
 * File for class AllegroStructDoGetSellRatingReasonsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetSellRatingReasonsResponse originally named doGetSellRatingReasonsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetSellRatingReasonsResponse extends AllegroWsdlClass
{
    /**
     * The sellRatingInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSellratinginfostruct
     */
    public $sellRatingInfo;
    /**
     * Constructor method for doGetSellRatingReasonsResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfSellratinginfostruct $_sellRatingInfo
     * @return AllegroStructDoGetSellRatingReasonsResponse
     */
    public function __construct($_sellRatingInfo = NULL)
    {
        parent::__construct(array('sellRatingInfo'=>($_sellRatingInfo instanceof AllegroStructArrayOfSellratinginfostruct)?$_sellRatingInfo:new AllegroStructArrayOfSellratinginfostruct($_sellRatingInfo)),false);
    }
    /**
     * Get sellRatingInfo value
     * @return AllegroStructArrayOfSellratinginfostruct|null
     */
    public function getSellRatingInfo()
    {
        return $this->sellRatingInfo;
    }
    /**
     * Set sellRatingInfo value
     * @param AllegroStructArrayOfSellratinginfostruct $_sellRatingInfo the sellRatingInfo
     * @return AllegroStructArrayOfSellratinginfostruct
     */
    public function setSellRatingInfo($_sellRatingInfo)
    {
        return ($this->sellRatingInfo = $_sellRatingInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetSellRatingReasonsResponse
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
