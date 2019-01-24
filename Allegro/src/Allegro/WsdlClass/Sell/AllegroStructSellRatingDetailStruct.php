<?php
/**
 * File for class AllegroStructSellRatingDetailStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSellRatingDetailStruct originally named SellRatingDetailStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSellRatingDetailStruct extends AllegroWsdlClass
{
    /**
     * The sellRatingGroupTitle
     * @var string
     */
    public $sellRatingGroupTitle;
    /**
     * The sellRatingReasonsSummary
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSellratingreasonsumstruct
     */
    public $sellRatingReasonsSummary;
    /**
     * Constructor method for SellRatingDetailStruct
     * @see parent::__construct()
     * @param string $_sellRatingGroupTitle
     * @param AllegroStructArrayOfSellratingreasonsumstruct $_sellRatingReasonsSummary
     * @return AllegroStructSellRatingDetailStruct
     */
    public function __construct($_sellRatingGroupTitle = NULL,$_sellRatingReasonsSummary = NULL)
    {
        parent::__construct(array('sellRatingGroupTitle'=>$_sellRatingGroupTitle,'sellRatingReasonsSummary'=>($_sellRatingReasonsSummary instanceof AllegroStructArrayOfSellratingreasonsumstruct)?$_sellRatingReasonsSummary:new AllegroStructArrayOfSellratingreasonsumstruct($_sellRatingReasonsSummary)),false);
    }
    /**
     * Get sellRatingGroupTitle value
     * @return string|null
     */
    public function getSellRatingGroupTitle()
    {
        return $this->sellRatingGroupTitle;
    }
    /**
     * Set sellRatingGroupTitle value
     * @param string $_sellRatingGroupTitle the sellRatingGroupTitle
     * @return string
     */
    public function setSellRatingGroupTitle($_sellRatingGroupTitle)
    {
        return ($this->sellRatingGroupTitle = $_sellRatingGroupTitle);
    }
    /**
     * Get sellRatingReasonsSummary value
     * @return AllegroStructArrayOfSellratingreasonsumstruct|null
     */
    public function getSellRatingReasonsSummary()
    {
        return $this->sellRatingReasonsSummary;
    }
    /**
     * Set sellRatingReasonsSummary value
     * @param AllegroStructArrayOfSellratingreasonsumstruct $_sellRatingReasonsSummary the sellRatingReasonsSummary
     * @return AllegroStructArrayOfSellratingreasonsumstruct
     */
    public function setSellRatingReasonsSummary($_sellRatingReasonsSummary)
    {
        return ($this->sellRatingReasonsSummary = $_sellRatingReasonsSummary);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSellRatingDetailStruct
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
