<?php
/**
 * File for class AllegroStructDoGetMyPaymentsRefundsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMyPaymentsRefundsResponse originally named doGetMyPaymentsRefundsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMyPaymentsRefundsResponse extends AllegroWsdlClass
{
    /**
     * The payTransPaymentRefunds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfUserpaymentrefundsstruct
     */
    public $payTransPaymentRefunds;
    /**
     * Constructor method for doGetMyPaymentsRefundsResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfUserpaymentrefundsstruct $_payTransPaymentRefunds
     * @return AllegroStructDoGetMyPaymentsRefundsResponse
     */
    public function __construct($_payTransPaymentRefunds = NULL)
    {
        parent::__construct(array('payTransPaymentRefunds'=>($_payTransPaymentRefunds instanceof AllegroStructArrayOfUserpaymentrefundsstruct)?$_payTransPaymentRefunds:new AllegroStructArrayOfUserpaymentrefundsstruct($_payTransPaymentRefunds)),false);
    }
    /**
     * Get payTransPaymentRefunds value
     * @return AllegroStructArrayOfUserpaymentrefundsstruct|null
     */
    public function getPayTransPaymentRefunds()
    {
        return $this->payTransPaymentRefunds;
    }
    /**
     * Set payTransPaymentRefunds value
     * @param AllegroStructArrayOfUserpaymentrefundsstruct $_payTransPaymentRefunds the payTransPaymentRefunds
     * @return AllegroStructArrayOfUserpaymentrefundsstruct
     */
    public function setPayTransPaymentRefunds($_payTransPaymentRefunds)
    {
        return ($this->payTransPaymentRefunds = $_payTransPaymentRefunds);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMyPaymentsRefundsResponse
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
