<?php
/**
 * File for class AllegroStructWatchedItemStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructWatchedItemStruct originally named WatchedItemStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructWatchedItemStruct extends AllegroWsdlClass
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
     * The itemLeftQuantity
     * @var int
     */
    public $itemLeftQuantity;
    /**
     * The itemQuantityType
     * @var int
     */
    public $itemQuantityType;
    /**
     * The itemEndTime
     * @var long
     */
    public $itemEndTime;
    /**
     * The itemSeller
     * @var AllegroStructUserInfoStruct
     */
    public $itemSeller;
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
     * Constructor method for WatchedItemStruct
     * @see parent::__construct()
     * @param long $_itemId
     * @param string $_itemTitle
     * @param string $_itemThumbnailUrl
     * @param AllegroStructArrayOfItempricestruct $_itemPrice
     * @param int $_itemLeftQuantity
     * @param int $_itemQuantityType
     * @param long $_itemEndTime
     * @param AllegroStructUserInfoStruct $_itemSeller
     * @param int $_itemBiddersCounter
     * @param AllegroStructUserInfoStruct $_itemHighestBidder
     * @param int $_itemCategoryId
     * @param int $_itemViewsCounter
     * @param string $_itemNote
     * @param int $_itemSpecialInfo
     * @param int $_itemShopInfo
     * @param long $_itemProductInfo
     * @param int $_itemPayuInfo
     * @return AllegroStructWatchedItemStruct
     */
    public function __construct($_itemId = NULL,$_itemTitle = NULL,$_itemThumbnailUrl = NULL,$_itemPrice = NULL,$_itemLeftQuantity = NULL,$_itemQuantityType = NULL,$_itemEndTime = NULL,$_itemSeller = NULL,$_itemBiddersCounter = NULL,$_itemHighestBidder = NULL,$_itemCategoryId = NULL,$_itemViewsCounter = NULL,$_itemNote = NULL,$_itemSpecialInfo = NULL,$_itemShopInfo = NULL,$_itemProductInfo = NULL,$_itemPayuInfo = NULL)
    {
        parent::__construct(array('itemId'=>$_itemId,'itemTitle'=>$_itemTitle,'itemThumbnailUrl'=>$_itemThumbnailUrl,'itemPrice'=>($_itemPrice instanceof AllegroStructArrayOfItempricestruct)?$_itemPrice:new AllegroStructArrayOfItempricestruct($_itemPrice),'itemLeftQuantity'=>$_itemLeftQuantity,'itemQuantityType'=>$_itemQuantityType,'itemEndTime'=>$_itemEndTime,'itemSeller'=>$_itemSeller,'itemBiddersCounter'=>$_itemBiddersCounter,'itemHighestBidder'=>$_itemHighestBidder,'itemCategoryId'=>$_itemCategoryId,'itemViewsCounter'=>$_itemViewsCounter,'itemNote'=>$_itemNote,'itemSpecialInfo'=>$_itemSpecialInfo,'itemShopInfo'=>$_itemShopInfo,'itemProductInfo'=>$_itemProductInfo,'itemPayuInfo'=>$_itemPayuInfo),false);
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
     * Get itemLeftQuantity value
     * @return int|null
     */
    public function getItemLeftQuantity()
    {
        return $this->itemLeftQuantity;
    }
    /**
     * Set itemLeftQuantity value
     * @param int $_itemLeftQuantity the itemLeftQuantity
     * @return int
     */
    public function setItemLeftQuantity($_itemLeftQuantity)
    {
        return ($this->itemLeftQuantity = $_itemLeftQuantity);
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
     * Get itemSeller value
     * @return AllegroStructUserInfoStruct|null
     */
    public function getItemSeller()
    {
        return $this->itemSeller;
    }
    /**
     * Set itemSeller value
     * @param AllegroStructUserInfoStruct $_itemSeller the itemSeller
     * @return AllegroStructUserInfoStruct
     */
    public function setItemSeller($_itemSeller)
    {
        return ($this->itemSeller = $_itemSeller);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructWatchedItemStruct
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
