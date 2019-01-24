<?php
/**
 * File for class AllegroStructDoGetMyIncomingPaymentsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMyIncomingPaymentsResponse originally named doGetMyIncomingPaymentsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMyIncomingPaymentsResponse extends AllegroWsdlClass
{
    /**
     * The payTransIncome
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfUserincomingpaymentstruct
     */
    public $payTransIncome;
    /**
     * Constructor method for doGetMyIncomingPaymentsResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfUserincomingpaymentstruct $_payTransIncome
     * @return AllegroStructDoGetMyIncomingPaymentsResponse
     */
    public function __construct($_payTransIncome = NULL)
    {
        parent::__construct(array('payTransIncome'=>($_payTransIncome instanceof AllegroStructArrayOfUserincomingpaymentstruct)?$_payTransIncome:new AllegroStructArrayOfUserincomingpaymentstruct($_payTransIncome)),false);
    }
    /**
     * Get payTransIncome value
     * @return AllegroStructArrayOfUserincomingpaymentstruct|null
     */
    public function getPayTransIncome()
    {
        return $this->payTransIncome;
    }
    /**
     * Set payTransIncome value
     * @param AllegroStructArrayOfUserincomingpaymentstruct $_payTransIncome the payTransIncome
     * @return AllegroStructArrayOfUserincomingpaymentstruct
     */
    public function setPayTransIncome($_payTransIncome)
    {
        return ($this->payTransIncome = $_payTransIncome);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMyIncomingPaymentsResponse
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
