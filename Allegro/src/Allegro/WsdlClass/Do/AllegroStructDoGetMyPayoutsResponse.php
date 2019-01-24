<?php
/**
 * File for class AllegroStructDoGetMyPayoutsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMyPayoutsResponse originally named doGetMyPayoutsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMyPayoutsResponse extends AllegroWsdlClass
{
    /**
     * The payTransPayout
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfUserpayoutstruct
     */
    public $payTransPayout;
    /**
     * Constructor method for doGetMyPayoutsResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfUserpayoutstruct $_payTransPayout
     * @return AllegroStructDoGetMyPayoutsResponse
     */
    public function __construct($_payTransPayout = NULL)
    {
        parent::__construct(array('payTransPayout'=>($_payTransPayout instanceof AllegroStructArrayOfUserpayoutstruct)?$_payTransPayout:new AllegroStructArrayOfUserpayoutstruct($_payTransPayout)),false);
    }
    /**
     * Get payTransPayout value
     * @return AllegroStructArrayOfUserpayoutstruct|null
     */
    public function getPayTransPayout()
    {
        return $this->payTransPayout;
    }
    /**
     * Set payTransPayout value
     * @param AllegroStructArrayOfUserpayoutstruct $_payTransPayout the payTransPayout
     * @return AllegroStructArrayOfUserpayoutstruct
     */
    public function setPayTransPayout($_payTransPayout)
    {
        return ($this->payTransPayout = $_payTransPayout);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMyPayoutsResponse
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
