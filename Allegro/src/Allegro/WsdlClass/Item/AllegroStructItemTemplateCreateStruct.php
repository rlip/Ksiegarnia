<?php
/**
 * File for class AllegroStructItemTemplateCreateStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructItemTemplateCreateStruct originally named ItemTemplateCreateStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructItemTemplateCreateStruct extends AllegroWsdlClass
{
    /**
     * The itemTemplateOption
     * @var int
     */
    public $itemTemplateOption;
    /**
     * The itemTemplateName
     * @var string
     */
    public $itemTemplateName;
    /**
     * Constructor method for ItemTemplateCreateStruct
     * @see parent::__construct()
     * @param int $_itemTemplateOption
     * @param string $_itemTemplateName
     * @return AllegroStructItemTemplateCreateStruct
     */
    public function __construct($_itemTemplateOption = NULL,$_itemTemplateName = NULL)
    {
        parent::__construct(array('itemTemplateOption'=>$_itemTemplateOption,'itemTemplateName'=>$_itemTemplateName),false);
    }
    /**
     * Get itemTemplateOption value
     * @return int|null
     */
    public function getItemTemplateOption()
    {
        return $this->itemTemplateOption;
    }
    /**
     * Set itemTemplateOption value
     * @param int $_itemTemplateOption the itemTemplateOption
     * @return int
     */
    public function setItemTemplateOption($_itemTemplateOption)
    {
        return ($this->itemTemplateOption = $_itemTemplateOption);
    }
    /**
     * Get itemTemplateName value
     * @return string|null
     */
    public function getItemTemplateName()
    {
        return $this->itemTemplateName;
    }
    /**
     * Set itemTemplateName value
     * @param string $_itemTemplateName the itemTemplateName
     * @return string
     */
    public function setItemTemplateName($_itemTemplateName)
    {
        return ($this->itemTemplateName = $_itemTemplateName);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructItemTemplateCreateStruct
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
