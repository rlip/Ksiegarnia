<?php
/**
 * File for class AllegroStructPaymentItemsStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPaymentItemsStruct originally named PaymentItemsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPaymentItemsStruct extends AllegroWsdlClass
{
    /**
     * The payTransItId
     * @var long
     */
    public $payTransItId;
    /**
     * The payTransItName
     * @var string
     */
    public $payTransItName;
    /**
     * The payTransItCount
     * @var int
     */
    public $payTransItCount;
    /**
     * The payTransItPrice
     * @var float
     */
    public $payTransItPrice;
    /**
     * Constructor method for PaymentItemsStruct
     * @see parent::__construct()
     * @param long $_payTransItId
     * @param string $_payTransItName
     * @param int $_payTransItCount
     * @param float $_payTransItPrice
     * @return AllegroStructPaymentItemsStruct
     */
    public function __construct($_payTransItId = NULL,$_payTransItName = NULL,$_payTransItCount = NULL,$_payTransItPrice = NULL)
    {
        parent::__construct(array('payTransItId'=>$_payTransItId,'payTransItName'=>$_payTransItName,'payTransItCount'=>$_payTransItCount,'payTransItPrice'=>$_payTransItPrice),false);
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
     * Get payTransItName value
     * @return string|null
     */
    public function getPayTransItName()
    {
        return $this->payTransItName;
    }
    /**
     * Set payTransItName value
     * @param string $_payTransItName the payTransItName
     * @return string
     */
    public function setPayTransItName($_payTransItName)
    {
        return ($this->payTransItName = $_payTransItName);
    }
    /**
     * Get payTransItCount value
     * @return int|null
     */
    public function getPayTransItCount()
    {
        return $this->payTransItCount;
    }
    /**
     * Set payTransItCount value
     * @param int $_payTransItCount the payTransItCount
     * @return int
     */
    public function setPayTransItCount($_payTransItCount)
    {
        return ($this->payTransItCount = $_payTransItCount);
    }
    /**
     * Get payTransItPrice value
     * @return float|null
     */
    public function getPayTransItPrice()
    {
        return $this->payTransItPrice;
    }
    /**
     * Set payTransItPrice value
     * @param float $_payTransItPrice the payTransItPrice
     * @return float
     */
    public function setPayTransItPrice($_payTransItPrice)
    {
        return ($this->payTransItPrice = $_payTransItPrice);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPaymentItemsStruct
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
