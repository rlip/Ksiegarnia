<?php
/**
 * File for class AllegroStructSearchResponseType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSearchResponseType originally named SearchResponseType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSearchResponseType extends AllegroWsdlClass
{
    /**
     * The sItId
     * @var long
     */
    public $sItId;
    /**
     * The sItName
     * @var string
     */
    public $sItName;
    /**
     * The sItPrice
     * @var float
     */
    public $sItPrice;
    /**
     * The sItStartingPrice
     * @var float
     */
    public $sItStartingPrice;
    /**
     * The sItIsBuyNow
     * @var int
     */
    public $sItIsBuyNow;
    /**
     * The sItBuyNowPrice
     * @var float
     */
    public $sItBuyNowPrice;
    /**
     * The sItBidCount
     * @var int
     */
    public $sItBidCount;
    /**
     * The sItFotoCount
     * @var int
     */
    public $sItFotoCount;
    /**
     * The sItStartingTime
     * @var long
     */
    public $sItStartingTime;
    /**
     * The sItEndingTime
     * @var long
     */
    public $sItEndingTime;
    /**
     * The sItTimeLeft
     * @var long
     */
    public $sItTimeLeft;
    /**
     * The sItCity
     * @var string
     */
    public $sItCity;
    /**
     * The sItState
     * @var int
     */
    public $sItState;
    /**
     * The sItCountry
     * @var int
     */
    public $sItCountry;
    /**
     * The sItCategoryId
     * @var int
     */
    public $sItCategoryId;
    /**
     * The sItFeatured
     * @var int
     */
    public $sItFeatured;
    /**
     * The sItThumbUrl
     * @var string
     */
    public $sItThumbUrl;
    /**
     * The sItThumb
     * @var int
     */
    public $sItThumb;
    /**
     * The sItPostage
     * @var float
     */
    public $sItPostage;
    /**
     * The sItIsForGuests
     * @var int
     */
    public $sItIsForGuests;
    /**
     * The sItIsTablicaAdvert
     * @var int
     */
    public $sItIsTablicaAdvert;
    /**
     * The sItIsAllegroStandard
     * @var int
     */
    public $sItIsAllegroStandard;
    /**
     * The sItHasFreeShipping
     * @var int
     */
    public $sItHasFreeShipping;
    /**
     * The sItInstallmentsAvailable
     * @var int
     */
    public $sItInstallmentsAvailable;
    /**
     * The sItOrderFulfillmentTime
     * @var int
     */
    public $sItOrderFulfillmentTime;
    /**
     * The sItAdvertInfo
     * @var AllegroStructAdvertInfoStruct
     */
    public $sItAdvertInfo;
    /**
     * The sItSellerInfo
     * @var AllegroStructSellerInfoStruct
     */
    public $sItSellerInfo;
    /**
     * The sItAttribsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfAttribstruct
     */
    public $sItAttribsList;
    /**
     * The sItFulfillmentTime
     * @var int
     */
    public $sItFulfillmentTime;
    /**
     * Constructor method for SearchResponseType
     * @see parent::__construct()
     * @param long $_sItId
     * @param string $_sItName
     * @param float $_sItPrice
     * @param float $_sItStartingPrice
     * @param int $_sItIsBuyNow
     * @param float $_sItBuyNowPrice
     * @param int $_sItBidCount
     * @param int $_sItFotoCount
     * @param long $_sItStartingTime
     * @param long $_sItEndingTime
     * @param long $_sItTimeLeft
     * @param string $_sItCity
     * @param int $_sItState
     * @param int $_sItCountry
     * @param int $_sItCategoryId
     * @param int $_sItFeatured
     * @param string $_sItThumbUrl
     * @param int $_sItThumb
     * @param float $_sItPostage
     * @param int $_sItIsForGuests
     * @param int $_sItIsTablicaAdvert
     * @param int $_sItIsAllegroStandard
     * @param int $_sItHasFreeShipping
     * @param int $_sItInstallmentsAvailable
     * @param int $_sItOrderFulfillmentTime
     * @param AllegroStructAdvertInfoStruct $_sItAdvertInfo
     * @param AllegroStructSellerInfoStruct $_sItSellerInfo
     * @param AllegroStructArrayOfAttribstruct $_sItAttribsList
     * @param int $_sItFulfillmentTime
     * @return AllegroStructSearchResponseType
     */
    public function __construct($_sItId = NULL,$_sItName = NULL,$_sItPrice = NULL,$_sItStartingPrice = NULL,$_sItIsBuyNow = NULL,$_sItBuyNowPrice = NULL,$_sItBidCount = NULL,$_sItFotoCount = NULL,$_sItStartingTime = NULL,$_sItEndingTime = NULL,$_sItTimeLeft = NULL,$_sItCity = NULL,$_sItState = NULL,$_sItCountry = NULL,$_sItCategoryId = NULL,$_sItFeatured = NULL,$_sItThumbUrl = NULL,$_sItThumb = NULL,$_sItPostage = NULL,$_sItIsForGuests = NULL,$_sItIsTablicaAdvert = NULL,$_sItIsAllegroStandard = NULL,$_sItHasFreeShipping = NULL,$_sItInstallmentsAvailable = NULL,$_sItOrderFulfillmentTime = NULL,$_sItAdvertInfo = NULL,$_sItSellerInfo = NULL,$_sItAttribsList = NULL,$_sItFulfillmentTime = NULL)
    {
        parent::__construct(array('sItId'=>$_sItId,'sItName'=>$_sItName,'sItPrice'=>$_sItPrice,'sItStartingPrice'=>$_sItStartingPrice,'sItIsBuyNow'=>$_sItIsBuyNow,'sItBuyNowPrice'=>$_sItBuyNowPrice,'sItBidCount'=>$_sItBidCount,'sItFotoCount'=>$_sItFotoCount,'sItStartingTime'=>$_sItStartingTime,'sItEndingTime'=>$_sItEndingTime,'sItTimeLeft'=>$_sItTimeLeft,'sItCity'=>$_sItCity,'sItState'=>$_sItState,'sItCountry'=>$_sItCountry,'sItCategoryId'=>$_sItCategoryId,'sItFeatured'=>$_sItFeatured,'sItThumbUrl'=>$_sItThumbUrl,'sItThumb'=>$_sItThumb,'sItPostage'=>$_sItPostage,'sItIsForGuests'=>$_sItIsForGuests,'sItIsTablicaAdvert'=>$_sItIsTablicaAdvert,'sItIsAllegroStandard'=>$_sItIsAllegroStandard,'sItHasFreeShipping'=>$_sItHasFreeShipping,'sItInstallmentsAvailable'=>$_sItInstallmentsAvailable,'sItOrderFulfillmentTime'=>$_sItOrderFulfillmentTime,'sItAdvertInfo'=>$_sItAdvertInfo,'sItSellerInfo'=>$_sItSellerInfo,'sItAttribsList'=>($_sItAttribsList instanceof AllegroStructArrayOfAttribstruct)?$_sItAttribsList:new AllegroStructArrayOfAttribstruct($_sItAttribsList),'sItFulfillmentTime'=>$_sItFulfillmentTime),false);
    }
    /**
     * Get sItId value
     * @return long|null
     */
    public function getSItId()
    {
        return $this->sItId;
    }
    /**
     * Set sItId value
     * @param long $_sItId the sItId
     * @return long
     */
    public function setSItId($_sItId)
    {
        return ($this->sItId = $_sItId);
    }
    /**
     * Get sItName value
     * @return string|null
     */
    public function getSItName()
    {
        return $this->sItName;
    }
    /**
     * Set sItName value
     * @param string $_sItName the sItName
     * @return string
     */
    public function setSItName($_sItName)
    {
        return ($this->sItName = $_sItName);
    }
    /**
     * Get sItPrice value
     * @return float|null
     */
    public function getSItPrice()
    {
        return $this->sItPrice;
    }
    /**
     * Set sItPrice value
     * @param float $_sItPrice the sItPrice
     * @return float
     */
    public function setSItPrice($_sItPrice)
    {
        return ($this->sItPrice = $_sItPrice);
    }
    /**
     * Get sItStartingPrice value
     * @return float|null
     */
    public function getSItStartingPrice()
    {
        return $this->sItStartingPrice;
    }
    /**
     * Set sItStartingPrice value
     * @param float $_sItStartingPrice the sItStartingPrice
     * @return float
     */
    public function setSItStartingPrice($_sItStartingPrice)
    {
        return ($this->sItStartingPrice = $_sItStartingPrice);
    }
    /**
     * Get sItIsBuyNow value
     * @return int|null
     */
    public function getSItIsBuyNow()
    {
        return $this->sItIsBuyNow;
    }
    /**
     * Set sItIsBuyNow value
     * @param int $_sItIsBuyNow the sItIsBuyNow
     * @return int
     */
    public function setSItIsBuyNow($_sItIsBuyNow)
    {
        return ($this->sItIsBuyNow = $_sItIsBuyNow);
    }
    /**
     * Get sItBuyNowPrice value
     * @return float|null
     */
    public function getSItBuyNowPrice()
    {
        return $this->sItBuyNowPrice;
    }
    /**
     * Set sItBuyNowPrice value
     * @param float $_sItBuyNowPrice the sItBuyNowPrice
     * @return float
     */
    public function setSItBuyNowPrice($_sItBuyNowPrice)
    {
        return ($this->sItBuyNowPrice = $_sItBuyNowPrice);
    }
    /**
     * Get sItBidCount value
     * @return int|null
     */
    public function getSItBidCount()
    {
        return $this->sItBidCount;
    }
    /**
     * Set sItBidCount value
     * @param int $_sItBidCount the sItBidCount
     * @return int
     */
    public function setSItBidCount($_sItBidCount)
    {
        return ($this->sItBidCount = $_sItBidCount);
    }
    /**
     * Get sItFotoCount value
     * @return int|null
     */
    public function getSItFotoCount()
    {
        return $this->sItFotoCount;
    }
    /**
     * Set sItFotoCount value
     * @param int $_sItFotoCount the sItFotoCount
     * @return int
     */
    public function setSItFotoCount($_sItFotoCount)
    {
        return ($this->sItFotoCount = $_sItFotoCount);
    }
    /**
     * Get sItStartingTime value
     * @return long|null
     */
    public function getSItStartingTime()
    {
        return $this->sItStartingTime;
    }
    /**
     * Set sItStartingTime value
     * @param long $_sItStartingTime the sItStartingTime
     * @return long
     */
    public function setSItStartingTime($_sItStartingTime)
    {
        return ($this->sItStartingTime = $_sItStartingTime);
    }
    /**
     * Get sItEndingTime value
     * @return long|null
     */
    public function getSItEndingTime()
    {
        return $this->sItEndingTime;
    }
    /**
     * Set sItEndingTime value
     * @param long $_sItEndingTime the sItEndingTime
     * @return long
     */
    public function setSItEndingTime($_sItEndingTime)
    {
        return ($this->sItEndingTime = $_sItEndingTime);
    }
    /**
     * Get sItTimeLeft value
     * @return long|null
     */
    public function getSItTimeLeft()
    {
        return $this->sItTimeLeft;
    }
    /**
     * Set sItTimeLeft value
     * @param long $_sItTimeLeft the sItTimeLeft
     * @return long
     */
    public function setSItTimeLeft($_sItTimeLeft)
    {
        return ($this->sItTimeLeft = $_sItTimeLeft);
    }
    /**
     * Get sItCity value
     * @return string|null
     */
    public function getSItCity()
    {
        return $this->sItCity;
    }
    /**
     * Set sItCity value
     * @param string $_sItCity the sItCity
     * @return string
     */
    public function setSItCity($_sItCity)
    {
        return ($this->sItCity = $_sItCity);
    }
    /**
     * Get sItState value
     * @return int|null
     */
    public function getSItState()
    {
        return $this->sItState;
    }
    /**
     * Set sItState value
     * @param int $_sItState the sItState
     * @return int
     */
    public function setSItState($_sItState)
    {
        return ($this->sItState = $_sItState);
    }
    /**
     * Get sItCountry value
     * @return int|null
     */
    public function getSItCountry()
    {
        return $this->sItCountry;
    }
    /**
     * Set sItCountry value
     * @param int $_sItCountry the sItCountry
     * @return int
     */
    public function setSItCountry($_sItCountry)
    {
        return ($this->sItCountry = $_sItCountry);
    }
    /**
     * Get sItCategoryId value
     * @return int|null
     */
    public function getSItCategoryId()
    {
        return $this->sItCategoryId;
    }
    /**
     * Set sItCategoryId value
     * @param int $_sItCategoryId the sItCategoryId
     * @return int
     */
    public function setSItCategoryId($_sItCategoryId)
    {
        return ($this->sItCategoryId = $_sItCategoryId);
    }
    /**
     * Get sItFeatured value
     * @return int|null
     */
    public function getSItFeatured()
    {
        return $this->sItFeatured;
    }
    /**
     * Set sItFeatured value
     * @param int $_sItFeatured the sItFeatured
     * @return int
     */
    public function setSItFeatured($_sItFeatured)
    {
        return ($this->sItFeatured = $_sItFeatured);
    }
    /**
     * Get sItThumbUrl value
     * @return string|null
     */
    public function getSItThumbUrl()
    {
        return $this->sItThumbUrl;
    }
    /**
     * Set sItThumbUrl value
     * @param string $_sItThumbUrl the sItThumbUrl
     * @return string
     */
    public function setSItThumbUrl($_sItThumbUrl)
    {
        return ($this->sItThumbUrl = $_sItThumbUrl);
    }
    /**
     * Get sItThumb value
     * @return int|null
     */
    public function getSItThumb()
    {
        return $this->sItThumb;
    }
    /**
     * Set sItThumb value
     * @param int $_sItThumb the sItThumb
     * @return int
     */
    public function setSItThumb($_sItThumb)
    {
        return ($this->sItThumb = $_sItThumb);
    }
    /**
     * Get sItPostage value
     * @return float|null
     */
    public function getSItPostage()
    {
        return $this->sItPostage;
    }
    /**
     * Set sItPostage value
     * @param float $_sItPostage the sItPostage
     * @return float
     */
    public function setSItPostage($_sItPostage)
    {
        return ($this->sItPostage = $_sItPostage);
    }
    /**
     * Get sItIsForGuests value
     * @return int|null
     */
    public function getSItIsForGuests()
    {
        return $this->sItIsForGuests;
    }
    /**
     * Set sItIsForGuests value
     * @param int $_sItIsForGuests the sItIsForGuests
     * @return int
     */
    public function setSItIsForGuests($_sItIsForGuests)
    {
        return ($this->sItIsForGuests = $_sItIsForGuests);
    }
    /**
     * Get sItIsTablicaAdvert value
     * @return int|null
     */
    public function getSItIsTablicaAdvert()
    {
        return $this->sItIsTablicaAdvert;
    }
    /**
     * Set sItIsTablicaAdvert value
     * @param int $_sItIsTablicaAdvert the sItIsTablicaAdvert
     * @return int
     */
    public function setSItIsTablicaAdvert($_sItIsTablicaAdvert)
    {
        return ($this->sItIsTablicaAdvert = $_sItIsTablicaAdvert);
    }
    /**
     * Get sItIsAllegroStandard value
     * @return int|null
     */
    public function getSItIsAllegroStandard()
    {
        return $this->sItIsAllegroStandard;
    }
    /**
     * Set sItIsAllegroStandard value
     * @param int $_sItIsAllegroStandard the sItIsAllegroStandard
     * @return int
     */
    public function setSItIsAllegroStandard($_sItIsAllegroStandard)
    {
        return ($this->sItIsAllegroStandard = $_sItIsAllegroStandard);
    }
    /**
     * Get sItHasFreeShipping value
     * @return int|null
     */
    public function getSItHasFreeShipping()
    {
        return $this->sItHasFreeShipping;
    }
    /**
     * Set sItHasFreeShipping value
     * @param int $_sItHasFreeShipping the sItHasFreeShipping
     * @return int
     */
    public function setSItHasFreeShipping($_sItHasFreeShipping)
    {
        return ($this->sItHasFreeShipping = $_sItHasFreeShipping);
    }
    /**
     * Get sItInstallmentsAvailable value
     * @return int|null
     */
    public function getSItInstallmentsAvailable()
    {
        return $this->sItInstallmentsAvailable;
    }
    /**
     * Set sItInstallmentsAvailable value
     * @param int $_sItInstallmentsAvailable the sItInstallmentsAvailable
     * @return int
     */
    public function setSItInstallmentsAvailable($_sItInstallmentsAvailable)
    {
        return ($this->sItInstallmentsAvailable = $_sItInstallmentsAvailable);
    }
    /**
     * Get sItOrderFulfillmentTime value
     * @return int|null
     */
    public function getSItOrderFulfillmentTime()
    {
        return $this->sItOrderFulfillmentTime;
    }
    /**
     * Set sItOrderFulfillmentTime value
     * @param int $_sItOrderFulfillmentTime the sItOrderFulfillmentTime
     * @return int
     */
    public function setSItOrderFulfillmentTime($_sItOrderFulfillmentTime)
    {
        return ($this->sItOrderFulfillmentTime = $_sItOrderFulfillmentTime);
    }
    /**
     * Get sItAdvertInfo value
     * @return AllegroStructAdvertInfoStruct|null
     */
    public function getSItAdvertInfo()
    {
        return $this->sItAdvertInfo;
    }
    /**
     * Set sItAdvertInfo value
     * @param AllegroStructAdvertInfoStruct $_sItAdvertInfo the sItAdvertInfo
     * @return AllegroStructAdvertInfoStruct
     */
    public function setSItAdvertInfo($_sItAdvertInfo)
    {
        return ($this->sItAdvertInfo = $_sItAdvertInfo);
    }
    /**
     * Get sItSellerInfo value
     * @return AllegroStructSellerInfoStruct|null
     */
    public function getSItSellerInfo()
    {
        return $this->sItSellerInfo;
    }
    /**
     * Set sItSellerInfo value
     * @param AllegroStructSellerInfoStruct $_sItSellerInfo the sItSellerInfo
     * @return AllegroStructSellerInfoStruct
     */
    public function setSItSellerInfo($_sItSellerInfo)
    {
        return ($this->sItSellerInfo = $_sItSellerInfo);
    }
    /**
     * Get sItAttribsList value
     * @return AllegroStructArrayOfAttribstruct|null
     */
    public function getSItAttribsList()
    {
        return $this->sItAttribsList;
    }
    /**
     * Set sItAttribsList value
     * @param AllegroStructArrayOfAttribstruct $_sItAttribsList the sItAttribsList
     * @return AllegroStructArrayOfAttribstruct
     */
    public function setSItAttribsList($_sItAttribsList)
    {
        return ($this->sItAttribsList = $_sItAttribsList);
    }
    /**
     * Get sItFulfillmentTime value
     * @return int|null
     */
    public function getSItFulfillmentTime()
    {
        return $this->sItFulfillmentTime;
    }
    /**
     * Set sItFulfillmentTime value
     * @param int $_sItFulfillmentTime the sItFulfillmentTime
     * @return int
     */
    public function setSItFulfillmentTime($_sItFulfillmentTime)
    {
        return ($this->sItFulfillmentTime = $_sItFulfillmentTime);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSearchResponseType
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
