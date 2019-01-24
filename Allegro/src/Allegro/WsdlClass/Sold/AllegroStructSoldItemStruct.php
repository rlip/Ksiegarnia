<?php
/**
 * File for class AllegroStructSoldItemStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSoldItemStruct originally named SoldItemStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSoldItemStruct extends AllegroWsdlClass
{
    /**
     * The itemId
     * @var long
     */
    public $itemId;
    /**
     * The itemTitle
     * @var string
     */
    public $itemTitle;
    /**
     * The itemThumbnailUrl
     * @var string
     */
    public $itemThumbnailUrl;
    /**
     * The itemPrice
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfItempricestruct
     */
    public $itemPrice;
    /**
     * The itemStartQuantity
     * @var int
     */
    public $itemStartQuantity;
    /**
     * The itemSoldQuantity
     * @var int
     */
    public $itemSoldQuantity;
    /**
     * The itemQuantityType
     * @var int
     */
    public $itemQuantityType;
    /**
     * The itemStartTime
     * @var long
     */
    public $itemStartTime;
    /**
     * The itemEndTime
     * @var long
     */
    public $itemEndTime;
    /**
     * The itemEndTimeLeft
     * @var string
     */
    public $itemEndTimeLeft;
    /**
     * The itemBiddersCounter
     * @var int
     */
    public $itemBiddersCounter;
    /**
     * The itemHighestBidder
     * @var AllegroStructUserInfoStruct
     */
    public $itemHighestBidder;
    /**
     * The itemCategoryId
     * @var int
     */
    public $itemCategoryId;
    /**
     * The itemWatchersCounter
     * @var int
     */
    public $itemWatchersCounter;
    /**
     * The itemViewsCounter
     * @var int
     */
    public $itemViewsCounter;
    /**
     * The itemNote
     * @var string
     */
    public $itemNote;
    /**
     * The itemSpecialInfo
     * @var int
     */
    public $itemSpecialInfo;
    /**
     * The itemShopInfo
     * @var int
     */
    public $itemShopInfo;
    /**
     * The itemProductInfo
     * @var long
     */
    public $itemProductInfo;
    /**
     * The itemPayuInfo
     * @var int
     */
    public $itemPayuInfo;
    /**
     * The itemDurationInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructDurationInfoStruct
     */
    public $itemDurationInfo;
    /**
     * Constructor method for SoldItemStruct
     * @see parent::__construct()
     * @param long $_itemId
     * @param string $_itemTitle
     * @param string $_itemThumbnailUrl
     * @param AllegroStructArrayOfItempricestruct $_itemPrice
     * @param int $_itemStartQuantity
     * @param int $_itemSoldQuantity
     * @param int $_itemQuantityType
     * @param long $_itemStartTime
     * @param long $_itemEndTime
     * @param string $_itemEndTimeLeft
     * @param int $_itemBiddersCounter
     * @param AllegroStructUserInfoStruct $_itemHighestBidder
     * @param int $_itemCategoryId
     * @param int $_itemWatchersCounter
     * @param int $_itemViewsCounter
     * @param string $_itemNote
     * @param int $_itemSpecialInfo
     * @param int $_itemShopInfo
     * @param long $_itemProductInfo
     * @param int $_itemPayuInfo
     * @param AllegroStructDurationInfoStruct $_itemDurationInfo
     * @return AllegroStructSoldItemStruct
     */
    public function __construct($_itemId = NULL,$_itemTitle = NULL,$_itemThumbnailUrl = NULL,$_itemPrice = NULL,$_itemStartQuantity = NULL,$_itemSoldQuantity = NULL,$_itemQuantityType = NULL,$_itemStartTime = NULL,$_itemEndTime = NULL,$_itemEndTimeLeft = NULL,$_itemBiddersCounter = NULL,$_itemHighestBidder = NULL,$_itemCategoryId = NULL,$_itemWatchersCounter = NULL,$_itemViewsCounter = NULL,$_itemNote = NULL,$_itemSpecialInfo = NULL,$_itemShopInfo = NULL,$_itemProductInfo = NULL,$_itemPayuInfo = NULL,$_itemDurationInfo = NULL)
    {
        parent::__construct(array('itemId'=>$_itemId,'itemTitle'=>$_itemTitle,'itemThumbnailUrl'=>$_itemThumbnailUrl,'itemPrice'=>($_itemPrice instanceof AllegroStructArrayOfItempricestruct)?$_itemPrice:new AllegroStructArrayOfItempricestruct($_itemPrice),'itemStartQuantity'=>$_itemStartQuantity,'itemSoldQuantity'=>$_itemSoldQuantity,'itemQuantityType'=>$_itemQuantityType,'itemStartTime'=>$_itemStartTime,'itemEndTime'=>$_itemEndTime,'itemEndTimeLeft'=>$_itemEndTimeLeft,'itemBiddersCounter'=>$_itemBiddersCounter,'itemHighestBidder'=>$_itemHighestBidder,'itemCategoryId'=>$_itemCategoryId,'itemWatchersCounter'=>$_itemWatchersCounter,'itemViewsCounter'=>$_itemViewsCounter,'itemNote'=>$_itemNote,'itemSpecialInfo'=>$_itemSpecialInfo,'itemShopInfo'=>$_itemShopInfo,'itemProductInfo'=>$_itemProductInfo,'itemPayuInfo'=>$_itemPayuInfo,'itemDurationInfo'=>$_itemDurationInfo),false);
    }
    /**
     * Get itemId value
     * @return long|null
     */
    public function getItemId()
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param long $_itemId the itemId
     * @return long
     */
    public function setItemId($_itemId)
    {
        return ($this->itemId = $_itemId);
    }
    /**
     * Get itemTitle value
     * @return string|null
     */
    public function getItemTitle()
    {
        return $this->itemTitle;
    }
    /**
     * Set itemTitle value
     * @param string $_itemTitle the itemTitle
     * @return string
     */
    public function setItemTitle($_itemTitle)
    {
        return ($this->itemTitle = $_itemTitle);
    }
    /**
     * Get itemThumbnailUrl value
     * @return string|null
     */
    public function getItemThumbnailUrl()
    {
        return $this->itemThumbnailUrl;
    }
    /**
     * Set itemThumbnailUrl value
     * @param string $_itemThumbnailUrl the itemThumbnailUrl
     * @return string
     */
    public function setItemThumbnailUrl($_itemThumbnailUrl)
    {
        return ($this->itemThumbnailUrl = $_itemThumbnailUrl);
    }
    /**
     * Get itemPrice value
     * @return AllegroStructArrayOfItempricestruct|null
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }
    /**
     * Set itemPrice value
     * @param AllegroStructArrayOfItempricestruct $_itemPrice the itemPrice
     * @return AllegroStructArrayOfItempricestruct
     */
    public function setItemPrice($_itemPrice)
    {
        return ($this->itemPrice = $_itemPrice);
    }
    /**
     * Get itemStartQuantity value
     * @return int|null
     */
    public function getItemStartQuantity()
    {
        return $this->itemStartQuantity;
    }
    /**
     * Set itemStartQuantity value
     * @param int $_itemStartQuantity the itemStartQuantity
     * @return int
     */
    public function setItemStartQuantity($_itemStartQuantity)
    {
        return ($this->itemStartQuantity = $_itemStartQuantity);
    }
    /**
     * Get itemSoldQuantity value
     * @return int|null
     */
    public function getItemSoldQuantity()
    {
        return $this->itemSoldQuantity;
    }
    /**
     * Set itemSoldQuantity value
     * @param int $_itemSoldQuantity the itemSoldQuantity
     * @return int
     */
    public function setItemSoldQuantity($_itemSoldQuantity)
    {
        return ($this->itemSoldQuantity = $_itemSoldQuantity);
    }
    /**
     * Get itemQuantityType value
     * @return int|null
     */
    public function getItemQuantityType()
    {
        return $this->itemQuantityType;
    }
    /**
     * Set itemQuantityType value
     * @param int $_itemQuantityType the itemQuantityType
     * @return int
     */
    public function setItemQuantityType($_itemQuantityType)
    {
        return ($this->itemQuantityType = $_itemQuantityType);
    }
    /**
     * Get itemStartTime value
     * @return long|null
     */
    public function getItemStartTime()
    {
        return $this->itemStartTime;
    }
    /**
     * Set itemStartTime value
     * @param long $_itemStartTime the itemStartTime
     * @return long
     */
    public function setItemStartTime($_itemStartTime)
    {
        return ($this->itemStartTime = $_itemStartTime);
    }
    /**
     * Get itemEndTime value
     * @return long|null
     */
    public function getItemEndTime()
    {
        return $this->itemEndTime;
    }
    /**
     * Set itemEndTime value
     * @param long $_itemEndTime the itemEndTime
     * @return long
     */
    public function setItemEndTime($_itemEndTime)
    {
        return ($this->itemEndTime = $_itemEndTime);
    }
    /**
     * Get itemEndTimeLeft value
     * @return string|null
     */
    public function getItemEndTimeLeft()
    {
        return $this->itemEndTimeLeft;
    }
    /**
     * Set itemEndTimeLeft value
     * @param string $_itemEndTimeLeft the itemEndTimeLeft
     * @return string
     */
    public function setItemEndTimeLeft($_itemEndTimeLeft)
    {
        return ($this->itemEndTimeLeft = $_itemEndTimeLeft);
    }
    /**
     * Get itemBiddersCounter value
     * @return int|null
     */
    public function getItemBiddersCounter()
    {
        return $this->itemBiddersCounter;
    }
    /**
     * Set itemBiddersCounter value
     * @param int $_itemBiddersCounter the itemBiddersCounter
     * @return int
     */
    public function setItemBiddersCounter($_itemBiddersCounter)
    {
        return ($this->itemBiddersCounter = $_itemBiddersCounter);
    }
    /**
     * Get itemHighestBidder value
     * @return AllegroStructUserInfoStruct|null
     */
    public function getItemHighestBidder()
    {
        return $this->itemHighestBidder;
    }
    /**
     * Set itemHighestBidder value
     * @param AllegroStructUserInfoStruct $_itemHighestBidder the itemHighestBidder
     * @return AllegroStructUserInfoStruct
     */
    public function setItemHighestBidder($_itemHighestBidder)
    {
        return ($this->itemHighestBidder = $_itemHighestBidder);
    }
    /**
     * Get itemCategoryId value
     * @return int|null
     */
    public function getItemCategoryId()
    {
        return $this->itemCategoryId;
    }
    /**
     * Set itemCategoryId value
     * @param int $_itemCategoryId the itemCategoryId
     * @return int
     */
    public function setItemCategoryId($_itemCategoryId)
    {
        return ($this->itemCategoryId = $_itemCategoryId);
    }
    /**
     * Get itemWatchersCounter value
     * @return int|null
     */
    public function getItemWatchersCounter()
    {
        return $this->itemWatchersCounter;
    }
    /**
     * Set itemWatchersCounter value
     * @param int $_itemWatchersCounter the itemWatchersCounter
     * @return int
     */
    public function setItemWatchersCounter($_itemWatchersCounter)
    {
        return ($this->itemWatchersCounter = $_itemWatchersCounter);
    }
    /**
     * Get itemViewsCounter value
     * @return int|null
     */
    public function getItemViewsCounter()
    {
        return $this->itemViewsCounter;
    }
    /**
     * Set itemViewsCounter value
     * @param int $_itemViewsCounter the itemViewsCounter
     * @return int
     */
    public function setItemViewsCounter($_itemViewsCounter)
    {
        return ($this->itemViewsCounter = $_itemViewsCounter);
    }
    /**
     * Get itemNote value
     * @return string|null
     */
    public function getItemNote()
    {
        return $this->itemNote;
    }
    /**
     * Set itemNote value
     * @param string $_itemNote the itemNote
     * @return string
     */
    public function setItemNote($_itemNote)
    {
        return ($this->itemNote = $_itemNote);
    }
    /**
     * Get itemSpecialInfo value
     * @return int|null
     */
    public function getItemSpecialInfo()
    {
        return $this->itemSpecialInfo;
    }
    /**
     * Set itemSpecialInfo value
     * @param int $_itemSpecialInfo the itemSpecialInfo
     * @return int
     */
    public function setItemSpecialInfo($_itemSpecialInfo)
    {
        return ($this->itemSpecialInfo = $_itemSpecialInfo);
    }
    /**
     * Get itemShopInfo value
     * @return int|null
     */
    public function getItemShopInfo()
    {
        return $this->itemShopInfo;
    }
    /**
     * Set itemShopInfo value
     * @param int $_itemShopInfo the itemShopInfo
     * @return int
     */
    public function setItemShopInfo($_itemShopInfo)
    {
        return ($this->itemShopInfo = $_itemShopInfo);
    }
    /**
     * Get itemProductInfo value
     * @return long|null
     */
    public function getItemProductInfo()
    {
        return $this->itemProductInfo;
    }
    /**
     * Set itemProductInfo value
     * @param long $_itemProductInfo the itemProductInfo
     * @return long
     */
    public function setItemProductInfo($_itemProductInfo)
    {
        return ($this->itemProductInfo = $_itemProductInfo);
    }
    /**
     * Get itemPayuInfo value
     * @return int|null
     */
    public function getItemPayuInfo()
    {
        return $this->itemPayuInfo;
    }
    /**
     * Set itemPayuInfo value
     * @param int $_itemPayuInfo the itemPayuInfo
     * @return int
     */
    public function setItemPayuInfo($_itemPayuInfo)
    {
        return ($this->itemPayuInfo = $_itemPayuInfo);
    }
    /**
     * Get itemDurationInfo value
     * @return AllegroStructDurationInfoStruct|null
     */
    public function getItemDurationInfo()
    {
        return $this->itemDurationInfo;
    }
    /**
     * Set itemDurationInfo value
     * @param AllegroStructDurationInfoStruct $_itemDurationInfo the itemDurationInfo
     * @return AllegroStructDurationInfoStruct
     */
    public function setItemDurationInfo($_itemDurationInfo)
    {
        return ($this->itemDurationInfo = $_itemDurationInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSoldItemStruct
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
