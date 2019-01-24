<?php
/**
 * File for class AllegroStructPostBuyFormItemDealsStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPostBuyFormItemDealsStruct originally named PostBuyFormItemDealsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPostBuyFormItemDealsStruct extends AllegroWsdlClass
{
    /**
     * The dealId
     * @var long
     */
    public $dealId;
    /**
     * The dealFinalPrice
     * @var float
     */
    public $dealFinalPrice;
    /**
     * The dealQuantity
     * @var int
     */
    public $dealQuantity;
    /**
     * The dealDate
     * @var dateTime
     */
    public $dealDate;
    /**
     * The dealWasDiscounted
     * @var boolean
     */
    public $dealWasDiscounted;
    /**
     * Constructor method for PostBuyFormItemDealsStruct
     * @see parent::__construct()
     * @param long $_dealId
     * @param float $_dealFinalPrice
     * @param int $_dealQuantity
     * @param dateTime $_dealDate
     * @param boolean $_dealWasDiscounted
     * @return AllegroStructPostBuyFormItemDealsStruct
     */
    public function __construct($_dealId = NULL,$_dealFinalPrice = NULL,$_dealQuantity = NULL,$_dealDate = NULL,$_dealWasDiscounted = NULL)
    {
        parent::__construct(array('dealId'=>$_dealId,'dealFinalPrice'=>$_dealFinalPrice,'dealQuantity'=>$_dealQuantity,'dealDate'=>$_dealDate,'dealWasDiscounted'=>$_dealWasDiscounted),false);
    }
    /**
     * Get dealId value
     * @return long|null
     */
    public function getDealId()
    {
        return $this->dealId;
    }
    /**
     * Set dealId value
     * @param long $_dealId the dealId
     * @return long
     */
    public function setDealId($_dealId)
    {
        return ($this->dealId = $_dealId);
    }
    /**
     * Get dealFinalPrice value
     * @return float|null
     */
    public function getDealFinalPrice()
    {
        return $this->dealFinalPrice;
    }
    /**
     * Set dealFinalPrice value
     * @param float $_dealFinalPrice the dealFinalPrice
     * @return float
     */
    public function setDealFinalPrice($_dealFinalPrice)
    {
        return ($this->dealFinalPrice = $_dealFinalPrice);
    }
    /**
     * Get dealQuantity value
     * @return int|null
     */
    public function getDealQuantity()
    {
        return $this->dealQuantity;
    }
    /**
     * Set dealQuantity value
     * @param int $_dealQuantity the dealQuantity
     * @return int
     */
    public function setDealQuantity($_dealQuantity)
    {
        return ($this->dealQuantity = $_dealQuantity);
    }
    /**
     * Get dealDate value
     * @return dateTime|null
     */
    public function getDealDate()
    {
        return $this->dealDate;
    }
    /**
     * Set dealDate value
     * @param dateTime $_dealDate the dealDate
     * @return dateTime
     */
    public function setDealDate($_dealDate)
    {
        return ($this->dealDate = $_dealDate);
    }
    /**
     * Get dealWasDiscounted value
     * @return boolean|null
     */
    public function getDealWasDiscounted()
    {
        return $this->dealWasDiscounted;
    }
    /**
     * Set dealWasDiscounted value
     * @param boolean $_dealWasDiscounted the dealWasDiscounted
     * @return boolean
     */
    public function setDealWasDiscounted($_dealWasDiscounted)
    {
        return ($this->dealWasDiscounted = $_dealWasDiscounted);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPostBuyFormItemDealsStruct
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
