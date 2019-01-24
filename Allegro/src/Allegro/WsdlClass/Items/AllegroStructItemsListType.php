<?php
/**
 * File for class AllegroStructItemsListType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructItemsListType originally named ItemsListType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructItemsListType extends AllegroWsdlClass
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
     * The leftCount
     * @var int
     */
    public $leftCount;
    /**
     * The bidsCount
     * @var int
     */
    public $bidsCount;
    /**
     * The biddersCount
     * @var int
     */
    public $biddersCount;
    /**
     * The quantityType
     * @var string
     */
    public $quantityType;
    /**
     * The endingTime
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $endingTime;
    /**
     * The timeToEnd
     * @var string
     */
    public $timeToEnd;
    /**
     * The categoryId
     * @var int
     */
    public $categoryId;
    /**
     * The conditionInfo
     * @var string
     */
    public $conditionInfo;
    /**
     * The promotionInfo
     * @var int
     */
    public $promotionInfo;
    /**
     * The additionalInfo
     * @var int
     */
    public $additionalInfo;
    /**
     * The sellerInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructUserInfoType
     */
    public $sellerInfo;
    /**
     * The priceInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfPriceinfotype
     */
    public $priceInfo;
    /**
     * The photosInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfPhotoinfotype
     */
    public $photosInfo;
    /**
     * The parametersInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfParameterinfotype
     */
    public $parametersInfo;
    /**
     * The advertInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructAdvertInfoType
     */
    public $advertInfo;
    /**
     * Constructor method for ItemsListType
     * @see parent::__construct()
     * @param long $_itemId
     * @param string $_itemTitle
     * @param int $_leftCount
     * @param int $_bidsCount
     * @param int $_biddersCount
     * @param string $_quantityType
     * @param dateTime $_endingTime
     * @param string $_timeToEnd
     * @param int $_categoryId
     * @param string $_conditionInfo
     * @param int $_promotionInfo
     * @param int $_additionalInfo
     * @param AllegroStructUserInfoType $_sellerInfo
     * @param AllegroStructArrayOfPriceinfotype $_priceInfo
     * @param AllegroStructArrayOfPhotoinfotype $_photosInfo
     * @param AllegroStructArrayOfParameterinfotype $_parametersInfo
     * @param AllegroStructAdvertInfoType $_advertInfo
     * @return AllegroStructItemsListType
     */
    public function __construct($_itemId = NULL,$_itemTitle = NULL,$_leftCount = NULL,$_bidsCount = NULL,$_biddersCount = NULL,$_quantityType = NULL,$_endingTime = NULL,$_timeToEnd = NULL,$_categoryId = NULL,$_conditionInfo = NULL,$_promotionInfo = NULL,$_additionalInfo = NULL,$_sellerInfo = NULL,$_priceInfo = NULL,$_photosInfo = NULL,$_parametersInfo = NULL,$_advertInfo = NULL)
    {
        parent::__construct(array('itemId'=>$_itemId,'itemTitle'=>$_itemTitle,'leftCount'=>$_leftCount,'bidsCount'=>$_bidsCount,'biddersCount'=>$_biddersCount,'quantityType'=>$_quantityType,'endingTime'=>$_endingTime,'timeToEnd'=>$_timeToEnd,'categoryId'=>$_categoryId,'conditionInfo'=>$_conditionInfo,'promotionInfo'=>$_promotionInfo,'additionalInfo'=>$_additionalInfo,'sellerInfo'=>$_sellerInfo,'priceInfo'=>($_priceInfo instanceof AllegroStructArrayOfPriceinfotype)?$_priceInfo:new AllegroStructArrayOfPriceinfotype($_priceInfo),'photosInfo'=>($_photosInfo instanceof AllegroStructArrayOfPhotoinfotype)?$_photosInfo:new AllegroStructArrayOfPhotoinfotype($_photosInfo),'parametersInfo'=>($_parametersInfo instanceof AllegroStructArrayOfParameterinfotype)?$_parametersInfo:new AllegroStructArrayOfParameterinfotype($_parametersInfo),'advertInfo'=>$_advertInfo),false);
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
     * Get leftCount value
     * @return int|null
     */
    public function getLeftCount()
    {
        return $this->leftCount;
    }
    /**
     * Set leftCount value
     * @param int $_leftCount the leftCount
     * @return int
     */
    public function setLeftCount($_leftCount)
    {
        return ($this->leftCount = $_leftCount);
    }
    /**
     * Get bidsCount value
     * @return int|null
     */
    public function getBidsCount()
    {
        return $this->bidsCount;
    }
    /**
     * Set bidsCount value
     * @param int $_bidsCount the bidsCount
     * @return int
     */
    public function setBidsCount($_bidsCount)
    {
        return ($this->bidsCount = $_bidsCount);
    }
    /**
     * Get biddersCount value
     * @return int|null
     */
    public function getBiddersCount()
    {
        return $this->biddersCount;
    }
    /**
     * Set biddersCount value
     * @param int $_biddersCount the biddersCount
     * @return int
     */
    public function setBiddersCount($_biddersCount)
    {
        return ($this->biddersCount = $_biddersCount);
    }
    /**
     * Get quantityType value
     * @return string|null
     */
    public function getQuantityType()
    {
        return $this->quantityType;
    }
    /**
     * Set quantityType value
     * @param string $_quantityType the quantityType
     * @return string
     */
    public function setQuantityType($_quantityType)
    {
        return ($this->quantityType = $_quantityType);
    }
    /**
     * Get endingTime value
     * @return dateTime|null
     */
    public function getEndingTime()
    {
        return $this->endingTime;
    }
    /**
     * Set endingTime value
     * @param dateTime $_endingTime the endingTime
     * @return dateTime
     */
    public function setEndingTime($_endingTime)
    {
        return ($this->endingTime = $_endingTime);
    }
    /**
     * Get timeToEnd value
     * @return string|null
     */
    public function getTimeToEnd()
    {
        return $this->timeToEnd;
    }
    /**
     * Set timeToEnd value
     * @param string $_timeToEnd the timeToEnd
     * @return string
     */
    public function setTimeToEnd($_timeToEnd)
    {
        return ($this->timeToEnd = $_timeToEnd);
    }
    /**
     * Get categoryId value
     * @return int|null
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
    /**
     * Set categoryId value
     * @param int $_categoryId the categoryId
     * @return int
     */
    public function setCategoryId($_categoryId)
    {
        return ($this->categoryId = $_categoryId);
    }
    /**
     * Get conditionInfo value
     * @return string|null
     */
    public function getConditionInfo()
    {
        return $this->conditionInfo;
    }
    /**
     * Set conditionInfo value
     * @param string $_conditionInfo the conditionInfo
     * @return string
     */
    public function setConditionInfo($_conditionInfo)
    {
        return ($this->conditionInfo = $_conditionInfo);
    }
    /**
     * Get promotionInfo value
     * @return int|null
     */
    public function getPromotionInfo()
    {
        return $this->promotionInfo;
    }
    /**
     * Set promotionInfo value
     * @param int $_promotionInfo the promotionInfo
     * @return int
     */
    public function setPromotionInfo($_promotionInfo)
    {
        return ($this->promotionInfo = $_promotionInfo);
    }
    /**
     * Get additionalInfo value
     * @return int|null
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }
    /**
     * Set additionalInfo value
     * @param int $_additionalInfo the additionalInfo
     * @return int
     */
    public function setAdditionalInfo($_additionalInfo)
    {
        return ($this->additionalInfo = $_additionalInfo);
    }
    /**
     * Get sellerInfo value
     * @return AllegroStructUserInfoType|null
     */
    public function getSellerInfo()
    {
        return $this->sellerInfo;
    }
    /**
     * Set sellerInfo value
     * @param AllegroStructUserInfoType $_sellerInfo the sellerInfo
     * @return AllegroStructUserInfoType
     */
    public function setSellerInfo($_sellerInfo)
    {
        return ($this->sellerInfo = $_sellerInfo);
    }
    /**
     * Get priceInfo value
     * @return AllegroStructArrayOfPriceinfotype|null
     */
    public function getPriceInfo()
    {
        return $this->priceInfo;
    }
    /**
     * Set priceInfo value
     * @param AllegroStructArrayOfPriceinfotype $_priceInfo the priceInfo
     * @return AllegroStructArrayOfPriceinfotype
     */
    public function setPriceInfo($_priceInfo)
    {
        return ($this->priceInfo = $_priceInfo);
    }
    /**
     * Get photosInfo value
     * @return AllegroStructArrayOfPhotoinfotype|null
     */
    public function getPhotosInfo()
    {
        return $this->photosInfo;
    }
    /**
     * Set photosInfo value
     * @param AllegroStructArrayOfPhotoinfotype $_photosInfo the photosInfo
     * @return AllegroStructArrayOfPhotoinfotype
     */
    public function setPhotosInfo($_photosInfo)
    {
        return ($this->photosInfo = $_photosInfo);
    }
    /**
     * Get parametersInfo value
     * @return AllegroStructArrayOfParameterinfotype|null
     */
    public function getParametersInfo()
    {
        return $this->parametersInfo;
    }
    /**
     * Set parametersInfo value
     * @param AllegroStructArrayOfParameterinfotype $_parametersInfo the parametersInfo
     * @return AllegroStructArrayOfParameterinfotype
     */
    public function setParametersInfo($_parametersInfo)
    {
        return ($this->parametersInfo = $_parametersInfo);
    }
    /**
     * Get advertInfo value
     * @return AllegroStructAdvertInfoType|null
     */
    public function getAdvertInfo()
    {
        return $this->advertInfo;
    }
    /**
     * Set advertInfo value
     * @param AllegroStructAdvertInfoType $_advertInfo the advertInfo
     * @return AllegroStructAdvertInfoType
     */
    public function setAdvertInfo($_advertInfo)
    {
        return ($this->advertInfo = $_advertInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructItemsListType
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
