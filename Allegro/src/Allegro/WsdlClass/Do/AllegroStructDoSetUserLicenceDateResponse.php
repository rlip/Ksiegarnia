<?php
/**
 * File for class AllegroStructDoSetUserLicenceDateResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoSetUserLicenceDateResponse originally named doSetUserLicenceDateResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoSetUserLicenceDateResponse extends AllegroWsdlClass
{
    /**
     * The setDateValue
     * @var int
     */
    public $setDateValue;
    /**
     * Constructor method for doSetUserLicenceDateResponse
     * @see parent::__construct()
     * @param int $_setDateValue
     * @return AllegroStructDoSetUserLicenceDateResponse
     */
    public function __construct($_setDateValue = NULL)
    {
        parent::__construct(array('setDateValue'=>$_setDateValue),false);
    }
    /**
     * Get setDateValue value
     * @return int|null
     */
    public function getSetDateValue()
    {
        return $this->setDateValue;
    }
    /**
     * Set setDateValue value
     * @param int $_setDateValue the setDateValue
     * @return int
     */
    public function setSetDateValue($_setDateValue)
    {
        return ($this->setDateValue = $_setDateValue);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoSetUserLicenceDateResponse
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
