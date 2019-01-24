<?php
/**
 * File for class AllegroStructRefundDetailsType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructRefundDetailsType originally named RefundDetailsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructRefundDetailsType extends AllegroWsdlClass
{
    /**
     * The refundId
     * @var int
     */
    public $refundId;
    /**
     * The refundStatus
     * @var string
     */
    public $refundStatus;
    /**
     * The refundQuantity
     * @var int
     */
    public $refundQuantity;
    /**
     * The createdDate
     * @var dateTime
     */
    public $createdDate;
    /**
     * The considerDate
     * @var dateTime
     */
    public $considerDate;
    /**
     * Constructor method for RefundDetailsType
     * @see parent::__construct()
     * @param int $_refundId
     * @param string $_refundStatus
     * @param int $_refundQuantity
     * @param dateTime $_createdDate
     * @param dateTime $_considerDate
     * @return AllegroStructRefundDetailsType
     */
    public function __construct($_refundId = NULL,$_refundStatus = NULL,$_refundQuantity = NULL,$_createdDate = NULL,$_considerDate = NULL)
    {
        parent::__construct(array('refundId'=>$_refundId,'refundStatus'=>$_refundStatus,'refundQuantity'=>$_refundQuantity,'createdDate'=>$_createdDate,'considerDate'=>$_considerDate),false);
    }
    /**
     * Get refundId value
     * @return int|null
     */
    public function getRefundId()
    {
        return $this->refundId;
    }
    /**
     * Set refundId value
     * @param int $_refundId the refundId
     * @return int
     */
    public function setRefundId($_refundId)
    {
        return ($this->refundId = $_refundId);
    }
    /**
     * Get refundStatus value
     * @return string|null
     */
    public function getRefundStatus()
    {
        return $this->refundStatus;
    }
    /**
     * Set refundStatus value
     * @param string $_refundStatus the refundStatus
     * @return string
     */
    public function setRefundStatus($_refundStatus)
    {
        return ($this->refundStatus = $_refundStatus);
    }
    /**
     * Get refundQuantity value
     * @return int|null
     */
    public function getRefundQuantity()
    {
        return $this->refundQuantity;
    }
    /**
     * Set refundQuantity value
     * @param int $_refundQuantity the refundQuantity
     * @return int
     */
    public function setRefundQuantity($_refundQuantity)
    {
        return ($this->refundQuantity = $_refundQuantity);
    }
    /**
     * Get createdDate value
     * @return dateTime|null
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }
    /**
     * Set createdDate value
     * @param dateTime $_createdDate the createdDate
     * @return dateTime
     */
    public function setCreatedDate($_createdDate)
    {
        return ($this->createdDate = $_createdDate);
    }
    /**
     * Get considerDate value
     * @return dateTime|null
     */
    public function getConsiderDate()
    {
        return $this->considerDate;
    }
    /**
     * Set considerDate value
     * @param dateTime $_considerDate the considerDate
     * @return dateTime
     */
    public function setConsiderDate($_considerDate)
    {
        return ($this->considerDate = $_considerDate);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructRefundDetailsType
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
