<?php
/**
 * File for class AllegroStructDoGetMyPaymentsInfoResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMyPaymentsInfoResponse originally named doGetMyPaymentsInfoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMyPaymentsInfoResponse extends AllegroWsdlClass
{
    /**
     * The paymentsInfo
     * @var AllegroStructPaymentsInfoStruct
     */
    public $paymentsInfo;
    /**
     * Constructor method for doGetMyPaymentsInfoResponse
     * @see parent::__construct()
     * @param AllegroStructPaymentsInfoStruct $_paymentsInfo
     * @return AllegroStructDoGetMyPaymentsInfoResponse
     */
    public function __construct($_paymentsInfo = NULL)
    {
        parent::__construct(array('paymentsInfo'=>$_paymentsInfo),false);
    }
    /**
     * Get paymentsInfo value
     * @return AllegroStructPaymentsInfoStruct|null
     */
    public function getPaymentsInfo()
    {
        return $this->paymentsInfo;
    }
    /**
     * Set paymentsInfo value
     * @param AllegroStructPaymentsInfoStruct $_paymentsInfo the paymentsInfo
     * @return AllegroStructPaymentsInfoStruct
     */
    public function setPaymentsInfo($_paymentsInfo)
    {
        return ($this->paymentsInfo = $_paymentsInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMyPaymentsInfoResponse
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
