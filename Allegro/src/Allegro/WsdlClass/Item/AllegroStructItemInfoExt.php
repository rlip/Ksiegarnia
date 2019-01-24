<?php
/**
 * File for class AllegroStructItemInfoExt
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructItemInfoExt originally named ItemInfoExt
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructItemInfoExt extends AllegroWsdlClass
{
    /**
     * The itId
     * @var long
     */
    public $itId;
    /**
     * The itCountry
     * @var int
     */
    public $itCountry;
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
     * The itBidCount
     * @var int
     */
    public $itBidCount;
    /**
     * The itEndingTime
     * @var long
     */
    public $itEndingTime;
    /**
     * The itSellerId
     * @var long
     */
    public $itSellerId;
    /**
     * The itSellerLogin
     * @var string
     */
    public $itSellerLogin;
    /**
     * The itSellerRating
     * @var int
     */
    public $itSellerRating;
    /**
     * The itStartingTime
     * @var long
     */
    public $itStartingTime;
    /**
     * The itStartingPrice
     * @var float
     */
    public $itStartingPrice;
    /**
     * The itQuantity
     * @var int
     */
    public $itQuantity;
    /**
     * The itFotoCount
     * @var int
     */
    public $itFotoCount;
    /**
     * The itReservePrice
     * @var float
     */
    public $itReservePrice;
    /**
     * The itLocation
     * @var string
     */
    public $itLocation;
    /**
     * The itBuyNowPrice
     * @var float
     */
    public $itBuyNowPrice;
    /**
     * The itBuyNowActive
     * @var int
     */
    public $itBuyNowActive;
    /**
     * The itHighBidder
     * @var int
     */
    public $itHighBidder;
    /**
     * The itHighBidderLogin
     * @var string
     */
    public $itHighBidderLogin;
    /**
     * The itDescription
     * @var string
     */
    public $itDescription;
    /**
     * The itOptions
     * @var int
     */
    public $itOptions;
    /**
     * The itState
     * @var int
     */
    public $itState;
    /**
     * The itWireTransfer
     * @var float
     */
    public $itWireTransfer;
    /**
     * The itPostDelivery
     * @var float
     */
    public $itPostDelivery;
    /**
     * The itPostInfo
     * @var string
     */
    public $itPostInfo;
    /**
     * The itQuantityType
     * @var int
     */
    public $itQuantityType;
    /**
     * The itIsEco
     * @var int
     */
    public $itIsEco;
    /**
     * The itHitCount
     * @var long
     */
    public $itHitCount;
    /**
     * The itPostcode
     * @var string
     */
    public $itPostcode;
    /**
     * The itVatInvoice
     * @var int
     */
    public $itVatInvoice;
    /**
     * The itBankAccount1
     * @var string
     */
    public $itBankAccount1;
    /**
     * The itBankAccount2
     * @var string
     */
    public $itBankAccount2;
    /**
     * The itStartingQuantity
     * @var int
     */
    public $itStartingQuantity;
    /**
     * The itIsForGuests
     * @var int
     */
    public $itIsForGuests;
    /**
     * The itHasProduct
     * @var int
     */
    public $itHasProduct;
    /**
     * The itOrderFulfillmentTime
     * @var int
     */
    public $itOrderFulfillmentTime;
    /**
     * The itEndingInfo
     * @var int
     */
    public $itEndingInfo;
    /**
     * The itIsAllegroStandard
     * @var int
     */
    public $itIsAllegroStandard;
    /**
     * The itIsNewUsed
     * @var int
     */
    public $itIsNewUsed;
    /**
     * The itIsBrandZone
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $itIsBrandZone;
    /**
     * Constructor method for ItemInfoExt
     * @see parent::__construct()
     * @param long $_itId
     * @param int $_itCountry
     * @param string $_itName
     * @param float $_itPrice
     * @param int $_itBidCount
     * @param long $_itEndingTime
     * @param long $_itSellerId
     * @param string $_itSellerLogin
     * @param int $_itSellerRating
     * @param long $_itStartingTime
     * @param float $_itStartingPrice
     * @param int $_itQuantity
     * @param int $_itFotoCount
     * @param float $_itReservePrice
     * @param string $_itLocation
     * @param float $_itBuyNowPrice
     * @param int $_itBuyNowActive
     * @param int $_itHighBidder
     * @param string $_itHighBidderLogin
     * @param string $_itDescription
     * @param int $_itOptions
     * @param int $_itState
     * @param float $_itWireTransfer
     * @param float $_itPostDelivery
     * @param string $_itPostInfo
     * @param int $_itQuantityType
     * @param int $_itIsEco
     * @param long $_itHitCount
     * @param string $_itPostcode
     * @param int $_itVatInvoice
     * @param string $_itBankAccount1
     * @param string $_itBankAccount2
     * @param int $_itStartingQuantity
     * @param int $_itIsForGuests
     * @param int $_itHasProduct
     * @param int $_itOrderFulfillmentTime
     * @param int $_itEndingInfo
     * @param int $_itIsAllegroStandard
     * @param int $_itIsNewUsed
     * @param int $_itIsBrandZone
     * @return AllegroStructItemInfoExt
     */
    public function __construct($_itId = NULL,$_itCountry = NULL,$_itName = NULL,$_itPrice = NULL,$_itBidCount = NULL,$_itEndingTime = NULL,$_itSellerId = NULL,$_itSellerLogin = NULL,$_itSellerRating = NULL,$_itStartingTime = NULL,$_itStartingPrice = NULL,$_itQuantity = NULL,$_itFotoCount = NULL,$_itReservePrice = NULL,$_itLocation = NULL,$_itBuyNowPrice = NULL,$_itBuyNowActive = NULL,$_itHighBidder = NULL,$_itHighBidderLogin = NULL,$_itDescription = NULL,$_itOptions = NULL,$_itState = NULL,$_itWireTransfer = NULL,$_itPostDelivery = NULL,$_itPostInfo = NULL,$_itQuantityType = NULL,$_itIsEco = NULL,$_itHitCount = NULL,$_itPostcode = NULL,$_itVatInvoice = NULL,$_itBankAccount1 = NULL,$_itBankAccount2 = NULL,$_itStartingQuantity = NULL,$_itIsForGuests = NULL,$_itHasProduct = NULL,$_itOrderFulfillmentTime = NULL,$_itEndingInfo = NULL,$_itIsAllegroStandard = NULL,$_itIsNewUsed = NULL,$_itIsBrandZone = NULL)
    {
        parent::__construct(array('itId'=>$_itId,'itCountry'=>$_itCountry,'itName'=>$_itName,'itPrice'=>$_itPrice,'itBidCount'=>$_itBidCount,'itEndingTime'=>$_itEndingTime,'itSellerId'=>$_itSellerId,'itSellerLogin'=>$_itSellerLogin,'itSellerRating'=>$_itSellerRating,'itStartingTime'=>$_itStartingTime,'itStartingPrice'=>$_itStartingPrice,'itQuantity'=>$_itQuantity,'itFotoCount'=>$_itFotoCount,'itReservePrice'=>$_itReservePrice,'itLocation'=>$_itLocation,'itBuyNowPrice'=>$_itBuyNowPrice,'itBuyNowActive'=>$_itBuyNowActive,'itHighBidder'=>$_itHighBidder,'itHighBidderLogin'=>$_itHighBidderLogin,'itDescription'=>$_itDescription,'itOptions'=>$_itOptions,'itState'=>$_itState,'itWireTransfer'=>$_itWireTransfer,'itPostDelivery'=>$_itPostDelivery,'itPostInfo'=>$_itPostInfo,'itQuantityType'=>$_itQuantityType,'itIsEco'=>$_itIsEco,'itHitCount'=>$_itHitCount,'itPostcode'=>$_itPostcode,'itVatInvoice'=>$_itVatInvoice,'itBankAccount1'=>$_itBankAccount1,'itBankAccount2'=>$_itBankAccount2,'itStartingQuantity'=>$_itStartingQuantity,'itIsForGuests'=>$_itIsForGuests,'itHasProduct'=>$_itHasProduct,'itOrderFulfillmentTime'=>$_itOrderFulfillmentTime,'itEndingInfo'=>$_itEndingInfo,'itIsAllegroStandard'=>$_itIsAllegroStandard,'itIsNewUsed'=>$_itIsNewUsed,'itIsBrandZone'=>$_itIsBrandZone),false);
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
     * Get itSellerLogin value
     * @return string|null
     */
    public function getItSellerLogin()
    {
        return $this->itSellerLogin;
    }
    /**
     * Set itSellerLogin value
     * @param string $_itSellerLogin the itSellerLogin
     * @return string
     */
    public function setItSellerLogin($_itSellerLogin)
    {
        return ($this->itSellerLogin = $_itSellerLogin);
    }
    /**
     * Get itSellerRating value
     * @return int|null
     */
    public function getItSellerRating()
    {
        return $this->itSellerRating;
    }
    /**
     * Set itSellerRating value
     * @param int $_itSellerRating the itSellerRating
     * @return int
     */
    public function setItSellerRating($_itSellerRating)
    {
        return ($this->itSellerRating = $_itSellerRating);
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
     * Get itStartingPrice value
     * @return float|null
     */
    public function getItStartingPrice()
    {
        return $this->itStartingPrice;
    }
    /**
     * Set itStartingPrice value
     * @param float $_itStartingPrice the itStartingPrice
     * @return float
     */
    public function setItStartingPrice($_itStartingPrice)
    {
        return ($this->itStartingPrice = $_itStartingPrice);
    }
    /**
     * Get itQuantity value
     * @return int|null
     */
    public function getItQuantity()
    {
        return $this->itQuantity;
    }
    /**
     * Set itQuantity value
     * @param int $_itQuantity the itQuantity
     * @return int
     */
    public function setItQuantity($_itQuantity)
    {
        return ($this->itQuantity = $_itQuantity);
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
     * Get itReservePrice value
     * @return float|null
     */
    public function getItReservePrice()
    {
        return $this->itReservePrice;
    }
    /**
     * Set itReservePrice value
     * @param float $_itReservePrice the itReservePrice
     * @return float
     */
    public function setItReservePrice($_itReservePrice)
    {
        return ($this->itReservePrice = $_itReservePrice);
    }
    /**
     * Get itLocation value
     * @return string|null
     */
    public function getItLocation()
    {
        return $this->itLocation;
    }
    /**
     * Set itLocation value
     * @param string $_itLocation the itLocation
     * @return string
     */
    public function setItLocation($_itLocation)
    {
        return ($this->itLocation = $_itLocation);
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
     * Get itBuyNowActive value
     * @return int|null
     */
    public function getItBuyNowActive()
    {
        return $this->itBuyNowActive;
    }
    /**
     * Set itBuyNowActive value
     * @param int $_itBuyNowActive the itBuyNowActive
     * @return int
     */
    public function setItBuyNowActive($_itBuyNowActive)
    {
        return ($this->itBuyNowActive = $_itBuyNowActive);
    }
    /**
     * Get itHighBidder value
     * @return int|null
     */
    public function getItHighBidder()
    {
        return $this->itHighBidder;
    }
    /**
     * Set itHighBidder value
     * @param int $_itHighBidder the itHighBidder
     * @return int
     */
    public function setItHighBidder($_itHighBidder)
    {
        return ($this->itHighBidder = $_itHighBidder);
    }
    /**
     * Get itHighBidderLogin value
     * @return string|null
     */
    public function getItHighBidderLogin()
    {
        return $this->itHighBidderLogin;
    }
    /**
     * Set itHighBidderLogin value
     * @param string $_itHighBidderLogin the itHighBidderLogin
     * @return string
     */
    public function setItHighBidderLogin($_itHighBidderLogin)
    {
        return ($this->itHighBidderLogin = $_itHighBidderLogin);
    }
    /**
     * Get itDescription value
     * @return string|null
     */
    public function getItDescription()
    {
        return $this->itDescription;
    }
    /**
     * Set itDescription value
     * @param string $_itDescription the itDescription
     * @return string
     */
    public function setItDescription($_itDescription)
    {
        return ($this->itDescription = $_itDescription);
    }
    /**
     * Get itOptions value
     * @return int|null
     */
    public function getItOptions()
    {
        return $this->itOptions;
    }
    /**
     * Set itOptions value
     * @param int $_itOptions the itOptions
     * @return int
     */
    public function setItOptions($_itOptions)
    {
        return ($this->itOptions = $_itOptions);
    }
    /**
     * Get itState value
     * @return int|null
     */
    public function getItState()
    {
        return $this->itState;
    }
    /**
     * Set itState value
     * @param int $_itState the itState
     * @return int
     */
    public function setItState($_itState)
    {
        return ($this->itState = $_itState);
    }
    /**
     * Get itWireTransfer value
     * @return float|null
     */
    public function getItWireTransfer()
    {
        return $this->itWireTransfer;
    }
    /**
     * Set itWireTransfer value
     * @param float $_itWireTransfer the itWireTransfer
     * @return float
     */
    public function setItWireTransfer($_itWireTransfer)
    {
        return ($this->itWireTransfer = $_itWireTransfer);
    }
    /**
     * Get itPostDelivery value
     * @return float|null
     */
    public function getItPostDelivery()
    {
        return $this->itPostDelivery;
    }
    /**
     * Set itPostDelivery value
     * @param float $_itPostDelivery the itPostDelivery
     * @return float
     */
    public function setItPostDelivery($_itPostDelivery)
    {
        return ($this->itPostDelivery = $_itPostDelivery);
    }
    /**
     * Get itPostInfo value
     * @return string|null
     */
    public function getItPostInfo()
    {
        return $this->itPostInfo;
    }
    /**
     * Set itPostInfo value
     * @param string $_itPostInfo the itPostInfo
     * @return string
     */
    public function setItPostInfo($_itPostInfo)
    {
        return ($this->itPostInfo = $_itPostInfo);
    }
    /**
     * Get itQuantityType value
     * @return int|null
     */
    public function getItQuantityType()
    {
        return $this->itQuantityType;
    }
    /**
     * Set itQuantityType value
     * @param int $_itQuantityType the itQuantityType
     * @return int
     */
    public function setItQuantityType($_itQuantityType)
    {
        return ($this->itQuantityType = $_itQuantityType);
    }
    /**
     * Get itIsEco value
     * @return int|null
     */
    public function getItIsEco()
    {
        return $this->itIsEco;
    }
    /**
     * Set itIsEco value
     * @param int $_itIsEco the itIsEco
     * @return int
     */
    public function setItIsEco($_itIsEco)
    {
        return ($this->itIsEco = $_itIsEco);
    }
    /**
     * Get itHitCount value
     * @return long|null
     */
    public function getItHitCount()
    {
        return $this->itHitCount;
    }
    /**
     * Set itHitCount value
     * @param long $_itHitCount the itHitCount
     * @return long
     */
    public function setItHitCount($_itHitCount)
    {
        return ($this->itHitCount = $_itHitCount);
    }
    /**
     * Get itPostcode value
     * @return string|null
     */
    public function getItPostcode()
    {
        return $this->itPostcode;
    }
    /**
     * Set itPostcode value
     * @param string $_itPostcode the itPostcode
     * @return string
     */
    public function setItPostcode($_itPostcode)
    {
        return ($this->itPostcode = $_itPostcode);
    }
    /**
     * Get itVatInvoice value
     * @return int|null
     */
    public function getItVatInvoice()
    {
        return $this->itVatInvoice;
    }
    /**
     * Set itVatInvoice value
     * @param int $_itVatInvoice the itVatInvoice
     * @return int
     */
    public function setItVatInvoice($_itVatInvoice)
    {
        return ($this->itVatInvoice = $_itVatInvoice);
    }
    /**
     * Get itBankAccount1 value
     * @return string|null
     */
    public function getItBankAccount1()
    {
        return $this->itBankAccount1;
    }
    /**
     * Set itBankAccount1 value
     * @param string $_itBankAccount1 the itBankAccount1
     * @return string
     */
    public function setItBankAccount1($_itBankAccount1)
    {
        return ($this->itBankAccount1 = $_itBankAccount1);
    }
    /**
     * Get itBankAccount2 value
     * @return string|null
     */
    public function getItBankAccount2()
    {
        return $this->itBankAccount2;
    }
    /**
     * Set itBankAccount2 value
     * @param string $_itBankAccount2 the itBankAccount2
     * @return string
     */
    public function setItBankAccount2($_itBankAccount2)
    {
        return ($this->itBankAccount2 = $_itBankAccount2);
    }
    /**
     * Get itStartingQuantity value
     * @return int|null
     */
    public function getItStartingQuantity()
    {
        return $this->itStartingQuantity;
    }
    /**
     * Set itStartingQuantity value
     * @param int $_itStartingQuantity the itStartingQuantity
     * @return int
     */
    public function setItStartingQuantity($_itStartingQuantity)
    {
        return ($this->itStartingQuantity = $_itStartingQuantity);
    }
    /**
     * Get itIsForGuests value
     * @return int|null
     */
    public function getItIsForGuests()
    {
        return $this->itIsForGuests;
    }
    /**
     * Set itIsForGuests value
     * @param int $_itIsForGuests the itIsForGuests
     * @return int
     */
    public function setItIsForGuests($_itIsForGuests)
    {
        return ($this->itIsForGuests = $_itIsForGuests);
    }
    /**
     * Get itHasProduct value
     * @return int|null
     */
    public function getItHasProduct()
    {
        return $this->itHasProduct;
    }
    /**
     * Set itHasProduct value
     * @param int $_itHasProduct the itHasProduct
     * @return int
     */
    public function setItHasProduct($_itHasProduct)
    {
        return ($this->itHasProduct = $_itHasProduct);
    }
    /**
     * Get itOrderFulfillmentTime value
     * @return int|null
     */
    public function getItOrderFulfillmentTime()
    {
        return $this->itOrderFulfillmentTime;
    }
    /**
     * Set itOrderFulfillmentTime value
     * @param int $_itOrderFulfillmentTime the itOrderFulfillmentTime
     * @return int
     */
    public function setItOrderFulfillmentTime($_itOrderFulfillmentTime)
    {
        return ($this->itOrderFulfillmentTime = $_itOrderFulfillmentTime);
    }
    /**
     * Get itEndingInfo value
     * @return int|null
     */
    public function getItEndingInfo()
    {
        return $this->itEndingInfo;
    }
    /**
     * Set itEndingInfo value
     * @param int $_itEndingInfo the itEndingInfo
     * @return int
     */
    public function setItEndingInfo($_itEndingInfo)
    {
        return ($this->itEndingInfo = $_itEndingInfo);
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
     * Get itIsNewUsed value
     * @return int|null
     */
    public function getItIsNewUsed()
    {
        return $this->itIsNewUsed;
    }
    /**
     * Set itIsNewUsed value
     * @param int $_itIsNewUsed the itIsNewUsed
     * @return int
     */
    public function setItIsNewUsed($_itIsNewUsed)
    {
        return ($this->itIsNewUsed = $_itIsNewUsed);
    }
    /**
     * Get itIsBrandZone value
     * @return int|null
     */
    public function getItIsBrandZone()
    {
        return $this->itIsBrandZone;
    }
    /**
     * Set itIsBrandZone value
     * @param int $_itIsBrandZone the itIsBrandZone
     * @return int
     */
    public function setItIsBrandZone($_itIsBrandZone)
    {
        return ($this->itIsBrandZone = $_itIsBrandZone);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructItemInfoExt
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
