<?php
/**
 * File for class AllegroStructDoCreateItemTemplateResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoCreateItemTemplateResponse originally named doCreateItemTemplateResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoCreateItemTemplateResponse extends AllegroWsdlClass
{
    /**
     * The createdItemTemplate
     * @var AllegroStructCreatedItemTemplateStruct
     */
    public $createdItemTemplate;
    /**
     * Constructor method for doCreateItemTemplateResponse
     * @see parent::__construct()
     * @param AllegroStructCreatedItemTemplateStruct $_createdItemTemplate
     * @return AllegroStructDoCreateItemTemplateResponse
     */
    public function __construct($_createdItemTemplate = NULL)
    {
        parent::__construct(array('createdItemTemplate'=>$_createdItemTemplate),false);
    }
    /**
     * Get createdItemTemplate value
     * @return AllegroStructCreatedItemTemplateStruct|null
     */
    public function getCreatedItemTemplate()
    {
        return $this->createdItemTemplate;
    }
    /**
     * Set createdItemTemplate value
     * @param AllegroStructCreatedItemTemplateStruct $_createdItemTemplate the createdItemTemplate
     * @return AllegroStructCreatedItemTemplateStruct
     */
    public function setCreatedItemTemplate($_createdItemTemplate)
    {
        return ($this->createdItemTemplate = $_createdItemTemplate);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoCreateItemTemplateResponse
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
