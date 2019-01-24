<?php
/**
 * File for class AllegroStructItemDescriptionStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructItemDescriptionStruct originally named ItemDescriptionStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructItemDescriptionStruct extends AllegroWsdlClass
{
    /**
     * The descriptionResult
     * @var string
     */
    public $descriptionResult;
    /**
     * Constructor method for ItemDescriptionStruct
     * @see parent::__construct()
     * @param string $_descriptionResult
     * @return AllegroStructItemDescriptionStruct
     */
    public function __construct($_descriptionResult = NULL)
    {
        parent::__construct(array('descriptionResult'=>$_descriptionResult),false);
    }
    /**
     * Get descriptionResult value
     * @return string|null
     */
    public function getDescriptionResult()
    {
        return $this->descriptionResult;
    }
    /**
     * Set descriptionResult value
     * @param string $_descriptionResult the descriptionResult
     * @return string
     */
    public function setDescriptionResult($_descriptionResult)
    {
        return ($this->descriptionResult = $_descriptionResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructItemDescriptionStruct
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
