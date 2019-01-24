<?php
/**
 * File for class AllegroStructSellRatingAveragePerMonthStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSellRatingAveragePerMonthStruct originally named SellRatingAveragePerMonthStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSellRatingAveragePerMonthStruct extends AllegroWsdlClass
{
    /**
     * The sellRatingMonth
     * @var string
     */
    public $sellRatingMonth;
    /**
     * The sellRatingAverageValues
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSellratingstatsstruct
     */
    public $sellRatingAverageValues;
    /**
     * Constructor method for SellRatingAveragePerMonthStruct
     * @see parent::__construct()
     * @param string $_sellRatingMonth
     * @param AllegroStructArrayOfSellratingstatsstruct $_sellRatingAverageValues
     * @return AllegroStructSellRatingAveragePerMonthStruct
     */
    public function __construct($_sellRatingMonth = NULL,$_sellRatingAverageValues = NULL)
    {
        parent::__construct(array('sellRatingMonth'=>$_sellRatingMonth,'sellRatingAverageValues'=>($_sellRatingAverageValues instanceof AllegroStructArrayOfSellratingstatsstruct)?$_sellRatingAverageValues:new AllegroStructArrayOfSellratingstatsstruct($_sellRatingAverageValues)),false);
    }
    /**
     * Get sellRatingMonth value
     * @return string|null
     */
    public function getSellRatingMonth()
    {
        return $this->sellRatingMonth;
    }
    /**
     * Set sellRatingMonth value
     * @param string $_sellRatingMonth the sellRatingMonth
     * @return string
     */
    public function setSellRatingMonth($_sellRatingMonth)
    {
        return ($this->sellRatingMonth = $_sellRatingMonth);
    }
    /**
     * Get sellRatingAverageValues value
     * @return AllegroStructArrayOfSellratingstatsstruct|null
     */
    public function getSellRatingAverageValues()
    {
        return $this->sellRatingAverageValues;
    }
    /**
     * Set sellRatingAverageValues value
     * @param AllegroStructArrayOfSellratingstatsstruct $_sellRatingAverageValues the sellRatingAverageValues
     * @return AllegroStructArrayOfSellratingstatsstruct
     */
    public function setSellRatingAverageValues($_sellRatingAverageValues)
    {
        return ($this->sellRatingAverageValues = $_sellRatingAverageValues);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSellRatingAveragePerMonthStruct
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
