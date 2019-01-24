<?php
/**
 * File for class AllegroStructFutureItemStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructFutureItemStruct originally named FutureItemStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructFutureItemStruct extends AllegroWsdlClass
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
     * The itemCategoryId
     * @var int
     */
    public $itemCategoryId;
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
     * The itemStatus
     * @var int
     */
    public $itemStatus;
    /**
     * Constructor method for FutureItemStruct
     * @see parent::__construct()
     * @param long $_itemId
     * @param string $_itemTitle
     * @param string $_itemThumbnailUrl
     * @param AllegroStructArrayOfItempricestruct $_itemPrice
     * @param int $_itemStartQuantity
     * @param int $_itemQuantityType
     * @param long $_itemStartTime
     * @param int $_itemCategoryId
     * @param string $_itemNote
     * @param int $_itemSpecialInfo
     * @param int $_itemShopInfo
     * @param long $_itemProductInfo
     * @param int $_itemPayuInfo
     * @param int $_itemStatus
     * @return AllegroStructFutureItemStruct
     */
    public function __construct($_itemId = NULL,$_itemTitle = NULL,$_itemThumbnailUrl = NULL,$_itemPrice = NULL,$_itemStartQuantity = NULL,$_itemQuantityType = NULL,$_itemStartTime = NULL,$_itemCategoryId = NULL,$_itemNote = NULL,$_itemSpecialInfo = NULL,$_itemShopInfo = NULL,$_itemProductInfo = NULL,$_itemPayuInfo = NULL,$_itemStatus = NULL)
    {
        parent::__construct(array('itemId'=>$_itemId,'itemTitle'=>$_itemTitle,'itemThumbnailUrl'=>$_itemThumbnailUrl,'itemPrice'=>($_itemPrice instanceof AllegroStructArrayOfItempricestruct)?$_itemPrice:new AllegroStructArrayOfItempricestruct($_itemPrice),'itemStartQuantity'=>$_itemStartQuantity,'itemQuantityType'=>$_itemQuantityType,'itemStartTime'=>$_itemStartTime,'itemCategoryId'=>$_itemCategoryId,'itemNote'=>$_itemNote,'itemSpecialInfo'=>$_itemSpecialInfo,'itemShopInfo'=>$_itemShopInfo,'itemProductInfo'=>$_itemProductInfo,'itemPayuInfo'=>$_itemPayuInfo,'itemStatus'=>$_itemStatus),false);
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
     * Get itemStatus value
     * @return int|null
     */
    public function getItemStatus()
    {
        return $this->itemStatus;
    }
    /**
     * Set itemStatus value
     * @param int $_itemStatus the itemStatus
     * @return int
     */
    public function setItemStatus($_itemStatus)
    {
        return ($this->itemStatus = $_itemStatus);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructFutureItemStruct
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
