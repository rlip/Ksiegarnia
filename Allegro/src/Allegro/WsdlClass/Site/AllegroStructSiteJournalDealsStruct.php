<?php
/**
 * File for class AllegroStructSiteJournalDealsStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSiteJournalDealsStruct originally named SiteJournalDealsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSiteJournalDealsStruct extends AllegroWsdlClass
{
    /**
     * The dealEventId
     * @var long
     */
    public $dealEventId;
    /**
     * The dealEventType
     * @var int
     */
    public $dealEventType;
    /**
     * The dealEventTime
     * @var long
     */
    public $dealEventTime;
    /**
     * The dealId
     * @var long
     */
    public $dealId;
    /**
     * The dealTransactionId
     * @var long
     */
    public $dealTransactionId;
    /**
     * The dealSellerId
     * @var int
     */
    public $dealSellerId;
    /**
     * The dealItemId
     * @var long
     */
    public $dealItemId;
    /**
     * The dealBuyerId
     * @var int
     */
    public $dealBuyerId;
    /**
     * The dealQuantity
     * @var int
     */
    public $dealQuantity;
    /**
     * Constructor method for SiteJournalDealsStruct
     * @see parent::__construct()
     * @param long $_dealEventId
     * @param int $_dealEventType
     * @param long $_dealEventTime
     * @param long $_dealId
     * @param long $_dealTransactionId
     * @param int $_dealSellerId
     * @param long $_dealItemId
     * @param int $_dealBuyerId
     * @param int $_dealQuantity
     * @return AllegroStructSiteJournalDealsStruct
     */
    public function __construct($_dealEventId = NULL,$_dealEventType = NULL,$_dealEventTime = NULL,$_dealId = NULL,$_dealTransactionId = NULL,$_dealSellerId = NULL,$_dealItemId = NULL,$_dealBuyerId = NULL,$_dealQuantity = NULL)
    {
        parent::__construct(array('dealEventId'=>$_dealEventId,'dealEventType'=>$_dealEventType,'dealEventTime'=>$_dealEventTime,'dealId'=>$_dealId,'dealTransactionId'=>$_dealTransactionId,'dealSellerId'=>$_dealSellerId,'dealItemId'=>$_dealItemId,'dealBuyerId'=>$_dealBuyerId,'dealQuantity'=>$_dealQuantity),false);
    }
    /**
     * Get dealEventId value
     * @return long|null
     */
    public function getDealEventId()
    {
        return $this->dealEventId;
    }
    /**
     * Set dealEventId value
     * @param long $_dealEventId the dealEventId
     * @return long
     */
    public function setDealEventId($_dealEventId)
    {
        return ($this->dealEventId = $_dealEventId);
    }
    /**
     * Get dealEventType value
     * @return int|null
     */
    public function getDealEventType()
    {
        return $this->dealEventType;
    }
    /**
     * Set dealEventType value
     * @param int $_dealEventType the dealEventType
     * @return int
     */
    public function setDealEventType($_dealEventType)
    {
        return ($this->dealEventType = $_dealEventType);
    }
    /**
     * Get dealEventTime value
     * @return long|null
     */
    public function getDealEventTime()
    {
        return $this->dealEventTime;
    }
    /**
     * Set dealEventTime value
     * @param long $_dealEventTime the dealEventTime
     * @return long
     */
    public function setDealEventTime($_dealEventTime)
    {
        return ($this->dealEventTime = $_dealEventTime);
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
     * Get dealTransactionId value
     * @return long|null
     */
    public function getDealTransactionId()
    {
        return $this->dealTransactionId;
    }
    /**
     * Set dealTransactionId value
     * @param long $_dealTransactionId the dealTransactionId
     * @return long
     */
    public function setDealTransactionId($_dealTransactionId)
    {
        return ($this->dealTransactionId = $_dealTransactionId);
    }
    /**
     * Get dealSellerId value
     * @return int|null
     */
    public function getDealSellerId()
    {
        return $this->dealSellerId;
    }
    /**
     * Set dealSellerId value
     * @param int $_dealSellerId the dealSellerId
     * @return int
     */
    public function setDealSellerId($_dealSellerId)
    {
        return ($this->dealSellerId = $_dealSellerId);
    }
    /**
     * Get dealItemId value
     * @return long|null
     */
    public function getDealItemId()
    {
        return $this->dealItemId;
    }
    /**
     * Set dealItemId value
     * @param long $_dealItemId the dealItemId
     * @return long
     */
    public function setDealItemId($_dealItemId)
    {
        return ($this->dealItemId = $_dealItemId);
    }
    /**
     * Get dealBuyerId value
     * @return int|null
     */
    public function getDealBuyerId()
    {
        return $this->dealBuyerId;
    }
    /**
     * Set dealBuyerId value
     * @param int $_dealBuyerId the dealBuyerId
     * @return int
     */
    public function setDealBuyerId($_dealBuyerId)
    {
        return ($this->dealBuyerId = $_dealBuyerId);
    }
    /**
     * Get dealQuantity value
     * @return int|null
     */
    public function getDealQuantity()
    {
        return $this->dealQuantity;
    }
    /**
     * Set dealQuantity value
     * @param int $_dealQuantity the dealQuantity
     * @return int
     */
    public function setDealQuantity($_dealQuantity)
    {
        return ($this->dealQuantity = $_dealQuantity);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSiteJournalDealsStruct
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
