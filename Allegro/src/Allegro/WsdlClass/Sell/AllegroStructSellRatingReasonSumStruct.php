<?php
/**
 * File for class AllegroStructSellRatingReasonSumStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSellRatingReasonSumStruct originally named SellRatingReasonSumStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSellRatingReasonSumStruct extends AllegroWsdlClass
{
    /**
     * The sellRatingReasonTitle
     * @var string
     */
    public $sellRatingReasonTitle;
    /**
     * The sellRatingReasonCount
     * @var int
     */
    public $sellRatingReasonCount;
    /**
     * Constructor method for SellRatingReasonSumStruct
     * @see parent::__construct()
     * @param string $_sellRatingReasonTitle
     * @param int $_sellRatingReasonCount
     * @return AllegroStructSellRatingReasonSumStruct
     */
    public function __construct($_sellRatingReasonTitle = NULL,$_sellRatingReasonCount = NULL)
    {
        parent::__construct(array('sellRatingReasonTitle'=>$_sellRatingReasonTitle,'sellRatingReasonCount'=>$_sellRatingReasonCount),false);
    }
    /**
     * Get sellRatingReasonTitle value
     * @return string|null
     */
    public function getSellRatingReasonTitle()
    {
        return $this->sellRatingReasonTitle;
    }
    /**
     * Set sellRatingReasonTitle value
     * @param string $_sellRatingReasonTitle the sellRatingReasonTitle
     * @return string
     */
    public function setSellRatingReasonTitle($_sellRatingReasonTitle)
    {
        return ($this->sellRatingReasonTitle = $_sellRatingReasonTitle);
    }
    /**
     * Get sellRatingReasonCount value
     * @return int|null
     */
    public function getSellRatingReasonCount()
    {
        return $this->sellRatingReasonCount;
    }
    /**
     * Set sellRatingReasonCount value
     * @param int $_sellRatingReasonCount the sellRatingReasonCount
     * @return int
     */
    public function setSellRatingReasonCount($_sellRatingReasonCount)
    {
        return ($this->sellRatingReasonCount = $_sellRatingReasonCount);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSellRatingReasonSumStruct
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
