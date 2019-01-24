<?php
/**
 * File for class AllegroStructUserPaymentStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructUserPaymentStruct originally named UserPaymentStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructUserPaymentStruct extends AllegroWsdlClass
{
    /**
     * The payTransId
     * @var long
     */
    public $payTransId;
    /**
     * The payTransSellers
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfPaymentsellersstruct
     */
    public $payTransSellers;
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
     * The payTransPrice
     * @var float
     */
    public $payTransPrice;
    /**
     * The payTransPostageAmount
     * @var float
     */
    public $payTransPostageAmount;
    /**
     * The payTransIncomplete
     * @var int
     */
    public $payTransIncomplete;
    /**
     * Constructor method for UserPaymentStruct
     * @see parent::__construct()
     * @param long $_payTransId
     * @param AllegroStructArrayOfPaymentsellersstruct $_payTransSellers
     * @param string $_payTransType
     * @param string $_payTransStatus
     * @param float $_payTransAmount
     * @param long $_payTransCreateDate
     * @param float $_payTransPrice
     * @param float $_payTransPostageAmount
     * @param int $_payTransIncomplete
     * @return AllegroStructUserPaymentStruct
     */
    public function __construct($_payTransId = NULL,$_payTransSellers = NULL,$_payTransType = NULL,$_payTransStatus = NULL,$_payTransAmount = NULL,$_payTransCreateDate = NULL,$_payTransPrice = NULL,$_payTransPostageAmount = NULL,$_payTransIncomplete = NULL)
    {
        parent::__construct(array('payTransId'=>$_payTransId,'payTransSellers'=>($_payTransSellers instanceof AllegroStructArrayOfPaymentsellersstruct)?$_payTransSellers:new AllegroStructArrayOfPaymentsellersstruct($_payTransSellers),'payTransType'=>$_payTransType,'payTransStatus'=>$_payTransStatus,'payTransAmount'=>$_payTransAmount,'payTransCreateDate'=>$_payTransCreateDate,'payTransPrice'=>$_payTransPrice,'payTransPostageAmount'=>$_payTransPostageAmount,'payTransIncomplete'=>$_payTransIncomplete),false);
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
     * Get payTransSellers value
     * @return AllegroStructArrayOfPaymentsellersstruct|null
     */
    public function getPayTransSellers()
    {
        return $this->payTransSellers;
    }
    /**
     * Set payTransSellers value
     * @param AllegroStructArrayOfPaymentsellersstruct $_payTransSellers the payTransSellers
     * @return AllegroStructArrayOfPaymentsellersstruct
     */
    public function setPayTransSellers($_payTransSellers)
    {
        return ($this->payTransSellers = $_payTransSellers);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructUserPaymentStruct
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
