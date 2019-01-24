<?php
/**
 * File for class AllegroStructSpecialAuctionStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSpecialAuctionStruct originally named SpecialAuctionStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSpecialAuctionStruct extends AllegroWsdlClass
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
     * The itFotoCount
     * @var int
     */
    public $itFotoCount;
    /**
     * The itTimeLeft
     * @var long
     */
    public $itTimeLeft;
    /**
     * The itEndingTime
     * @var long
     */
    public $itEndingTime;
    /**
     * The itCountry
     * @var int
     */
    public $itCountry;
    /**
     * The itIsListingThumb
     * @var int
     */
    public $itIsListingThumb;
    /**
     * The itIsEscrow
     * @var int
     */
    public $itIsEscrow;
    /**
     * The itSellerId
     * @var long
     */
    public $itSellerId;
    /**
     * The itSendCostPrice
     * @var float
     */
    public $itSendCostPrice;
    /**
     * The itIsBoldTitle
     * @var int
     */
    public $itIsBoldTitle;
    /**
     * The itStartingTime
     * @var long
     */
    public $itStartingTime;
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
     * The itAttribsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfAttribstruct
     */
    public $itAttribsList;
    /**
     * Constructor method for SpecialAuctionStruct
     * @see parent::__construct()
     * @param long $_itId
     * @param string $_itName
     * @param float $_itPrice
     * @param float $_itBuyNowPrice
     * @param int $_itBidCount
     * @param int $_itFotoCount
     * @param long $_itTimeLeft
     * @param long $_itEndingTime
     * @param int $_itCountry
     * @param int $_itIsListingThumb
     * @param int $_itIsEscrow
     * @param long $_itSellerId
     * @param float $_itSendCostPrice
     * @param int $_itIsBoldTitle
     * @param long $_itStartingTime
     * @param int $_itIsAllegroStandard
     * @param int $_itHasFreeShipping
     * @param AllegroStructArrayOfAttribstruct $_itAttribsList
     * @return AllegroStructSpecialAuctionStruct
     */
    public function __construct($_itId = NULL,$_itName = NULL,$_itPrice = NULL,$_itBuyNowPrice = NULL,$_itBidCount = NULL,$_itFotoCount = NULL,$_itTimeLeft = NULL,$_itEndingTime = NULL,$_itCountry = NULL,$_itIsListingThumb = NULL,$_itIsEscrow = NULL,$_itSellerId = NULL,$_itSendCostPrice = NULL,$_itIsBoldTitle = NULL,$_itStartingTime = NULL,$_itIsAllegroStandard = NULL,$_itHasFreeShipping = NULL,$_itAttribsList = NULL)
    {
        parent::__construct(array('itId'=>$_itId,'itName'=>$_itName,'itPrice'=>$_itPrice,'itBuyNowPrice'=>$_itBuyNowPrice,'itBidCount'=>$_itBidCount,'itFotoCount'=>$_itFotoCount,'itTimeLeft'=>$_itTimeLeft,'itEndingTime'=>$_itEndingTime,'itCountry'=>$_itCountry,'itIsListingThumb'=>$_itIsListingThumb,'itIsEscrow'=>$_itIsEscrow,'itSellerId'=>$_itSellerId,'itSendCostPrice'=>$_itSendCostPrice,'itIsBoldTitle'=>$_itIsBoldTitle,'itStartingTime'=>$_itStartingTime,'itIsAllegroStandard'=>$_itIsAllegroStandard,'itHasFreeShipping'=>$_itHasFreeShipping,'itAttribsList'=>($_itAttribsList instanceof AllegroStructArrayOfAttribstruct)?$_itAttribsList:new AllegroStructArrayOfAttribstruct($_itAttribsList)),false);
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
     * Get itSellerId value
     * @return long|null
     */
    public function getItSellerId()
    {
        return $this->itSellerId;
    }
    /**
     * Set itSellerId value
     * @param long $_itSellerId the itSellerId
     * @return long
     */
    public function setItSellerId($_itSellerId)
    {
        return ($this->itSellerId = $_itSellerId);
    }
    /**
     * Get itSendCostPrice value
     * @return float|null
     */
    public function getItSendCostPrice()
    {
        return $this->itSendCostPrice;
    }
    /**
     * Set itSendCostPrice value
     * @param float $_itSendCostPrice the itSendCostPrice
     * @return float
     */
    public function setItSendCostPrice($_itSendCostPrice)
    {
        return ($this->itSendCostPrice = $_itSendCostPrice);
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
     * Get itAttribsList value
     * @return AllegroStructArrayOfAttribstruct|null
     */
    public function getItAttribsList()
    {
        return $this->itAttribsList;
    }
    /**
     * Set itAttribsList value
     * @param AllegroStructArrayOfAttribstruct $_itAttribsList the itAttribsList
     * @return AllegroStructArrayOfAttribstruct
     */
    public function setItAttribsList($_itAttribsList)
    {
        return ($this->itAttribsList = $_itAttribsList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSpecialAuctionStruct
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
