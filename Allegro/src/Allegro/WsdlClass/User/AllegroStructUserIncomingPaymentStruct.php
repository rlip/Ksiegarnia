<?php
/**
 * File for class AllegroStructUserIncomingPaymentStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructUserIncomingPaymentStruct originally named UserIncomingPaymentStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructUserIncomingPaymentStruct extends AllegroWsdlClass
{
    /**
     * The payTransId
     * @var long
     */
    public $payTransId;
    /**
     * The payTransItId
     * @var long
     */
    public $payTransItId;
    /**
     * The payTransBuyerId
     * @var int
     */
    public $payTransBuyerId;
    /**
     * The payTransType
     * @var string
     */
    public $payTransType;
    /**
     * The payTransStatus
     * @var string
     */
    public $payTransStatus;
    /**
     * The payTransAmount
     * @var float
     */
    public $payTransAmount;
    /**
     * The payTransCreateDate
     * @var long
     */
    public $payTransCreateDate;
    /**
     * The payTransRecvDate
     * @var long
     */
    public $payTransRecvDate;
    /**
     * The payTransPrice
     * @var float
     */
    public $payTransPrice;
    /**
     * The payTransCount
     * @var int
     */
    public $payTransCount;
    /**
     * The payTransPostageAmount
     * @var float
     */
    public $payTransPostageAmount;
    /**
     * The payTransDetails
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfPaymentdetailsstruct
     */
    public $payTransDetails;
    /**
     * The payTransIncomplete
     * @var int
     */
    public $payTransIncomplete;
    /**
     * The payTransMainId
     * @var long
     */
    public $payTransMainId;
    /**
     * Constructor method for UserIncomingPaymentStruct
     * @see parent::__construct()
     * @param long $_payTransId
     * @param long $_payTransItId
     * @param int $_payTransBuyerId
     * @param string $_payTransType
     * @param string $_payTransStatus
     * @param float $_payTransAmount
     * @param long $_payTransCreateDate
     * @param long $_payTransRecvDate
     * @param float $_payTransPrice
     * @param int $_payTransCount
     * @param float $_payTransPostageAmount
     * @param AllegroStructArrayOfPaymentdetailsstruct $_payTransDetails
     * @param int $_payTransIncomplete
     * @param long $_payTransMainId
     * @return AllegroStructUserIncomingPaymentStruct
     */
    public function __construct($_payTransId = NULL,$_payTransItId = NULL,$_payTransBuyerId = NULL,$_payTransType = NULL,$_payTransStatus = NULL,$_payTransAmount = NULL,$_payTransCreateDate = NULL,$_payTransRecvDate = NULL,$_payTransPrice = NULL,$_payTransCount = NULL,$_payTransPostageAmount = NULL,$_payTransDetails = NULL,$_payTransIncomplete = NULL,$_payTransMainId = NULL)
    {
        parent::__construct(array('payTransId'=>$_payTransId,'payTransItId'=>$_payTransItId,'payTransBuyerId'=>$_payTransBuyerId,'payTransType'=>$_payTransType,'payTransStatus'=>$_payTransStatus,'payTransAmount'=>$_payTransAmount,'payTransCreateDate'=>$_payTransCreateDate,'payTransRecvDate'=>$_payTransRecvDate,'payTransPrice'=>$_payTransPrice,'payTransCount'=>$_payTransCount,'payTransPostageAmount'=>$_payTransPostageAmount,'payTransDetails'=>($_payTransDetails instanceof AllegroStructArrayOfPaymentdetailsstruct)?$_payTransDetails:new AllegroStructArrayOfPaymentdetailsstruct($_payTransDetails),'payTransIncomplete'=>$_payTransIncomplete,'payTransMainId'=>$_payTransMainId),false);
    }
    /**
     * Get payTransId value
     * @return long|null
     */
    public function getPayTransId()
    {
        return $this->payTransId;
    }
    /**
     * Set payTransId value
     * @param long $_payTransId the payTransId
     * @return long
     */
    public function setPayTransId($_payTransId)
    {
        return ($this->payTransId = $_payTransId);
    }
    /**
     * Get payTransItId value
     * @return long|null
     */
    public function getPayTransItId()
    {
        return $this->payTransItId;
    }
    /**
     * Set payTransItId value
     * @param long $_payTransItId the payTransItId
     * @return long
     */
    public function setPayTransItId($_payTransItId)
    {
        return ($this->payTransItId = $_payTransItId);
    }
    /**
     * Get payTransBuyerId value
     * @return int|null
     */
    public function getPayTransBuyerId()
    {
        return $this->payTransBuyerId;
    }
    /**
     * Set payTransBuyerId value
     * @param int $_payTransBuyerId the payTransBuyerId
     * @return int
     */
    public function setPayTransBuyerId($_payTransBuyerId)
    {
        return ($this->payTransBuyerId = $_payTransBuyerId);
    }
    /**
     * Get payTransType value
     * @return string|null
     */
    public function getPayTransType()
    {
        return $this->payTransType;
    }
    /**
     * Set payTransType value
     * @param string $_payTransType the payTransType
     * @return string
     */
    public function setPayTransType($_payTransType)
    {
        return ($this->payTransType = $_payTransType);
    }
    /**
     * Get payTransStatus value
     * @return string|null
     */
    public function getPayTransStatus()
    {
        return $this->payTransStatus;
    }
    /**
     * Set payTransStatus value
     * @param string $_payTransStatus the payTransStatus
     * @return string
     */
    public function setPayTransStatus($_payTransStatus)
    {
        return ($this->payTransStatus = $_payTransStatus);
    }
    /**
     * Get payTransAmount value
     * @return float|null
     */
    public function getPayTransAmount()
    {
        return $this->payTransAmount;
    }
    /**
     * Set payTransAmount value
     * @param float $_payTransAmount the payTransAmount
     * @return float
     */
    public function setPayTransAmount($_payTransAmount)
    {
        return ($this->payTransAmount = $_payTransAmount);
    }
    /**
     * Get payTransCreateDate value
     * @return long|null
     */
    public function getPayTransCreateDate()
    {
        return $this->payTransCreateDate;
    }
    /**
     * Set payTransCreateDate value
     * @param long $_payTransCreateDate the payTransCreateDate
     * @return long
     */
    public function setPayTransCreateDate($_payTransCreateDate)
    {
        return ($this->payTransCreateDate = $_payTransCreateDate);
    }
    /**
     * Get payTransRecvDate value
     * @return long|null
     */
    public function getPayTransRecvDate()
    {
        return $this->payTransRecvDate;
    }
    /**
     * Set payTransRecvDate value
     * @param long $_payTransRecvDate the payTransRecvDate
     * @return long
     */
    public function setPayTransRecvDate($_payTransRecvDate)
    {
        return ($this->payTransRecvDate = $_payTransRecvDate);
    }
    /**
     * Get payTransPrice value
     * @return float|null
     */
    public function getPayTransPrice()
    {
        return $this->payTransPrice;
    }
    /**
     * Set payTransPrice value
     * @param float $_payTransPrice the payTransPrice
     * @return float
     */
    public function setPayTransPrice($_payTransPrice)
    {
        return ($this->payTransPrice = $_payTransPrice);
    }
    /**
     * Get payTransCount value
     * @return int|null
     */
    public function getPayTransCount()
    {
        return $this->payTransCount;
    }
    /**
     * Set payTransCount value
     * @param int $_payTransCount the payTransCount
     * @return int
     */
    public function setPayTransCount($_payTransCount)
    {
        return ($this->payTransCount = $_payTransCount);
    }
    /**
     * Get payTransPostageAmount value
     * @return float|null
     */
    public function getPayTransPostageAmount()
    {
        return $this->payTransPostageAmount;
    }
    /**
     * Set payTransPostageAmount value
     * @param float $_payTransPostageAmount the payTransPostageAmount
     * @return float
     */
    public function setPayTransPostageAmount($_payTransPostageAmount)
    {
        return ($this->payTransPostageAmount = $_payTransPostageAmount);
    }
    /**
     * Get payTransDetails value
     * @return AllegroStructArrayOfPaymentdetailsstruct|null
     */
    public function getPayTransDetails()
    {
        return $this->payTransDetails;
    }
    /**
     * Set payTransDetails value
     * @param AllegroStructArrayOfPaymentdetailsstruct $_payTransDetails the payTransDetails
     * @return AllegroStructArrayOfPaymentdetailsstruct
     */
    public function setPayTransDetails($_payTransDetails)
    {
        return ($this->payTransDetails = $_payTransDetails);
    }
    /**
     * Get payTransIncomplete value
     * @return int|null
     */
    public function getPayTransIncomplete()
    {
        return $this->payTransIncomplete;
    }
    /**
     * Set payTransIncomplete value
     * @param int $_payTransIncomplete the payTransIncomplete
     * @return int
     */
    public function setPayTransIncomplete($_payTransIncomplete)
    {
        return ($this->payTransIncomplete = $_payTransIncomplete);
    }
    /**
     * Get payTransMainId value
     * @return long|null
     */
    public function getPayTransMainId()
    {
        return $this->payTransMainId;
    }
    /**
     * Set payTransMainId value
     * @param long $_payTransMainId the payTransMainId
     * @return long
     */
    public function setPayTransMainId($_payTransMainId)
    {
        return ($this->payTransMainId = $_payTransMainId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructUserIncomingPaymentStruct
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
