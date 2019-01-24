<?php
/**
 * File for class AllegroStructDoGetItemsInfoRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetItemsInfoRequest originally named DoGetItemsInfoRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetItemsInfoRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The itemsIdArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $itemsIdArray;
    /**
     * The getDesc
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $getDesc;
    /**
     * The getImageUrl
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $getImageUrl;
    /**
     * The getAttribs
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $getAttribs;
    /**
     * The getPostageOptions
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $getPostageOptions;
    /**
     * The getCompanyInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $getCompanyInfo;
    /**
     * The getProductInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $getProductInfo;
    /**
     * Constructor method for DoGetItemsInfoRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param AllegroStructArrayOfLong $_itemsIdArray
     * @param int $_getDesc
     * @param int $_getImageUrl
     * @param int $_getAttribs
     * @param int $_getPostageOptions
     * @param int $_getCompanyInfo
     * @param int $_getProductInfo
     * @return AllegroStructDoGetItemsInfoRequest
     */
    public function __construct($_sessionHandle = NULL,$_itemsIdArray = NULL,$_getDesc = NULL,$_getImageUrl = NULL,$_getAttribs = NULL,$_getPostageOptions = NULL,$_getCompanyInfo = NULL,$_getProductInfo = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'itemsIdArray'=>($_itemsIdArray instanceof AllegroStructArrayOfLong)?$_itemsIdArray:new AllegroStructArrayOfLong($_itemsIdArray),'getDesc'=>$_getDesc,'getImageUrl'=>$_getImageUrl,'getAttribs'=>$_getAttribs,'getPostageOptions'=>$_getPostageOptions,'getCompanyInfo'=>$_getCompanyInfo,'getProductInfo'=>$_getProductInfo),false);
    }
    /**
     * Get sessionHandle value
     * @return string|null
     */
    public function getSessionHandle()
    {
        return $this->sessionHandle;
    }
    /**
     * Set sessionHandle value
     * @param string $_sessionHandle the sessionHandle
     * @return string
     */
    public function setSessionHandle($_sessionHandle)
    {
        return ($this->sessionHandle = $_sessionHandle);
    }
    /**
     * Get itemsIdArray value
     * @return AllegroStructArrayOfLong|null
     */
    public function getItemsIdArray()
    {
        return $this->itemsIdArray;
    }
    /**
     * Set itemsIdArray value
     * @param AllegroStructArrayOfLong $_itemsIdArray the itemsIdArray
     * @return AllegroStructArrayOfLong
     */
    public function setItemsIdArray($_itemsIdArray)
    {
        return ($this->itemsIdArray = $_itemsIdArray);
    }
    /**
     * Get getDesc value
     * @return int|null
     */
    public function getGetDesc()
    {
        return $this->getDesc;
    }
    /**
     * Set getDesc value
     * @param int $_getDesc the getDesc
     * @return int
     */
    public function setGetDesc($_getDesc)
    {
        return ($this->getDesc = $_getDesc);
    }
    /**
     * Get getImageUrl value
     * @return int|null
     */
    public function getGetImageUrl()
    {
        return $this->getImageUrl;
    }
    /**
     * Set getImageUrl value
     * @param int $_getImageUrl the getImageUrl
     * @return int
     */
    public function setGetImageUrl($_getImageUrl)
    {
        return ($this->getImageUrl = $_getImageUrl);
    }
    /**
     * Get getAttribs value
     * @return int|null
     */
    public function getGetAttribs()
    {
        return $this->getAttribs;
    }
    /**
     * Set getAttribs value
     * @param int $_getAttribs the getAttribs
     * @return int
     */
    public function setGetAttribs($_getAttribs)
    {
        return ($this->getAttribs = $_getAttribs);
    }
    /**
     * Get getPostageOptions value
     * @return int|null
     */
    public function getGetPostageOptions()
    {
        return $this->getPostageOptions;
    }
    /**
     * Set getPostageOptions value
     * @param int $_getPostageOptions the getPostageOptions
     * @return int
     */
    public function setGetPostageOptions($_getPostageOptions)
    {
        return ($this->getPostageOptions = $_getPostageOptions);
    }
    /**
     * Get getCompanyInfo value
     * @return int|null
     */
    public function getGetCompanyInfo()
    {
        return $this->getCompanyInfo;
    }
    /**
     * Set getCompanyInfo value
     * @param int $_getCompanyInfo the getCompanyInfo
     * @return int
     */
    public function setGetCompanyInfo($_getCompanyInfo)
    {
        return ($this->getCompanyInfo = $_getCompanyInfo);
    }
    /**
     * Get getProductInfo value
     * @return int|null
     */
    public function getGetProductInfo()
    {
        return $this->getProductInfo;
    }
    /**
     * Set getProductInfo value
     * @param int $_getProductInfo the getProductInfo
     * @return int
     */
    public function setGetProductInfo($_getProductInfo)
    {
        return ($this->getProductInfo = $_getProductInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetItemsInfoRequest
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
