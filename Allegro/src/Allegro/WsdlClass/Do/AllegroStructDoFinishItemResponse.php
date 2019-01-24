<?php
/**
 * File for class AllegroStructDoFinishItemResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoFinishItemResponse originally named doFinishItemResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoFinishItemResponse extends AllegroWsdlClass
{
    /**
     * The finishValue
     * @var int
     */
    public $finishValue;
    /**
     * Constructor method for doFinishItemResponse
     * @see parent::__construct()
     * @param int $_finishValue
     * @return AllegroStructDoFinishItemResponse
     */
    public function __construct($_finishValue = NULL)
    {
        parent::__construct(array('finishValue'=>$_finishValue),false);
    }
    /**
     * Get finishValue value
     * @return int|null
     */
    public function getFinishValue()
    {
        return $this->finishValue;
    }
    /**
     * Set finishValue value
     * @param int $_finishValue the finishValue
     * @return int
     */
    public function setFinishValue($_finishValue)
    {
        return ($this->finishValue = $_finishValue);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoFinishItemResponse
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
