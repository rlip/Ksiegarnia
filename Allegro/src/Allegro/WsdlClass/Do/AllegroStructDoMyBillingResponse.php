<?php
/**
 * File for class AllegroStructDoMyBillingResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoMyBillingResponse originally named doMyBillingResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoMyBillingResponse extends AllegroWsdlClass
{
    /**
     * The myBilling
     * @var string
     */
    public $myBilling;
    /**
     * Constructor method for doMyBillingResponse
     * @see parent::__construct()
     * @param string $_myBilling
     * @return AllegroStructDoMyBillingResponse
     */
    public function __construct($_myBilling = NULL)
    {
        parent::__construct(array('myBilling'=>$_myBilling),false);
    }
    /**
     * Get myBilling value
     * @return string|null
     */
    public function getMyBilling()
    {
        return $this->myBilling;
    }
    /**
     * Set myBilling value
     * @param string $_myBilling the myBilling
     * @return string
     */
    public function setMyBilling($_myBilling)
    {
        return ($this->myBilling = $_myBilling);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoMyBillingResponse
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
