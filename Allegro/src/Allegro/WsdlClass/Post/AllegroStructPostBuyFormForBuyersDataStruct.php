<?php
/**
 * File for class AllegroStructPostBuyFormForBuyersDataStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPostBuyFormForBuyersDataStruct originally named PostBuyFormForBuyersDataStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPostBuyFormForBuyersDataStruct extends AllegroWsdlClass
{
    /**
     * The postBuyFormId
     * @var long
     */
    public $postBuyFormId;
    /**
     * The postBuyFormBuyerId
     * @var int
     */
    public $postBuyFormBuyerId;
    /**
     * The postBuyFormSellers
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfPostbuyformsellersstruct
     */
    public $postBuyFormSellers;
    /**
     * The postBuyFormTotalAmount
     * @var float
     */
    public $postBuyFormTotalAmount;
    /**
     * The postBuyFormInvoiceOption
     * @var int
     */
    public $postBuyFormInvoiceOption;
    /**
     * The postBuyFormInvoiceData
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
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
     * The postBuyFormPaymentAmount
     * @var float
     */
    public $postBuyFormPaymentAmount;
    /**
     * Constructor method for PostBuyFormForBuyersDataStruct
     * @see parent::__construct()
     * @param long $_postBuyFormId
     * @param int $_postBuyFormBuyerId
     * @param AllegroStructArrayOfPostbuyformsellersstruct $_postBuyFormSellers
     * @param float $_postBuyFormTotalAmount
     * @param int $_postBuyFormInvoiceOption
     * @param AllegroStructPostBuyFormAddressStruct $_postBuyFormInvoiceData
     * @param AllegroStructPostBuyFormAddressStruct $_postBuyFormShipmentAddress
     * @param string $_postBuyFormPayType
     * @param long $_postBuyFormPayId
     * @param string $_postBuyFormPayStatus
     * @param string $_postBuyFormDateInit
     * @param string $_postBuyFormDateRecv
     * @param string $_postBuyFormDateCancel
     * @param float $_postBuyFormPaymentAmount
     * @return AllegroStructPostBuyFormForBuyersDataStruct
     */
    public function __construct($_postBuyFormId = NULL,$_postBuyFormBuyerId = NULL,$_postBuyFormSellers = NULL,$_postBuyFormTotalAmount = NULL,$_postBuyFormInvoiceOption = NULL,$_postBuyFormInvoiceData = NULL,$_postBuyFormShipmentAddress = NULL,$_postBuyFormPayType = NULL,$_postBuyFormPayId = NULL,$_postBuyFormPayStatus = NULL,$_postBuyFormDateInit = NULL,$_postBuyFormDateRecv = NULL,$_postBuyFormDateCancel = NULL,$_postBuyFormPaymentAmount = NULL)
    {
        parent::__construct(array('postBuyFormId'=>$_postBuyFormId,'postBuyFormBuyerId'=>$_postBuyFormBuyerId,'postBuyFormSellers'=>($_postBuyFormSellers instanceof AllegroStructArrayOfPostbuyformsellersstruct)?$_postBuyFormSellers:new AllegroStructArrayOfPostbuyformsellersstruct($_postBuyFormSellers),'postBuyFormTotalAmount'=>$_postBuyFormTotalAmount,'postBuyFormInvoiceOption'=>$_postBuyFormInvoiceOption,'postBuyFormInvoiceData'=>$_postBuyFormInvoiceData,'postBuyFormShipmentAddress'=>$_postBuyFormShipmentAddress,'postBuyFormPayType'=>$_postBuyFormPayType,'postBuyFormPayId'=>$_postBuyFormPayId,'postBuyFormPayStatus'=>$_postBuyFormPayStatus,'postBuyFormDateInit'=>$_postBuyFormDateInit,'postBuyFormDateRecv'=>$_postBuyFormDateRecv,'postBuyFormDateCancel'=>$_postBuyFormDateCancel,'postBuyFormPaymentAmount'=>$_postBuyFormPaymentAmount),false);
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
     * Get postBuyFormBuyerId value
     * @return int|null
     */
    public function getPostBuyFormBuyerId()
    {
        return $this->postBuyFormBuyerId;
    }
    /**
     * Set postBuyFormBuyerId value
     * @param int $_postBuyFormBuyerId the postBuyFormBuyerId
     * @return int
     */
    public function setPostBuyFormBuyerId($_postBuyFormBuyerId)
    {
        return ($this->postBuyFormBuyerId = $_postBuyFormBuyerId);
    }
    /**
     * Get postBuyFormSellers value
     * @return AllegroStructArrayOfPostbuyformsellersstruct|null
     */
    public function getPostBuyFormSellers()
    {
        return $this->postBuyFormSellers;
    }
    /**
     * Set postBuyFormSellers value
     * @param AllegroStructArrayOfPostbuyformsellersstruct $_postBuyFormSellers the postBuyFormSellers
     * @return AllegroStructArrayOfPostbuyformsellersstruct
     */
    public function setPostBuyFormSellers($_postBuyFormSellers)
    {
        return ($this->postBuyFormSellers = $_postBuyFormSellers);
    }
    /**
     * Get postBuyFormTotalAmount value
     * @return float|null
     */
    public function getPostBuyFormTotalAmount()
    {
        return $this->postBuyFormTotalAmount;
    }
    /**
     * Set postBuyFormTotalAmount value
     * @param float $_postBuyFormTotalAmount the postBuyFormTotalAmount
     * @return float
     */
    public function setPostBuyFormTotalAmount($_postBuyFormTotalAmount)
    {
        return ($this->postBuyFormTotalAmount = $_postBuyFormTotalAmount);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPostBuyFormForBuyersDataStruct
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
