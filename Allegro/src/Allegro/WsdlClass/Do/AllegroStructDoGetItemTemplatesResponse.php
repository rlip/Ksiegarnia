<?php
/**
 * File for class AllegroStructDoGetItemTemplatesResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetItemTemplatesResponse originally named doGetItemTemplatesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetItemTemplatesResponse extends AllegroWsdlClass
{
    /**
     * The itemTemplates
     * @var AllegroStructItemTemplatesStruct
     */
    public $itemTemplates;
    /**
     * Constructor method for doGetItemTemplatesResponse
     * @see parent::__construct()
     * @param AllegroStructItemTemplatesStruct $_itemTemplates
     * @return AllegroStructDoGetItemTemplatesResponse
     */
    public function __construct($_itemTemplates = NULL)
    {
        parent::__construct(array('itemTemplates'=>$_itemTemplates),false);
    }
    /**
     * Get itemTemplates value
     * @return AllegroStructItemTemplatesStruct|null
     */
    public function getItemTemplates()
    {
        return $this->itemTemplates;
    }
    /**
     * Set itemTemplates value
     * @param AllegroStructItemTemplatesStruct $_itemTemplates the itemTemplates
     * @return AllegroStructItemTemplatesStruct
     */
    public function setItemTemplates($_itemTemplates)
    {
        return ($this->itemTemplates = $_itemTemplates);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetItemTemplatesResponse
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
