<?php
/**
 * File for class AllegroStructSellRatingReasonStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSellRatingReasonStruct originally named SellRatingReasonStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSellRatingReasonStruct extends AllegroWsdlClass
{
    /**
     * The sellRatingReasonId
     * @var int
     */
    public $sellRatingReasonId;
    /**
     * The sellRatingReasonTitle
     * @var string
     */
    public $sellRatingReasonTitle;
    /**
     * Constructor method for SellRatingReasonStruct
     * @see parent::__construct()
     * @param int $_sellRatingReasonId
     * @param string $_sellRatingReasonTitle
     * @return AllegroStructSellRatingReasonStruct
     */
    public function __construct($_sellRatingReasonId = NULL,$_sellRatingReasonTitle = NULL)
    {
        parent::__construct(array('sellRatingReasonId'=>$_sellRatingReasonId,'sellRatingReasonTitle'=>$_sellRatingReasonTitle),false);
    }
    /**
     * Get sellRatingReasonId value
     * @return int|null
     */
    public function getSellRatingReasonId()
    {
        return $this->sellRatingReasonId;
    }
    /**
     * Set sellRatingReasonId value
     * @param int $_sellRatingReasonId the sellRatingReasonId
     * @return int
     */
    public function setSellRatingReasonId($_sellRatingReasonId)
    {
        return ($this->sellRatingReasonId = $_sellRatingReasonId);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSellRatingReasonStruct
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
