<?php
/**
 * File for class AllegroStructDoGetServiceTemplatesResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetServiceTemplatesResponse originally named doGetServiceTemplatesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetServiceTemplatesResponse extends AllegroWsdlClass
{
    /**
     * The templatesArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfTemplateinfotype
     */
    public $templatesArray;
    /**
     * Constructor method for doGetServiceTemplatesResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfTemplateinfotype $_templatesArray
     * @return AllegroStructDoGetServiceTemplatesResponse
     */
    public function __construct($_templatesArray = NULL)
    {
        parent::__construct(array('templatesArray'=>($_templatesArray instanceof AllegroStructArrayOfTemplateinfotype)?$_templatesArray:new AllegroStructArrayOfTemplateinfotype($_templatesArray)),false);
    }
    /**
     * Get templatesArray value
     * @return AllegroStructArrayOfTemplateinfotype|null
     */
    public function getTemplatesArray()
    {
        return $this->templatesArray;
    }
    /**
     * Set templatesArray value
     * @param AllegroStructArrayOfTemplateinfotype $_templatesArray the templatesArray
     * @return AllegroStructArrayOfTemplateinfotype
     */
    public function setTemplatesArray($_templatesArray)
    {
        return ($this->templatesArray = $_templatesArray);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetServiceTemplatesResponse
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
