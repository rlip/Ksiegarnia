<?php
/**
 * File for class AllegroStructUserItemList
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructUserItemList originally named UserItemList
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructUserItemList extends AllegroWsdlClass
{
    /**
     * The itId
     * @var long
     */
    public $itId;
    /**
     * The itName
     * @var string
     */
    public $itName;
    /**
     * The itPrice
     * @var float
     */
    public $itPrice;
    /**
     * The itBuyNowPrice
     * @var float
     */
    public $itBuyNowPrice;
    /**
     * The itBidCount
     * @var int
     */
    public $itBidCount;
    /**
     * The itTimeLeft
     * @var long
     */
    public $itTimeLeft;
    /**
     * The itFotoCount
     * @var int
     */
    public $itFotoCount;
    /**
     * The itIsListingThumb
     * @var int
     */
    public $itIsListingThumb;
    /**
     * The itIsBoldTitle
     * @var int
     */
    public $itIsBoldTitle;
    /**
     * The itIsBuyNow
     * @var int
     */
    public $itIsBuyNow;
    /**
     * The itCountry
     * @var int
     */
    public $itCountry;
    /**
     * The itIsEscrow
     * @var int
     */
    public $itIsEscrow;
    /**
     * The itStartingTime
     * @var long
     */
    public $itStartingTime;
    /**
     * The itIsReservedPrice
     * @var int
     */
    public $itIsReservedPrice;
    /**
     * The itThumbUrl
     * @var string
     */
    public $itThumbUrl;
    /**
     * The itIsAllegroStandard
     * @var int
     */
    public $itIsAllegroStandard;
    /**
     * The itHasFreeShipping
     * @var int
     */
    public $itHasFreeShipping;
    /**
     * The itEndingTime
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $itEndingTime;
    /**
     * Constructor method for UserItemList
     * @see parent::__construct()
     * @param long $_itId
     * @param string $_itName
     * @param float $_itPrice
     * @param float $_itBuyNowPrice
     * @param int $_itBidCount
     * @param long $_itTimeLeft
     * @param int $_itFotoCount
     * @param int $_itIsListingThumb
     * @param int $_itIsBoldTitle
     * @param int $_itIsBuyNow
     * @param int $_itCountry
     * @param int $_itIsEscrow
     * @param long $_itStartingTime
     * @param int $_itIsReservedPrice
     * @param string $_itThumbUrl
     * @param int $_itIsAllegroStandard
     * @param int $_itHasFreeShipping
     * @param long $_itEndingTime
     * @return AllegroStructUserItemList
     */
    public function __construct($_itId = NULL,$_itName = NULL,$_itPrice = NULL,$_itBuyNowPrice = NULL,$_itBidCount = NULL,$_itTimeLeft = NULL,$_itFotoCount = NULL,$_itIsListingThumb = NULL,$_itIsBoldTitle = NULL,$_itIsBuyNow = NULL,$_itCountry = NULL,$_itIsEscrow = NULL,$_itStartingTime = NULL,$_itIsReservedPrice = NULL,$_itThumbUrl = NULL,$_itIsAllegroStandard = NULL,$_itHasFreeShipping = NULL,$_itEndingTime = NULL)
    {
        parent::__construct(array('itId'=>$_itId,'itName'=>$_itName,'itPrice'=>$_itPrice,'itBuyNowPrice'=>$_itBuyNowPrice,'itBidCount'=>$_itBidCount,'itTimeLeft'=>$_itTimeLeft,'itFotoCount'=>$_itFotoCount,'itIsListingThumb'=>$_itIsListingThumb,'itIsBoldTitle'=>$_itIsBoldTitle,'itIsBuyNow'=>$_itIsBuyNow,'itCountry'=>$_itCountry,'itIsEscrow'=>$_itIsEscrow,'itStartingTime'=>$_itStartingTime,'itIsReservedPrice'=>$_itIsReservedPrice,'itThumbUrl'=>$_itThumbUrl,'itIsAllegroStandard'=>$_itIsAllegroStandard,'itHasFreeShipping'=>$_itHasFreeShipping,'itEndingTime'=>$_itEndingTime),false);
    }
    /**
     * Get itId value
     * @return long|null
     */
    public function getItId()
    {
        return $this->itId;
    }
    /**
     * Set itId value
     * @param long $_itId the itId
     * @return long
     */
    public function setItId($_itId)
    {
        return ($this->itId = $_itId);
    }
    /**
     * Get itName value
     * @return string|null
     */
    public function getItName()
    {
        return $this->itName;
    }
    /**
     * Set itName value
     * @param string $_itName the itName
     * @return string
     */
    public function setItName($_itName)
    {
        return ($this->itName = $_itName);
    }
    /**
     * Get itPrice value
     * @return float|null
     */
    public function getItPrice()
    {
        return $this->itPrice;
    }
    /**
     * Set itPrice value
     * @param float $_itPrice the itPrice
     * @return float
     */
    public function setItPrice($_itPrice)
    {
        return ($this->itPrice = $_itPrice);
    }
    /**
     * Get itBuyNowPrice value
     * @return float|null
     */
    public function getItBuyNowPrice()
    {
        return $this->itBuyNowPrice;
    }
    /**
     * Set itBuyNowPrice value
     * @param float $_itBuyNowPrice the itBuyNowPrice
     * @return float
     */
    public function setItBuyNowPrice($_itBuyNowPrice)
    {
        return ($this->itBuyNowPrice = $_itBuyNowPrice);
    }
    /**
     * Get itBidCount value
     * @return int|null
     */
    public function getItBidCount()
    {
        return $this->itBidCount;
    }
    /**
     * Set itBidCount value
     * @param int $_itBidCount the itBidCount
     * @return int
     */
    public function setItBidCount($_itBidCount)
    {
        return ($this->itBidCount = $_itBidCount);
    }
    /**
     * Get itTimeLeft value
     * @return long|null
     */
    public function getItTimeLeft()
    {
        return $this->itTimeLeft;
    }
    /**
     * Set itTimeLeft value
     * @param long $_itTimeLeft the itTimeLeft
     * @return long
     */
    public function setItTimeLeft($_itTimeLeft)
    {
        return ($this->itTimeLeft = $_itTimeLeft);
    }
    /**
     * Get itFotoCount value
     * @return int|null
     */
    public function getItFotoCount()
    {
        return $this->itFotoCount;
    }
    /**
     * Set itFotoCount value
     * @param int $_itFotoCount the itFotoCount
     * @return int
     */
    public function setItFotoCount($_itFotoCount)
    {
        return ($this->itFotoCount = $_itFotoCount);
    }
    /**
     * Get itIsListingThumb value
     * @return int|null
     */
    public function getItIsListingThumb()
    {
        return $this->itIsListingThumb;
    }
    /**
     * Set itIsListingThumb value
     * @param int $_itIsListingThumb the itIsListingThumb
     * @return int
     */
    public function setItIsListingThumb($_itIsListingThumb)
    {
        return ($this->itIsListingThumb = $_itIsListingThumb);
    }
    /**
     * Get itIsBoldTitle value
     * @return int|null
     */
    public function getItIsBoldTitle()
    {
        return $this->itIsBoldTitle;
    }
    /**
     * Set itIsBoldTitle value
     * @param int $_itIsBoldTitle the itIsBoldTitle
     * @return int
     */
    public function setItIsBoldTitle($_itIsBoldTitle)
    {
        return ($this->itIsBoldTitle = $_itIsBoldTitle);
    }
    /**
     * Get itIsBuyNow value
     * @return int|null
     */
    public function getItIsBuyNow()
    {
        return $this->itIsBuyNow;
    }
    /**
     * Set itIsBuyNow value
     * @param int $_itIsBuyNow the itIsBuyNow
     * @return int
     */
    public function setItIsBuyNow($_itIsBuyNow)
    {
        return ($this->itIsBuyNow = $_itIsBuyNow);
    }
    /**
     * Get itCountry value
     * @return int|null
     */
    public function getItCountry()
    {
        return $this->itCountry;
    }
    /**
     * Set itCountry value
     * @param int $_itCountry the itCountry
     * @return int
     */
    public function setItCountry($_itCountry)
    {
        return ($this->itCountry = $_itCountry);
    }
    /**
     * Get itIsEscrow value
     * @return int|null
     */
    public function getItIsEscrow()
    {
        return $this->itIsEscrow;
    }
    /**
     * Set itIsEscrow value
     * @param int $_itIsEscrow the itIsEscrow
     * @return int
     */
    public function setItIsEscrow($_itIsEscrow)
    {
        return ($this->itIsEscrow = $_itIsEscrow);
    }
    /**
     * Get itStartingTime value
     * @return long|null
     */
    public function getItStartingTime()
    {
        return $this->itStartingTime;
    }
    /**
     * Set itStartingTime value
     * @param long $_itStartingTime the itStartingTime
     * @return long
     */
    public function setItStartingTime($_itStartingTime)
    {
        return ($this->itStartingTime = $_itStartingTime);
    }
    /**
     * Get itIsReservedPrice value
     * @return int|null
     */
    public function getItIsReservedPrice()
    {
        return $this->itIsReservedPrice;
    }
    /**
     * Set itIsReservedPrice value
     * @param int $_itIsReservedPrice the itIsReservedPrice
     * @return int
     */
    public function setItIsReservedPrice($_itIsReservedPrice)
    {
        return ($this->itIsReservedPrice = $_itIsReservedPrice);
    }
    /**
     * Get itThumbUrl value
     * @return string|null
     */
    public function getItThumbUrl()
    {
        return $this->itThumbUrl;
    }
    /**
     * Set itThumbUrl value
     * @param string $_itThumbUrl the itThumbUrl
     * @return string
     */
    public function setItThumbUrl($_itThumbUrl)
    {
        return ($this->itThumbUrl = $_itThumbUrl);
    }
    /**
     * Get itIsAllegroStandard value
     * @return int|null
     */
    public function getItIsAllegroStandard()
    {
        return $this->itIsAllegroStandard;
    }
    /**
     * Set itIsAllegroStandard value
     * @param int $_itIsAllegroStandard the itIsAllegroStandard
     * @return int
     */
    public function setItIsAllegroStandard($_itIsAllegroStandard)
    {
        return ($this->itIsAllegroStandard = $_itIsAllegroStandard);
    }
    /**
     * Get itHasFreeShipping value
     * @return int|null
     */
    public function getItHasFreeShipping()
    {
        return $this->itHasFreeShipping;
    }
    /**
     * Set itHasFreeShipping value
     * @param int $_itHasFreeShipping the itHasFreeShipping
     * @return int
     */
    public function setItHasFreeShipping($_itHasFreeShipping)
    {
        return ($this->itHasFreeShipping = $_itHasFreeShipping);
    }
    /**
     * Get itEndingTime value
     * @return long|null
     */
    public function getItEndingTime()
    {
        return $this->itEndingTime;
    }
    /**
     * Set itEndingTime value
     * @param long $_itEndingTime the itEndingTime
     * @return long
     */
    public function setItEndingTime($_itEndingTime)
    {
        return ($this->itEndingTime = $_itEndingTime);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructUserItemList
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
