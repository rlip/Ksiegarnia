<?php
/**
 * File for class AllegroStructPaymentMethodStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPaymentMethodStruct originally named PaymentMethodStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPaymentMethodStruct extends AllegroWsdlClass
{
    /**
     * The paymentMethodId
     * @var string
     */
    public $paymentMethodId;
    /**
     * The paymentMethodName
     * @var string
     */
    public $paymentMethodName;
    /**
     * The paymentMethodImage
     * @var string
     */
    public $paymentMethodImage;
    /**
     * The paymentMethodUsage
     * @var int
     */
    public $paymentMethodUsage;
    /**
     * Constructor method for PaymentMethodStruct
     * @see parent::__construct()
     * @param string $_paymentMethodId
     * @param string $_paymentMethodName
     * @param string $_paymentMethodImage
     * @param int $_paymentMethodUsage
     * @return AllegroStructPaymentMethodStruct
     */
    public function __construct($_paymentMethodId = NULL,$_paymentMethodName = NULL,$_paymentMethodImage = NULL,$_paymentMethodUsage = NULL)
    {
        parent::__construct(array('paymentMethodId'=>$_paymentMethodId,'paymentMethodName'=>$_paymentMethodName,'paymentMethodImage'=>$_paymentMethodImage,'paymentMethodUsage'=>$_paymentMethodUsage),false);
    }
    /**
     * Get paymentMethodId value
     * @return string|null
     */
    public function getPaymentMethodId()
    {
        return $this->paymentMethodId;
    }
    /**
     * Set paymentMethodId value
     * @param string $_paymentMethodId the paymentMethodId
     * @return string
     */
    public function setPaymentMethodId($_paymentMethodId)
    {
        return ($this->paymentMethodId = $_paymentMethodId);
    }
    /**
     * Get paymentMethodName value
     * @return string|null
     */
    public function getPaymentMethodName()
    {
        return $this->paymentMethodName;
    }
    /**
     * Set paymentMethodName value
     * @param string $_paymentMethodName the paymentMethodName
     * @return string
     */
    public function setPaymentMethodName($_paymentMethodName)
    {
        return ($this->paymentMethodName = $_paymentMethodName);
    }
    /**
     * Get paymentMethodImage value
     * @return string|null
     */
    public function getPaymentMethodImage()
    {
        return $this->paymentMethodImage;
    }
    /**
     * Set paymentMethodImage value
     * @param string $_paymentMethodImage the paymentMethodImage
     * @return string
     */
    public function setPaymentMethodImage($_paymentMethodImage)
    {
        return ($this->paymentMethodImage = $_paymentMethodImage);
    }
    /**
     * Get paymentMethodUsage value
     * @return int|null
     */
    public function getPaymentMethodUsage()
    {
        return $this->paymentMethodUsage;
    }
    /**
     * Set paymentMethodUsage value
     * @param int $_paymentMethodUsage the paymentMethodUsage
     * @return int
     */
    public function setPaymentMethodUsage($_paymentMethodUsage)
    {
        return ($this->paymentMethodUsage = $_paymentMethodUsage);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPaymentMethodStruct
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
