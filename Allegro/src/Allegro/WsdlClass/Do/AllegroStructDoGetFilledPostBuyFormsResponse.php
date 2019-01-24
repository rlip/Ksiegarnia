<?php
/**
 * File for class AllegroStructDoGetFilledPostBuyFormsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetFilledPostBuyFormsResponse originally named doGetFilledPostBuyFormsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetFilledPostBuyFormsResponse extends AllegroWsdlClass
{
    /**
     * The filledPostBuyForms
     * @var AllegroStructFilledPostBuyFormsStruct
     */
    public $filledPostBuyForms;
    /**
     * Constructor method for doGetFilledPostBuyFormsResponse
     * @see parent::__construct()
     * @param AllegroStructFilledPostBuyFormsStruct $_filledPostBuyForms
     * @return AllegroStructDoGetFilledPostBuyFormsResponse
     */
    public function __construct($_filledPostBuyForms = NULL)
    {
        parent::__construct(array('filledPostBuyForms'=>$_filledPostBuyForms),false);
    }
    /**
     * Get filledPostBuyForms value
     * @return AllegroStructFilledPostBuyFormsStruct|null
     */
    public function getFilledPostBuyForms()
    {
        return $this->filledPostBuyForms;
    }
    /**
     * Set filledPostBuyForms value
     * @param AllegroStructFilledPostBuyFormsStruct $_filledPostBuyForms the filledPostBuyForms
     * @return AllegroStructFilledPostBuyFormsStruct
     */
    public function setFilledPostBuyForms($_filledPostBuyForms)
    {
        return ($this->filledPostBuyForms = $_filledPostBuyForms);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetFilledPostBuyFormsResponse
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
