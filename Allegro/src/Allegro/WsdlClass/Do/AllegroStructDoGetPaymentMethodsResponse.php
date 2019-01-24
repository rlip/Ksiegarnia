<?php
/**
 * File for class AllegroStructDoGetPaymentMethodsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetPaymentMethodsResponse originally named doGetPaymentMethodsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetPaymentMethodsResponse extends AllegroWsdlClass
{
    /**
     * The paymentMethods
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfPaymentmethodstruct
     */
    public $paymentMethods;
    /**
     * Constructor method for doGetPaymentMethodsResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfPaymentmethodstruct $_paymentMethods
     * @return AllegroStructDoGetPaymentMethodsResponse
     */
    public function __construct($_paymentMethods = NULL)
    {
        parent::__construct(array('paymentMethods'=>($_paymentMethods instanceof AllegroStructArrayOfPaymentmethodstruct)?$_paymentMethods:new AllegroStructArrayOfPaymentmethodstruct($_paymentMethods)),false);
    }
    /**
     * Get paymentMethods value
     * @return AllegroStructArrayOfPaymentmethodstruct|null
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }
    /**
     * Set paymentMethods value
     * @param AllegroStructArrayOfPaymentmethodstruct $_paymentMethods the paymentMethods
     * @return AllegroStructArrayOfPaymentmethodstruct
     */
    public function setPaymentMethods($_paymentMethods)
    {
        return ($this->paymentMethods = $_paymentMethods);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetPaymentMethodsResponse
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
