<?php
/**
 * File for class AllegroStructItemInfoStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructItemInfoStruct originally named ItemInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructItemInfoStruct extends AllegroWsdlClass
{
    /**
     * The itemInfo
     * @var AllegroStructItemInfo
     */
    public $itemInfo;
    /**
     * The itemCats
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfItemcatlist
     */
    public $itemCats;
    /**
     * The itemImages
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfItemimagelist
     */
    public $itemImages;
    /**
     * The itemAttribs
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfAttribstruct
     */
    public $itemAttribs;
    /**
     * The itemPostageOptions
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfPostagestruct
     */
    public $itemPostageOptions;
    /**
     * The itemPaymentOptions
     * @var AllegroStructItemPaymentOptions
     */
    public $itemPaymentOptions;
    /**
     * The itemCompanyInfo
     * @var AllegroStructCompanyInfoStruct
     */
    public $itemCompanyInfo;
    /**
     * The itemProductInfo
     * @var AllegroStructProductStruct
     */
    public $itemProductInfo;
    /**
     * Constructor method for ItemInfoStruct
     * @see parent::__construct()
     * @param AllegroStructItemInfo $_itemInfo
     * @param AllegroStructArrayOfItemcatlist $_itemCats
     * @param AllegroStructArrayOfItemimagelist $_itemImages
     * @param AllegroStructArrayOfAttribstruct $_itemAttribs
     * @param AllegroStructArrayOfPostagestruct $_itemPostageOptions
     * @param AllegroStructItemPaymentOptions $_itemPaymentOptions
     * @param AllegroStructCompanyInfoStruct $_itemCompanyInfo
     * @param AllegroStructProductStruct $_itemProductInfo
     * @return AllegroStructItemInfoStruct
     */
    public function __construct($_itemInfo = NULL,$_itemCats = NULL,$_itemImages = NULL,$_itemAttribs = NULL,$_itemPostageOptions = NULL,$_itemPaymentOptions = NULL,$_itemCompanyInfo = NULL,$_itemProductInfo = NULL)
    {
        parent::__construct(array('itemInfo'=>$_itemInfo,'itemCats'=>($_itemCats instanceof AllegroStructArrayOfItemcatlist)?$_itemCats:new AllegroStructArrayOfItemcatlist($_itemCats),'itemImages'=>($_itemImages instanceof AllegroStructArrayOfItemimagelist)?$_itemImages:new AllegroStructArrayOfItemimagelist($_itemImages),'itemAttribs'=>($_itemAttribs instanceof AllegroStructArrayOfAttribstruct)?$_itemAttribs:new AllegroStructArrayOfAttribstruct($_itemAttribs),'itemPostageOptions'=>($_itemPostageOptions instanceof AllegroStructArrayOfPostagestruct)?$_itemPostageOptions:new AllegroStructArrayOfPostagestruct($_itemPostageOptions),'itemPaymentOptions'=>$_itemPaymentOptions,'itemCompanyInfo'=>$_itemCompanyInfo,'itemProductInfo'=>$_itemProductInfo),false);
    }
    /**
     * Get itemInfo value
     * @return AllegroStructItemInfo|null
     */
    public function getItemInfo()
    {
        return $this->itemInfo;
    }
    /**
     * Set itemInfo value
     * @param AllegroStructItemInfo $_itemInfo the itemInfo
     * @return AllegroStructItemInfo
     */
    public function setItemInfo($_itemInfo)
    {
        return ($this->itemInfo = $_itemInfo);
    }
    /**
     * Get itemCats value
     * @return AllegroStructArrayOfItemcatlist|null
     */
    public function getItemCats()
    {
        return $this->itemCats;
    }
    /**
     * Set itemCats value
     * @param AllegroStructArrayOfItemcatlist $_itemCats the itemCats
     * @return AllegroStructArrayOfItemcatlist
     */
    public function setItemCats($_itemCats)
    {
        return ($this->itemCats = $_itemCats);
    }
    /**
     * Get itemImages value
     * @return AllegroStructArrayOfItemimagelist|null
     */
    public function getItemImages()
    {
        return $this->itemImages;
    }
    /**
     * Set itemImages value
     * @param AllegroStructArrayOfItemimagelist $_itemImages the itemImages
     * @return AllegroStructArrayOfItemimagelist
     */
    public function setItemImages($_itemImages)
    {
        return ($this->itemImages = $_itemImages);
    }
    /**
     * Get itemAttribs value
     * @return AllegroStructArrayOfAttribstruct|null
     */
    public function getItemAttribs()
    {
        return $this->itemAttribs;
    }
    /**
     * Set itemAttribs value
     * @param AllegroStructArrayOfAttribstruct $_itemAttribs the itemAttribs
     * @return AllegroStructArrayOfAttribstruct
     */
    public function setItemAttribs($_itemAttribs)
    {
        return ($this->itemAttribs = $_itemAttribs);
    }
    /**
     * Get itemPostageOptions value
     * @return AllegroStructArrayOfPostagestruct|null
     */
    public function getItemPostageOptions()
    {
        return $this->itemPostageOptions;
    }
    /**
     * Set itemPostageOptions value
     * @param AllegroStructArrayOfPostagestruct $_itemPostageOptions the itemPostageOptions
     * @return AllegroStructArrayOfPostagestruct
     */
    public function setItemPostageOptions($_itemPostageOptions)
    {
        return ($this->itemPostageOptions = $_itemPostageOptions);
    }
    /**
     * Get itemPaymentOptions value
     * @return AllegroStructItemPaymentOptions|null
     */
    public function getItemPaymentOptions()
    {
        return $this->itemPaymentOptions;
    }
    /**
     * Set itemPaymentOptions value
     * @param AllegroStructItemPaymentOptions $_itemPaymentOptions the itemPaymentOptions
     * @return AllegroStructItemPaymentOptions
     */
    public function setItemPaymentOptions($_itemPaymentOptions)
    {
        return ($this->itemPaymentOptions = $_itemPaymentOptions);
    }
    /**
     * Get itemCompanyInfo value
     * @return AllegroStructCompanyInfoStruct|null
     */
    public function getItemCompanyInfo()
    {
        return $this->itemCompanyInfo;
    }
    /**
     * Set itemCompanyInfo value
     * @param AllegroStructCompanyInfoStruct $_itemCompanyInfo the itemCompanyInfo
     * @return AllegroStructCompanyInfoStruct
     */
    public function setItemCompanyInfo($_itemCompanyInfo)
    {
        return ($this->itemCompanyInfo = $_itemCompanyInfo);
    }
    /**
     * Get itemProductInfo value
     * @return AllegroStructProductStruct|null
     */
    public function getItemProductInfo()
    {
        return $this->itemProductInfo;
    }
    /**
     * Set itemProductInfo value
     * @param AllegroStructProductStruct $_itemProductInfo the itemProductInfo
     * @return AllegroStructProductStruct
     */
    public function setItemProductInfo($_itemProductInfo)
    {
        return ($this->itemProductInfo = $_itemProductInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructItemInfoStruct
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
