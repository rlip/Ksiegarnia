<?php
/**
 * File for class AllegroStructSellRatingAverageStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSellRatingAverageStruct originally named SellRatingAverageStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSellRatingAverageStruct extends AllegroWsdlClass
{
    /**
     * The sellRatingGroupTitle
     * @var string
     */
    public $sellRatingGroupTitle;
    /**
     * The sellRatingGroupAverage
     * @var float
     */
    public $sellRatingGroupAverage;
    /**
     * Constructor method for SellRatingAverageStruct
     * @see parent::__construct()
     * @param string $_sellRatingGroupTitle
     * @param float $_sellRatingGroupAverage
     * @return AllegroStructSellRatingAverageStruct
     */
    public function __construct($_sellRatingGroupTitle = NULL,$_sellRatingGroupAverage = NULL)
    {
        parent::__construct(array('sellRatingGroupTitle'=>$_sellRatingGroupTitle,'sellRatingGroupAverage'=>$_sellRatingGroupAverage),false);
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
     * Get sellRatingGroupAverage value
     * @return float|null
     */
    public function getSellRatingGroupAverage()
    {
        return $this->sellRatingGroupAverage;
    }
    /**
     * Set sellRatingGroupAverage value
     * @param float $_sellRatingGroupAverage the sellRatingGroupAverage
     * @return float
     */
    public function setSellRatingGroupAverage($_sellRatingGroupAverage)
    {
        return ($this->sellRatingGroupAverage = $_sellRatingGroupAverage);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSellRatingAverageStruct
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
