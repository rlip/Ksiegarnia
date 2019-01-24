<?php
/**
 * File for class AllegroStructSellRatingStatsStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSellRatingStatsStruct originally named SellRatingStatsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSellRatingStatsStruct extends AllegroWsdlClass
{
    /**
     * The sellRatingGroupTitle
     * @var string
     */
    public $sellRatingGroupTitle;
    /**
     * The sellRatingGroupStats
     * @var string
     */
    public $sellRatingGroupStats;
    /**
     * Constructor method for SellRatingStatsStruct
     * @see parent::__construct()
     * @param string $_sellRatingGroupTitle
     * @param string $_sellRatingGroupStats
     * @return AllegroStructSellRatingStatsStruct
     */
    public function __construct($_sellRatingGroupTitle = NULL,$_sellRatingGroupStats = NULL)
    {
        parent::__construct(array('sellRatingGroupTitle'=>$_sellRatingGroupTitle,'sellRatingGroupStats'=>$_sellRatingGroupStats),false);
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
     * Get sellRatingGroupStats value
     * @return string|null
     */
    public function getSellRatingGroupStats()
    {
        return $this->sellRatingGroupStats;
    }
    /**
     * Set sellRatingGroupStats value
     * @param string $_sellRatingGroupStats the sellRatingGroupStats
     * @return string
     */
    public function setSellRatingGroupStats($_sellRatingGroupStats)
    {
        return ($this->sellRatingGroupStats = $_sellRatingGroupStats);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSellRatingStatsStruct
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
