<?php
/**
 * File for class AllegroStructSellRatingInfoStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSellRatingInfoStruct originally named SellRatingInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSellRatingInfoStruct extends AllegroWsdlClass
{
    /**
     * The sellRatingGroupId
     * @var int
     */
    public $sellRatingGroupId;
    /**
     * The sellRatingGroupTitle
     * @var string
     */
    public $sellRatingGroupTitle;
    /**
     * The sellRatingReasons
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSellratingreasonstruct
     */
    public $sellRatingReasons;
    /**
     * Constructor method for SellRatingInfoStruct
     * @see parent::__construct()
     * @param int $_sellRatingGroupId
     * @param string $_sellRatingGroupTitle
     * @param AllegroStructArrayOfSellratingreasonstruct $_sellRatingReasons
     * @return AllegroStructSellRatingInfoStruct
     */
    public function __construct($_sellRatingGroupId = NULL,$_sellRatingGroupTitle = NULL,$_sellRatingReasons = NULL)
    {
        parent::__construct(array('sellRatingGroupId'=>$_sellRatingGroupId,'sellRatingGroupTitle'=>$_sellRatingGroupTitle,'sellRatingReasons'=>($_sellRatingReasons instanceof AllegroStructArrayOfSellratingreasonstruct)?$_sellRatingReasons:new AllegroStructArrayOfSellratingreasonstruct($_sellRatingReasons)),false);
    }
    /**
     * Get sellRatingGroupId value
     * @return int|null
     */
    public function getSellRatingGroupId()
    {
        return $this->sellRatingGroupId;
    }
    /**
     * Set sellRatingGroupId value
     * @param int $_sellRatingGroupId the sellRatingGroupId
     * @return int
     */
    public function setSellRatingGroupId($_sellRatingGroupId)
    {
        return ($this->sellRatingGroupId = $_sellRatingGroupId);
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
     * Get sellRatingReasons value
     * @return AllegroStructArrayOfSellratingreasonstruct|null
     */
    public function getSellRatingReasons()
    {
        return $this->sellRatingReasons;
    }
    /**
     * Set sellRatingReasons value
     * @param AllegroStructArrayOfSellratingreasonstruct $_sellRatingReasons the sellRatingReasons
     * @return AllegroStructArrayOfSellratingreasonstruct
     */
    public function setSellRatingReasons($_sellRatingReasons)
    {
        return ($this->sellRatingReasons = $_sellRatingReasons);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSellRatingInfoStruct
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
