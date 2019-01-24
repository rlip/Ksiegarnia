<?php
/**
 * File for class AllegroStructDoGetMyIncomingPaymentsRefundsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMyIncomingPaymentsRefundsResponse originally named doGetMyIncomingPaymentsRefundsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMyIncomingPaymentsRefundsResponse extends AllegroWsdlClass
{
    /**
     * The payTransIncomeRefunds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfUserincomingpaymentrefundsstruct
     */
    public $payTransIncomeRefunds;
    /**
     * Constructor method for doGetMyIncomingPaymentsRefundsResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfUserincomingpaymentrefundsstruct $_payTransIncomeRefunds
     * @return AllegroStructDoGetMyIncomingPaymentsRefundsResponse
     */
    public function __construct($_payTransIncomeRefunds = NULL)
    {
        parent::__construct(array('payTransIncomeRefunds'=>($_payTransIncomeRefunds instanceof AllegroStructArrayOfUserincomingpaymentrefundsstruct)?$_payTransIncomeRefunds:new AllegroStructArrayOfUserincomingpaymentrefundsstruct($_payTransIncomeRefunds)),false);
    }
    /**
     * Get payTransIncomeRefunds value
     * @return AllegroStructArrayOfUserincomingpaymentrefundsstruct|null
     */
    public function getPayTransIncomeRefunds()
    {
        return $this->payTransIncomeRefunds;
    }
    /**
     * Set payTransIncomeRefunds value
     * @param AllegroStructArrayOfUserincomingpaymentrefundsstruct $_payTransIncomeRefunds the payTransIncomeRefunds
     * @return AllegroStructArrayOfUserincomingpaymentrefundsstruct
     */
    public function setPayTransIncomeRefunds($_payTransIncomeRefunds)
    {
        return ($this->payTransIncomeRefunds = $_payTransIncomeRefunds);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMyIncomingPaymentsRefundsResponse
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
