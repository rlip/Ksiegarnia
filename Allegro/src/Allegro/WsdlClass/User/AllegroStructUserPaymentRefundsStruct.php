<?php
/**
 * File for class AllegroStructUserPaymentRefundsStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructUserPaymentRefundsStruct originally named UserPaymentRefundsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructUserPaymentRefundsStruct extends AllegroWsdlClass
{
    /**
     * The payRefundTransId
     * @var long
     */
    public $payRefundTransId;
    /**
     * The payRefundItId
     * @var long
     */
    public $payRefundItId;
    /**
     * The payRefundSellerId
     * @var int
     */
    public $payRefundSellerId;
    /**
     * The payRefundValue
     * @var float
     */
    public $payRefundValue;
    /**
     * The payRefundReason
     * @var string
     */
    public $payRefundReason;
    /**
     * The payRefundDate
     * @var long
     */
    public $payRefundDate;
    /**
     * Constructor method for UserPaymentRefundsStruct
     * @see parent::__construct()
     * @param long $_payRefundTransId
     * @param long $_payRefundItId
     * @param int $_payRefundSellerId
     * @param float $_payRefundValue
     * @param string $_payRefundReason
     * @param long $_payRefundDate
     * @return AllegroStructUserPaymentRefundsStruct
     */
    public function __construct($_payRefundTransId = NULL,$_payRefundItId = NULL,$_payRefundSellerId = NULL,$_payRefundValue = NULL,$_payRefundReason = NULL,$_payRefundDate = NULL)
    {
        parent::__construct(array('payRefundTransId'=>$_payRefundTransId,'payRefundItId'=>$_payRefundItId,'payRefundSellerId'=>$_payRefundSellerId,'payRefundValue'=>$_payRefundValue,'payRefundReason'=>$_payRefundReason,'payRefundDate'=>$_payRefundDate),false);
    }
    /**
     * Get payRefundTransId value
     * @return long|null
     */
    public function getPayRefundTransId()
    {
        return $this->payRefundTransId;
    }
    /**
     * Set payRefundTransId value
     * @param long $_payRefundTransId the payRefundTransId
     * @return long
     */
    public function setPayRefundTransId($_payRefundTransId)
    {
        return ($this->payRefundTransId = $_payRefundTransId);
    }
    /**
     * Get payRefundItId value
     * @return long|null
     */
    public function getPayRefundItId()
    {
        return $this->payRefundItId;
    }
    /**
     * Set payRefundItId value
     * @param long $_payRefundItId the payRefundItId
     * @return long
     */
    public function setPayRefundItId($_payRefundItId)
    {
        return ($this->payRefundItId = $_payRefundItId);
    }
    /**
     * Get payRefundSellerId value
     * @return int|null
     */
    public function getPayRefundSellerId()
    {
        return $this->payRefundSellerId;
    }
    /**
     * Set payRefundSellerId value
     * @param int $_payRefundSellerId the payRefundSellerId
     * @return int
     */
    public function setPayRefundSellerId($_payRefundSellerId)
    {
        return ($this->payRefundSellerId = $_payRefundSellerId);
    }
    /**
     * Get payRefundValue value
     * @return float|null
     */
    public function getPayRefundValue()
    {
        return $this->payRefundValue;
    }
    /**
     * Set payRefundValue value
     * @param float $_payRefundValue the payRefundValue
     * @return float
     */
    public function setPayRefundValue($_payRefundValue)
    {
        return ($this->payRefundValue = $_payRefundValue);
    }
    /**
     * Get payRefundReason value
     * @return string|null
     */
    public function getPayRefundReason()
    {
        return $this->payRefundReason;
    }
    /**
     * Set payRefundReason value
     * @param string $_payRefundReason the payRefundReason
     * @return string
     */
    public function setPayRefundReason($_payRefundReason)
    {
        return ($this->payRefundReason = $_payRefundReason);
    }
    /**
     * Get payRefundDate value
     * @return long|null
     */
    public function getPayRefundDate()
    {
        return $this->payRefundDate;
    }
    /**
     * Set payRefundDate value
     * @param long $_payRefundDate the payRefundDate
     * @return long
     */
    public function setPayRefundDate($_payRefundDate)
    {
        return ($this->payRefundDate = $_payRefundDate);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructUserPaymentRefundsStruct
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
