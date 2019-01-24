<?php
/**
 * File for class AllegroStructDoGetPaymentDataResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetPaymentDataResponse originally named doGetPaymentDataResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetPaymentDataResponse extends AllegroWsdlClass
{
    /**
     * The paymentList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfBillingdatatype
     */
    public $paymentList;
    /**
     * Constructor method for doGetPaymentDataResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfBillingdatatype $_paymentList
     * @return AllegroStructDoGetPaymentDataResponse
     */
    public function __construct($_paymentList = NULL)
    {
        parent::__construct(array('paymentList'=>($_paymentList instanceof AllegroStructArrayOfBillingdatatype)?$_paymentList:new AllegroStructArrayOfBillingdatatype($_paymentList)),false);
    }
    /**
     * Get paymentList value
     * @return AllegroStructArrayOfBillingdatatype|null
     */
    public function getPaymentList()
    {
        return $this->paymentList;
    }
    /**
     * Set paymentList value
     * @param AllegroStructArrayOfBillingdatatype $_paymentList the paymentList
     * @return AllegroStructArrayOfBillingdatatype
     */
    public function setPaymentList($_paymentList)
    {
        return ($this->paymentList = $_paymentList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetPaymentDataResponse
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
