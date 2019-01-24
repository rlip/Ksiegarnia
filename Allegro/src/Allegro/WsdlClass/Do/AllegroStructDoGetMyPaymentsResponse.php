<?php
/**
 * File for class AllegroStructDoGetMyPaymentsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMyPaymentsResponse originally named doGetMyPaymentsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMyPaymentsResponse extends AllegroWsdlClass
{
    /**
     * The payTransPayment
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfUserpaymentstruct
     */
    public $payTransPayment;
    /**
     * Constructor method for doGetMyPaymentsResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfUserpaymentstruct $_payTransPayment
     * @return AllegroStructDoGetMyPaymentsResponse
     */
    public function __construct($_payTransPayment = NULL)
    {
        parent::__construct(array('payTransPayment'=>($_payTransPayment instanceof AllegroStructArrayOfUserpaymentstruct)?$_payTransPayment:new AllegroStructArrayOfUserpaymentstruct($_payTransPayment)),false);
    }
    /**
     * Get payTransPayment value
     * @return AllegroStructArrayOfUserpaymentstruct|null
     */
    public function getPayTransPayment()
    {
        return $this->payTransPayment;
    }
    /**
     * Set payTransPayment value
     * @param AllegroStructArrayOfUserpaymentstruct $_payTransPayment the payTransPayment
     * @return AllegroStructArrayOfUserpaymentstruct
     */
    public function setPayTransPayment($_payTransPayment)
    {
        return ($this->payTransPayment = $_payTransPayment);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMyPaymentsResponse
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
