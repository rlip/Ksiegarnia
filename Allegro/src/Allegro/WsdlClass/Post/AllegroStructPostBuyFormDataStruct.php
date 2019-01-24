<?php
/**
 * File for class AllegroStructPostBuyFormDataStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPostBuyFormDataStruct originally named PostBuyFormDataStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPostBuyFormDataStruct extends AllegroWsdlClass
{
    /**
     * The postBuyFormId
     * @var long
     */
    public $postBuyFormId;
    /**
     * The postBuyFormItems
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfPostbuyformitemstruct
     */
    public $postBuyFormItems;
    /**
     * The postBuyFormBuyerId
     * @var long
     */
    public $postBuyFormBuyerId;
    /**
     * The postBuyFormAmount
     * @var float
     */
    public $postBuyFormAmount;
    /**
     * The postBuyFormPostageAmount
     * @var float
     */
    public $postBuyFormPostageAmount;
    /**
     * The postBuyFormInvoiceOption
     * @var int
     */
    public $postBuyFormInvoiceOption;
    /**
     * The postBuyFormMsgToSeller
     * @var string
     */
    public $postBuyFormMsgToSeller;
    /**
     * The postBuyFormInvoiceData
     * @var AllegroStructPostBuyFormAddressStruct
     */
    public $postBuyFormInvoiceData;
    /**
     * The postBuyFormShipmentAddress
     * @var AllegroStructPostBuyFormAddressStruct
     */
    public $postBuyFormShipmentAddress;
    /**
     * The postBuyFormPayType
     * @var string
     */
    public $postBuyFormPayType;
    /**
     * The postBuyFormPayId
     * @var long
     */
    public $postBuyFormPayId;
    /**
     * The postBuyFormPayStatus
     * @var string
     */
    public $postBuyFormPayStatus;
    /**
     * The postBuyFormDateInit
     * @var string
     */
    public $postBuyFormDateInit;
    /**
     * The postBuyFormDateRecv
     * @var string
     */
    public $postBuyFormDateRecv;
    /**
     * The postBuyFormDateCancel
     * @var string
     */
    public $postBuyFormDateCancel;
    /**
     * The postBuyFormShipmentId
     * @var int
     */
    public $postBuyFormShipmentId;
    /**
     * The postBuyFormGdAddress
     * @var AllegroStructPostBuyFormAddressStruct
     */
    public $postBuyFormGdAddress;
    /**
     * The postBuyFormShipmentTracking
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfPostbuyformshipmenttrackingstruct
     */
    public $postBuyFormShipmentTracking;
    /**
     * The postBuyFormSurchargesList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $postBuyFormSurchargesList;
    /**
     * The postBuyFormGdAdditionalInfo
     * @var string
     */
    public $postBuyFormGdAdditionalInfo;
    /**
     * The postBuyFormPaymentAmount
     * @var float
     */
    public $postBuyFormPaymentAmount;
    /**
     * The postBuyFormSentBySeller
     * @var int
     */
    public $postBuyFormSentBySeller;
    /**
     * The postBuyFormBuyerLogin
     * @var string
     */
    public $postBuyFormBuyerLogin;
    /**
     * The postBuyFormBuyerEmail
     * @var string
     */
    public $postBuyFormBuyerEmail;
    /**
     * Constructor method for PostBuyFormDataStruct
     * @see parent::__construct()
     * @param long $_postBuyFormId
     * @param AllegroStructArrayOfPostbuyformitemstruct $_postBuyFormItems
     * @param long $_postBuyFormBuyerId
     * @param float $_postBuyFormAmount
     * @param float $_postBuyFormPostageAmount
     * @param int $_postBuyFormInvoiceOption
     * @param string $_postBuyFormMsgToSeller
     * @param AllegroStructPostBuyFormAddressStruct $_postBuyFormInvoiceData
     * @param AllegroStructPostBuyFormAddressStruct $_postBuyFormShipmentAddress
     * @param string $_postBuyFormPayType
     * @param long $_postBuyFormPayId
     * @param string $_postBuyFormPayStatus
     * @param string $_postBuyFormDateInit
     * @param string $_postBuyFormDateRecv
     * @param string $_postBuyFormDateCancel
     * @param int $_postBuyFormShipmentId
     * @param AllegroStructPostBuyFormAddressStruct $_postBuyFormGdAddress
     * @param AllegroStructArrayOfPostbuyformshipmenttrackingstruct $_postBuyFormShipmentTracking
     * @param AllegroStructArrayOfLong $_postBuyFormSurchargesList
     * @param string $_postBuyFormGdAdditionalInfo
     * @param float $_postBuyFormPaymentAmount
     * @param int $_postBuyFormSentBySeller
     * @param string $_postBuyFormBuyerLogin
     * @param string $_postBuyFormBuyerEmail
     * @return AllegroStructPostBuyFormDataStruct
     */
    public function __construct($_postBuyFormId = NULL,$_postBuyFormItems = NULL,$_postBuyFormBuyerId = NULL,$_postBuyFormAmount = NULL,$_postBuyFormPostageAmount = NULL,$_postBuyFormInvoiceOption = NULL,$_postBuyFormMsgToSeller = NULL,$_postBuyFormInvoiceData = NULL,$_postBuyFormShipmentAddress = NULL,$_postBuyFormPayType = NULL,$_postBuyFormPayId = NULL,$_postBuyFormPayStatus = NULL,$_postBuyFormDateInit = NULL,$_postBuyFormDateRecv = NULL,$_postBuyFormDateCancel = NULL,$_postBuyFormShipmentId = NULL,$_postBuyFormGdAddress = NULL,$_postBuyFormShipmentTracking = NULL,$_postBuyFormSurchargesList = NULL,$_postBuyFormGdAdditionalInfo = NULL,$_postBuyFormPaymentAmount = NULL,$_postBuyFormSentBySeller = NULL,$_postBuyFormBuyerLogin = NULL,$_postBuyFormBuyerEmail = NULL)
    {
        parent::__construct(array('postBuyFormId'=>$_postBuyFormId,'postBuyFormItems'=>($_postBuyFormItems instanceof AllegroStructArrayOfPostbuyformitemstruct)?$_postBuyFormItems:new AllegroStructArrayOfPostbuyformitemstruct($_postBuyFormItems),'postBuyFormBuyerId'=>$_postBuyFormBuyerId,'postBuyFormAmount'=>$_postBuyFormAmount,'postBuyFormPostageAmount'=>$_postBuyFormPostageAmount,'postBuyFormInvoiceOption'=>$_postBuyFormInvoiceOption,'postBuyFormMsgToSeller'=>$_postBuyFormMsgToSeller,'postBuyFormInvoiceData'=>$_postBuyFormInvoiceData,'postBuyFormShipmentAddress'=>$_postBuyFormShipmentAddress,'postBuyFormPayType'=>$_postBuyFormPayType,'postBuyFormPayId'=>$_postBuyFormPayId,'postBuyFormPayStatus'=>$_postBuyFormPayStatus,'postBuyFormDateInit'=>$_postBuyFormDateInit,'postBuyFormDateRecv'=>$_postBuyFormDateRecv,'postBuyFormDateCancel'=>$_postBuyFormDateCancel,'postBuyFormShipmentId'=>$_postBuyFormShipmentId,'postBuyFormGdAddress'=>$_postBuyFormGdAddress,'postBuyFormShipmentTracking'=>($_postBuyFormShipmentTracking instanceof AllegroStructArrayOfPostbuyformshipmenttrackingstruct)?$_postBuyFormShipmentTracking:new AllegroStructArrayOfPostbuyformshipmenttrackingstruct($_postBuyFormShipmentTracking),'postBuyFormSurchargesList'=>($_postBuyFormSurchargesList instanceof AllegroStructArrayOfLong)?$_postBuyFormSurchargesList:new AllegroStructArrayOfLong($_postBuyFormSurchargesList),'postBuyFormGdAdditionalInfo'=>$_postBuyFormGdAdditionalInfo,'postBuyFormPaymentAmount'=>$_postBuyFormPaymentAmount,'postBuyFormSentBySeller'=>$_postBuyFormSentBySeller,'postBuyFormBuyerLogin'=>$_postBuyFormBuyerLogin,'postBuyFormBuyerEmail'=>$_postBuyFormBuyerEmail),false);
    }
    /**
     * Get postBuyFormId value
     * @return long|null
     */
    public function getPostBuyFormId()
    {
        return $this->postBuyFormId;
    }
    /**
     * Set postBuyFormId value
     * @param long $_postBuyFormId the postBuyFormId
     * @return long
     */
    public function setPostBuyFormId($_postBuyFormId)
    {
        return ($this->postBuyFormId = $_postBuyFormId);
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
     * Get postBuyFormBuyerId value
     * @return long|null
     */
    public function getPostBuyFormBuyerId()
    {
        return $this->postBuyFormBuyerId;
    }
    /**
     * Set postBuyFormBuyerId value
     * @param long $_postBuyFormBuyerId the postBuyFormBuyerId
     * @return long
     */
    public function setPostBuyFormBuyerId($_postBuyFormBuyerId)
    {
        return ($this->postBuyFormBuyerId = $_postBuyFormBuyerId);
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
     * Get postBuyFormInvoiceOption value
     * @return int|null
     */
    public function getPostBuyFormInvoiceOption()
    {
        return $this->postBuyFormInvoiceOption;
    }
    /**
     * Set postBuyFormInvoiceOption value
     * @param int $_postBuyFormInvoiceOption the postBuyFormInvoiceOption
     * @return int
     */
    public function setPostBuyFormInvoiceOption($_postBuyFormInvoiceOption)
    {
        return ($this->postBuyFormInvoiceOption = $_postBuyFormInvoiceOption);
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
     * Get postBuyFormInvoiceData value
     * @return AllegroStructPostBuyFormAddressStruct|null
     */
    public function getPostBuyFormInvoiceData()
    {
        return $this->postBuyFormInvoiceData;
    }
    /**
     * Set postBuyFormInvoiceData value
     * @param AllegroStructPostBuyFormAddressStruct $_postBuyFormInvoiceData the postBuyFormInvoiceData
     * @return AllegroStructPostBuyFormAddressStruct
     */
    public function setPostBuyFormInvoiceData($_postBuyFormInvoiceData)
    {
        return ($this->postBuyFormInvoiceData = $_postBuyFormInvoiceData);
    }
    /**
     * Get postBuyFormShipmentAddress value
     * @return AllegroStructPostBuyFormAddressStruct|null
     */
    public function getPostBuyFormShipmentAddress()
    {
        return $this->postBuyFormShipmentAddress;
    }
    /**
     * Set postBuyFormShipmentAddress value
     * @param AllegroStructPostBuyFormAddressStruct $_postBuyFormShipmentAddress the postBuyFormShipmentAddress
     * @return AllegroStructPostBuyFormAddressStruct
     */
    public function setPostBuyFormShipmentAddress($_postBuyFormShipmentAddress)
    {
        return ($this->postBuyFormShipmentAddress = $_postBuyFormShipmentAddress);
    }
    /**
     * Get postBuyFormPayType value
     * @return string|null
     */
    public function getPostBuyFormPayType()
    {
        return $this->postBuyFormPayType;
    }
    /**
     * Set postBuyFormPayType value
     * @param string $_postBuyFormPayType the postBuyFormPayType
     * @return string
     */
    public function setPostBuyFormPayType($_postBuyFormPayType)
    {
        return ($this->postBuyFormPayType = $_postBuyFormPayType);
    }
    /**
     * Get postBuyFormPayId value
     * @return long|null
     */
    public function getPostBuyFormPayId()
    {
        return $this->postBuyFormPayId;
    }
    /**
     * Set postBuyFormPayId value
     * @param long $_postBuyFormPayId the postBuyFormPayId
     * @return long
     */
    public function setPostBuyFormPayId($_postBuyFormPayId)
    {
        return ($this->postBuyFormPayId = $_postBuyFormPayId);
    }
    /**
     * Get postBuyFormPayStatus value
     * @return string|null
     */
    public function getPostBuyFormPayStatus()
    {
        return $this->postBuyFormPayStatus;
    }
    /**
     * Set postBuyFormPayStatus value
     * @param string $_postBuyFormPayStatus the postBuyFormPayStatus
     * @return string
     */
    public function setPostBuyFormPayStatus($_postBuyFormPayStatus)
    {
        return ($this->postBuyFormPayStatus = $_postBuyFormPayStatus);
    }
    /**
     * Get postBuyFormDateInit value
     * @return string|null
     */
    public function getPostBuyFormDateInit()
    {
        return $this->postBuyFormDateInit;
    }
    /**
     * Set postBuyFormDateInit value
     * @param string $_postBuyFormDateInit the postBuyFormDateInit
     * @return string
     */
    public function setPostBuyFormDateInit($_postBuyFormDateInit)
    {
        return ($this->postBuyFormDateInit = $_postBuyFormDateInit);
    }
    /**
     * Get postBuyFormDateRecv value
     * @return string|null
     */
    public function getPostBuyFormDateRecv()
    {
        return $this->postBuyFormDateRecv;
    }
    /**
     * Set postBuyFormDateRecv value
     * @param string $_postBuyFormDateRecv the postBuyFormDateRecv
     * @return string
     */
    public function setPostBuyFormDateRecv($_postBuyFormDateRecv)
    {
        return ($this->postBuyFormDateRecv = $_postBuyFormDateRecv);
    }
    /**
     * Get postBuyFormDateCancel value
     * @return string|null
     */
    public function getPostBuyFormDateCancel()
    {
        return $this->postBuyFormDateCancel;
    }
    /**
     * Set postBuyFormDateCancel value
     * @param string $_postBuyFormDateCancel the postBuyFormDateCancel
     * @return string
     */
    public function setPostBuyFormDateCancel($_postBuyFormDateCancel)
    {
        return ($this->postBuyFormDateCancel = $_postBuyFormDateCancel);
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
     * Get postBuyFormPaymentAmount value
     * @return float|null
     */
    public function getPostBuyFormPaymentAmount()
    {
        return $this->postBuyFormPaymentAmount;
    }
    /**
     * Set postBuyFormPaymentAmount value
     * @param float $_postBuyFormPaymentAmount the postBuyFormPaymentAmount
     * @return float
     */
    public function setPostBuyFormPaymentAmount($_postBuyFormPaymentAmount)
    {
        return ($this->postBuyFormPaymentAmount = $_postBuyFormPaymentAmount);
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
     * Get postBuyFormBuyerLogin value
     * @return string|null
     */
    public function getPostBuyFormBuyerLogin()
    {
        return $this->postBuyFormBuyerLogin;
    }
    /**
     * Set postBuyFormBuyerLogin value
     * @param string $_postBuyFormBuyerLogin the postBuyFormBuyerLogin
     * @return string
     */
    public function setPostBuyFormBuyerLogin($_postBuyFormBuyerLogin)
    {
        return ($this->postBuyFormBuyerLogin = $_postBuyFormBuyerLogin);
    }
    /**
     * Get postBuyFormBuyerEmail value
     * @return string|null
     */
    public function getPostBuyFormBuyerEmail()
    {
        return $this->postBuyFormBuyerEmail;
    }
    /**
     * Set postBuyFormBuyerEmail value
     * @param string $_postBuyFormBuyerEmail the postBuyFormBuyerEmail
     * @return string
     */
    public function setPostBuyFormBuyerEmail($_postBuyFormBuyerEmail)
    {
        return ($this->postBuyFormBuyerEmail = $_postBuyFormBuyerEmail);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPostBuyFormDataStruct
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
