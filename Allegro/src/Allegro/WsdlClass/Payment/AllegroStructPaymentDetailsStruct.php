<?php
/**
 * File for class AllegroStructPaymentDetailsStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPaymentDetailsStruct originally named PaymentDetailsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPaymentDetailsStruct extends AllegroWsdlClass
{
    /**
     * The payTransDetailsItId
     * @var long
     */
    public $payTransDetailsItId;
    /**
     * The payTransDetailsPrice
     * @var float
     */
    public $payTransDetailsPrice;
    /**
     * The payTransDetailsCount
     * @var int
     */
    public $payTransDetailsCount;
    /**
     * Constructor method for PaymentDetailsStruct
     * @see parent::__construct()
     * @param long $_payTransDetailsItId
     * @param float $_payTransDetailsPrice
     * @param int $_payTransDetailsCount
     * @return AllegroStructPaymentDetailsStruct
     */
    public function __construct($_payTransDetailsItId = NULL,$_payTransDetailsPrice = NULL,$_payTransDetailsCount = NULL)
    {
        parent::__construct(array('payTransDetailsItId'=>$_payTransDetailsItId,'payTransDetailsPrice'=>$_payTransDetailsPrice,'payTransDetailsCount'=>$_payTransDetailsCount),false);
    }
    /**
     * Get payTransDetailsItId value
     * @return long|null
     */
    public function getPayTransDetailsItId()
    {
        return $this->payTransDetailsItId;
    }
    /**
     * Set payTransDetailsItId value
     * @param long $_payTransDetailsItId the payTransDetailsItId
     * @return long
     */
    public function setPayTransDetailsItId($_payTransDetailsItId)
    {
        return ($this->payTransDetailsItId = $_payTransDetailsItId);
    }
    /**
     * Get payTransDetailsPrice value
     * @return float|null
     */
    public function getPayTransDetailsPrice()
    {
        return $this->payTransDetailsPrice;
    }
    /**
     * Set payTransDetailsPrice value
     * @param float $_payTransDetailsPrice the payTransDetailsPrice
     * @return float
     */
    public function setPayTransDetailsPrice($_payTransDetailsPrice)
    {
        return ($this->payTransDetailsPrice = $_payTransDetailsPrice);
    }
    /**
     * Get payTransDetailsCount value
     * @return int|null
     */
    public function getPayTransDetailsCount()
    {
        return $this->payTransDetailsCount;
    }
    /**
     * Set payTransDetailsCount value
     * @param int $_payTransDetailsCount the payTransDetailsCount
     * @return int
     */
    public function setPayTransDetailsCount($_payTransDetailsCount)
    {
        return ($this->payTransDetailsCount = $_payTransDetailsCount);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPaymentDetailsStruct
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
