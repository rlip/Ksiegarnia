<?php
/**
 * File for class AllegroStructRefundListType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructRefundListType originally named RefundListType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructRefundListType extends AllegroWsdlClass
{
    /**
     * The dealId
     * @var long
     */
    public $dealId;
    /**
     * The dealDate
     * @var dateTime
     */
    public $dealDate;
    /**
     * The buyerId
     * @var int
     */
    public $buyerId;
    /**
     * The buyerLogin
     * @var string
     */
    public $buyerLogin;
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
     * The bidsCount
     * @var int
     */
    public $bidsCount;
    /**
     * The quantityType
     * @var string
     */
    public $quantityType;
    /**
     * The refundDetails
     * @var AllegroStructRefundDetailsType
     */
    public $refundDetails;
    /**
     * Constructor method for RefundListType
     * @see parent::__construct()
     * @param long $_dealId
     * @param dateTime $_dealDate
     * @param int $_buyerId
     * @param string $_buyerLogin
     * @param long $_itemId
     * @param string $_itemTitle
     * @param int $_bidsCount
     * @param string $_quantityType
     * @param AllegroStructRefundDetailsType $_refundDetails
     * @return AllegroStructRefundListType
     */
    public function __construct($_dealId = NULL,$_dealDate = NULL,$_buyerId = NULL,$_buyerLogin = NULL,$_itemId = NULL,$_itemTitle = NULL,$_bidsCount = NULL,$_quantityType = NULL,$_refundDetails = NULL)
    {
        parent::__construct(array('dealId'=>$_dealId,'dealDate'=>$_dealDate,'buyerId'=>$_buyerId,'buyerLogin'=>$_buyerLogin,'itemId'=>$_itemId,'itemTitle'=>$_itemTitle,'bidsCount'=>$_bidsCount,'quantityType'=>$_quantityType,'refundDetails'=>$_refundDetails),false);
    }
    /**
     * Get dealId value
     * @return long|null
     */
    public function getDealId()
    {
        return $this->dealId;
    }
    /**
     * Set dealId value
     * @param long $_dealId the dealId
     * @return long
     */
    public function setDealId($_dealId)
    {
        return ($this->dealId = $_dealId);
    }
    /**
     * Get dealDate value
     * @return dateTime|null
     */
    public function getDealDate()
    {
        return $this->dealDate;
    }
    /**
     * Set dealDate value
     * @param dateTime $_dealDate the dealDate
     * @return dateTime
     */
    public function setDealDate($_dealDate)
    {
        return ($this->dealDate = $_dealDate);
    }
    /**
     * Get buyerId value
     * @return int|null
     */
    public function getBuyerId()
    {
        return $this->buyerId;
    }
    /**
     * Set buyerId value
     * @param int $_buyerId the buyerId
     * @return int
     */
    public function setBuyerId($_buyerId)
    {
        return ($this->buyerId = $_buyerId);
    }
    /**
     * Get buyerLogin value
     * @return string|null
     */
    public function getBuyerLogin()
    {
        return $this->buyerLogin;
    }
    /**
     * Set buyerLogin value
     * @param string $_buyerLogin the buyerLogin
     * @return string
     */
    public function setBuyerLogin($_buyerLogin)
    {
        return ($this->buyerLogin = $_buyerLogin);
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
     * Get refundDetails value
     * @return AllegroStructRefundDetailsType|null
     */
    public function getRefundDetails()
    {
        return $this->refundDetails;
    }
    /**
     * Set refundDetails value
     * @param AllegroStructRefundDetailsType $_refundDetails the refundDetails
     * @return AllegroStructRefundDetailsType
     */
    public function setRefundDetails($_refundDetails)
    {
        return ($this->refundDetails = $_refundDetails);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructRefundListType
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
