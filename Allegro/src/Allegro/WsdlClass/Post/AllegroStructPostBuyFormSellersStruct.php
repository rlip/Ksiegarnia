<?php
/**
 * File for class AllegroStructPostBuyFormSellersStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPostBuyFormSellersStruct originally named PostBuyFormSellersStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPostBuyFormSellersStruct extends AllegroWsdlClass
{
    /**
     * The postBuyFormSellerId
     * @var int
     */
    public $postBuyFormSellerId;
    /**
     * The postBuyFormSellerName
     * @var string
     */
    public $postBuyFormSellerName;
    /**
     * The postBuyFormItems
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfPostbuyformitemstruct
     */
    public $postBuyFormItems;
    /**
     * The postBuyFormShipmentId
     * @var int
     */
    public $postBuyFormShipmentId;
    /**
     * The postBuyFormPostageAmount
     * @var float
     */
    public $postBuyFormPostageAmount;
    /**
     * The postBuyFormMsgToSeller
     * @var string
     */
    public $postBuyFormMsgToSeller;
    /**
     * The postBuyFormAmount
     * @var float
     */
    public $postBuyFormAmount;
    /**
     * The postBuyFormSurchargesList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $postBuyFormSurchargesList;
    /**
     * The postBuyFormShipmentTracking
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfPostbuyformshipmenttrackingstruct
     */
    public $postBuyFormShipmentTracking;
    /**
     * The postBuyFormGdAddress
     * @var AllegroStructPostBuyFormAddressStruct
     */
    public $postBuyFormGdAddress;
    /**
     * The postBuyFormGdAdditionalInfo
     * @var string
     */
    public $postBuyFormGdAdditionalInfo;
    /**
     * The postBuyFormSentBySeller
     * @var int
     */
    public $postBuyFormSentBySeller;
    /**
     * Constructor method for PostBuyFormSellersStruct
     * @see parent::__construct()
     * @param int $_postBuyFormSellerId
     * @param string $_postBuyFormSellerName
     * @param AllegroStructArrayOfPostbuyformitemstruct $_postBuyFormItems
     * @param int $_postBuyFormShipmentId
     * @param float $_postBuyFormPostageAmount
     * @param string $_postBuyFormMsgToSeller
     * @param float $_postBuyFormAmount
     * @param AllegroStructArrayOfLong $_postBuyFormSurchargesList
     * @param AllegroStructArrayOfPostbuyformshipmenttrackingstruct $_postBuyFormShipmentTracking
     * @param AllegroStructPostBuyFormAddressStruct $_postBuyFormGdAddress
     * @param string $_postBuyFormGdAdditionalInfo
     * @param int $_postBuyFormSentBySeller
     * @return AllegroStructPostBuyFormSellersStruct
     */
    public function __construct($_postBuyFormSellerId = NULL,$_postBuyFormSellerName = NULL,$_postBuyFormItems = NULL,$_postBuyFormShipmentId = NULL,$_postBuyFormPostageAmount = NULL,$_postBuyFormMsgToSeller = NULL,$_postBuyFormAmount = NULL,$_postBuyFormSurchargesList = NULL,$_postBuyFormShipmentTracking = NULL,$_postBuyFormGdAddress = NULL,$_postBuyFormGdAdditionalInfo = NULL,$_postBuyFormSentBySeller = NULL)
    {
        parent::__construct(array('postBuyFormSellerId'=>$_postBuyFormSellerId,'postBuyFormSellerName'=>$_postBuyFormSellerName,'postBuyFormItems'=>($_postBuyFormItems instanceof AllegroStructArrayOfPostbuyformitemstruct)?$_postBuyFormItems:new AllegroStructArrayOfPostbuyformitemstruct($_postBuyFormItems),'postBuyFormShipmentId'=>$_postBuyFormShipmentId,'postBuyFormPostageAmount'=>$_postBuyFormPostageAmount,'postBuyFormMsgToSeller'=>$_postBuyFormMsgToSeller,'postBuyFormAmount'=>$_postBuyFormAmount,'postBuyFormSurchargesList'=>($_postBuyFormSurchargesList instanceof AllegroStructArrayOfLong)?$_postBuyFormSurchargesList:new AllegroStructArrayOfLong($_postBuyFormSurchargesList),'postBuyFormShipmentTracking'=>($_postBuyFormShipmentTracking instanceof AllegroStructArrayOfPostbuyformshipmenttrackingstruct)?$_postBuyFormShipmentTracking:new AllegroStructArrayOfPostbuyformshipmenttrackingstruct($_postBuyFormShipmentTracking),'postBuyFormGdAddress'=>$_postBuyFormGdAddress,'postBuyFormGdAdditionalInfo'=>$_postBuyFormGdAdditionalInfo,'postBuyFormSentBySeller'=>$_postBuyFormSentBySeller),false);
    }
    /**
     * Get postBuyFormSellerId value
     * @return int|null
     */
    public function getPostBuyFormSellerId()
    {
        return $this->postBuyFormSellerId;
    }
    /**
     * Set postBuyFormSellerId value
     * @param int $_postBuyFormSellerId the postBuyFormSellerId
     * @return int
     */
    public function setPostBuyFormSellerId($_postBuyFormSellerId)
    {
        return ($this->postBuyFormSellerId = $_postBuyFormSellerId);
    }
    /**
     * Get postBuyFormSellerName value
     * @return string|null
     */
    public function getPostBuyFormSellerName()
    {
        return $this->postBuyFormSellerName;
    }
    /**
     * Set postBuyFormSellerName value
     * @param string $_postBuyFormSellerName the postBuyFormSellerName
     * @return string
     */
    public function setPostBuyFormSellerName($_postBuyFormSellerName)
    {
        return ($this->postBuyFormSellerName = $_postBuyFormSellerName);
    }
    /**
     * Get postBuyFormItems value
     * @return AllegroStructArrayOfPostbuyformitemstruct|null
     */
    public function getPostBuyFormItems()
    {
        return $this->postBuyFormItems;
    }
    /**
     * Set postBuyFormItems value
     * @param AllegroStructArrayOfPostbuyformitemstruct $_postBuyFormItems the postBuyFormItems
     * @return AllegroStructArrayOfPostbuyformitemstruct
     */
    public function setPostBuyFormItems($_postBuyFormItems)
    {
        return ($this->postBuyFormItems = $_postBuyFormItems);
    }
    /**
     * Get postBuyFormShipmentId value
     * @return int|null
     */
    public function getPostBuyFormShipmentId()
    {
        return $this->postBuyFormShipmentId;
    }
    /**
     * Set postBuyFormShipmentId value
     * @param int $_postBuyFormShipmentId the postBuyFormShipmentId
     * @return int
     */
    public function setPostBuyFormShipmentId($_postBuyFormShipmentId)
    {
        return ($this->postBuyFormShipmentId = $_postBuyFormShipmentId);
    }
    /**
     * Get postBuyFormPostageAmount value
     * @return float|null
     */
    public function getPostBuyFormPostageAmount()
    {
        return $this->postBuyFormPostageAmount;
    }
    /**
     * Set postBuyFormPostageAmount value
     * @param float $_postBuyFormPostageAmount the postBuyFormPostageAmount
     * @return float
     */
    public function setPostBuyFormPostageAmount($_postBuyFormPostageAmount)
    {
        return ($this->postBuyFormPostageAmount = $_postBuyFormPostageAmount);
    }
    /**
     * Get postBuyFormMsgToSeller value
     * @return string|null
     */
    public function getPostBuyFormMsgToSeller()
    {
        return $this->postBuyFormMsgToSeller;
    }
    /**
     * Set postBuyFormMsgToSeller value
     * @param string $_postBuyFormMsgToSeller the postBuyFormMsgToSeller
     * @return string
     */
    public function setPostBuyFormMsgToSeller($_postBuyFormMsgToSeller)
    {
        return ($this->postBuyFormMsgToSeller = $_postBuyFormMsgToSeller);
    }
    /**
     * Get postBuyFormAmount value
     * @return float|null
     */
    public function getPostBuyFormAmount()
    {
        return $this->postBuyFormAmount;
    }
    /**
     * Set postBuyFormAmount value
     * @param float $_postBuyFormAmount the postBuyFormAmount
     * @return float
     */
    public function setPostBuyFormAmount($_postBuyFormAmount)
    {
        return ($this->postBuyFormAmount = $_postBuyFormAmount);
    }
    /**
     * Get postBuyFormSurchargesList value
     * @return AllegroStructArrayOfLong|null
     */
    public function getPostBuyFormSurchargesList()
    {
        return $this->postBuyFormSurchargesList;
    }
    /**
     * Set postBuyFormSurchargesList value
     * @param AllegroStructArrayOfLong $_postBuyFormSurchargesList the postBuyFormSurchargesList
     * @return AllegroStructArrayOfLong
     */
    public function setPostBuyFormSurchargesList($_postBuyFormSurchargesList)
    {
        return ($this->postBuyFormSurchargesList = $_postBuyFormSurchargesList);
    }
    /**
     * Get postBuyFormShipmentTracking value
     * @return AllegroStructArrayOfPostbuyformshipmenttrackingstruct|null
     */
    public function getPostBuyFormShipmentTracking()
    {
        return $this->postBuyFormShipmentTracking;
    }
    /**
     * Set postBuyFormShipmentTracking value
     * @param AllegroStructArrayOfPostbuyformshipmenttrackingstruct $_postBuyFormShipmentTracking the postBuyFormShipmentTracking
     * @return AllegroStructArrayOfPostbuyformshipmenttrackingstruct
     */
    public function setPostBuyFormShipmentTracking($_postBuyFormShipmentTracking)
    {
        return ($this->postBuyFormShipmentTracking = $_postBuyFormShipmentTracking);
    }
    /**
     * Get postBuyFormGdAddress value
     * @return AllegroStructPostBuyFormAddressStruct|null
     */
    public function getPostBuyFormGdAddress()
    {
        return $this->postBuyFormGdAddress;
    }
    /**
     * Set postBuyFormGdAddress value
     * @param AllegroStructPostBuyFormAddressStruct $_postBuyFormGdAddress the postBuyFormGdAddress
     * @return AllegroStructPostBuyFormAddressStruct
     */
    public function setPostBuyFormGdAddress($_postBuyFormGdAddress)
    {
        return ($this->postBuyFormGdAddress = $_postBuyFormGdAddress);
    }
    /**
     * Get postBuyFormGdAdditionalInfo value
     * @return string|null
     */
    public function getPostBuyFormGdAdditionalInfo()
    {
        return $this->postBuyFormGdAdditionalInfo;
    }
    /**
     * Set postBuyFormGdAdditionalInfo value
     * @param string $_postBuyFormGdAdditionalInfo the postBuyFormGdAdditionalInfo
     * @return string
     */
    public function setPostBuyFormGdAdditionalInfo($_postBuyFormGdAdditionalInfo)
    {
        return ($this->postBuyFormGdAdditionalInfo = $_postBuyFormGdAdditionalInfo);
    }
    /**
     * Get postBuyFormSentBySeller value
     * @return int|null
     */
    public function getPostBuyFormSentBySeller()
    {
        return $this->postBuyFormSentBySeller;
    }
    /**
     * Set postBuyFormSentBySeller value
     * @param int $_postBuyFormSentBySeller the postBuyFormSentBySeller
     * @return int
     */
    public function setPostBuyFormSentBySeller($_postBuyFormSentBySeller)
    {
        return ($this->postBuyFormSentBySeller = $_postBuyFormSentBySeller);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPostBuyFormSellersStruct
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
