<?php
/**
 * File for class AllegroStructRelatedItemStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructRelatedItemStruct originally named RelatedItemStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructRelatedItemStruct extends AllegroWsdlClass
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
     * The itemThumbnail
     * @var string
     */
    public $itemThumbnail;
    /**
     * The itemPrice
     * @var float
     */
    public $itemPrice;
    /**
     * The itemBoughtCount
     * @var int
     */
    public $itemBoughtCount;
    /**
     * The itemAmount
     * @var float
     */
    public $itemAmount;
    /**
     * The itemPaymentType
     * @var int
     */
    public $itemPaymentType;
    /**
     * The itemSellerId
     * @var long
     */
    public $itemSellerId;
    /**
     * The itemSellerName
     * @var string
     */
    public $itemSellerName;
    /**
     * The itemInvoiceInfo
     * @var int
     */
    public $itemInvoiceInfo;
    /**
     * The itemCategoryId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $itemCategoryId;
    /**
     * Constructor method for RelatedItemStruct
     * @see parent::__construct()
     * @param long $_itemId
     * @param string $_itemTitle
     * @param string $_itemThumbnail
     * @param float $_itemPrice
     * @param int $_itemBoughtCount
     * @param float $_itemAmount
     * @param int $_itemPaymentType
     * @param long $_itemSellerId
     * @param string $_itemSellerName
     * @param int $_itemInvoiceInfo
     * @param int $_itemCategoryId
     * @return AllegroStructRelatedItemStruct
     */
    public function __construct($_itemId = NULL,$_itemTitle = NULL,$_itemThumbnail = NULL,$_itemPrice = NULL,$_itemBoughtCount = NULL,$_itemAmount = NULL,$_itemPaymentType = NULL,$_itemSellerId = NULL,$_itemSellerName = NULL,$_itemInvoiceInfo = NULL,$_itemCategoryId = NULL)
    {
        parent::__construct(array('itemId'=>$_itemId,'itemTitle'=>$_itemTitle,'itemThumbnail'=>$_itemThumbnail,'itemPrice'=>$_itemPrice,'itemBoughtCount'=>$_itemBoughtCount,'itemAmount'=>$_itemAmount,'itemPaymentType'=>$_itemPaymentType,'itemSellerId'=>$_itemSellerId,'itemSellerName'=>$_itemSellerName,'itemInvoiceInfo'=>$_itemInvoiceInfo,'itemCategoryId'=>$_itemCategoryId),false);
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
     * Get itemThumbnail value
     * @return string|null
     */
    public function getItemThumbnail()
    {
        return $this->itemThumbnail;
    }
    /**
     * Set itemThumbnail value
     * @param string $_itemThumbnail the itemThumbnail
     * @return string
     */
    public function setItemThumbnail($_itemThumbnail)
    {
        return ($this->itemThumbnail = $_itemThumbnail);
    }
    /**
     * Get itemPrice value
     * @return float|null
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }
    /**
     * Set itemPrice value
     * @param float $_itemPrice the itemPrice
     * @return float
     */
    public function setItemPrice($_itemPrice)
    {
        return ($this->itemPrice = $_itemPrice);
    }
    /**
     * Get itemBoughtCount value
     * @return int|null
     */
    public function getItemBoughtCount()
    {
        return $this->itemBoughtCount;
    }
    /**
     * Set itemBoughtCount value
     * @param int $_itemBoughtCount the itemBoughtCount
     * @return int
     */
    public function setItemBoughtCount($_itemBoughtCount)
    {
        return ($this->itemBoughtCount = $_itemBoughtCount);
    }
    /**
     * Get itemAmount value
     * @return float|null
     */
    public function getItemAmount()
    {
        return $this->itemAmount;
    }
    /**
     * Set itemAmount value
     * @param float $_itemAmount the itemAmount
     * @return float
     */
    public function setItemAmount($_itemAmount)
    {
        return ($this->itemAmount = $_itemAmount);
    }
    /**
     * Get itemPaymentType value
     * @return int|null
     */
    public function getItemPaymentType()
    {
        return $this->itemPaymentType;
    }
    /**
     * Set itemPaymentType value
     * @param int $_itemPaymentType the itemPaymentType
     * @return int
     */
    public function setItemPaymentType($_itemPaymentType)
    {
        return ($this->itemPaymentType = $_itemPaymentType);
    }
    /**
     * Get itemSellerId value
     * @return long|null
     */
    public function getItemSellerId()
    {
        return $this->itemSellerId;
    }
    /**
     * Set itemSellerId value
     * @param long $_itemSellerId the itemSellerId
     * @return long
     */
    public function setItemSellerId($_itemSellerId)
    {
        return ($this->itemSellerId = $_itemSellerId);
    }
    /**
     * Get itemSellerName value
     * @return string|null
     */
    public function getItemSellerName()
    {
        return $this->itemSellerName;
    }
    /**
     * Set itemSellerName value
     * @param string $_itemSellerName the itemSellerName
     * @return string
     */
    public function setItemSellerName($_itemSellerName)
    {
        return ($this->itemSellerName = $_itemSellerName);
    }
    /**
     * Get itemInvoiceInfo value
     * @return int|null
     */
    public function getItemInvoiceInfo()
    {
        return $this->itemInvoiceInfo;
    }
    /**
     * Set itemInvoiceInfo value
     * @param int $_itemInvoiceInfo the itemInvoiceInfo
     * @return int
     */
    public function setItemInvoiceInfo($_itemInvoiceInfo)
    {
        return ($this->itemInvoiceInfo = $_itemInvoiceInfo);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructRelatedItemStruct
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
