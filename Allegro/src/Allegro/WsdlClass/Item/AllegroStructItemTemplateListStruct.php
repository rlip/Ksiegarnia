<?php
/**
 * File for class AllegroStructItemTemplateListStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructItemTemplateListStruct originally named ItemTemplateListStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructItemTemplateListStruct extends AllegroWsdlClass
{
    /**
     * The itemTemplateId
     * @var int
     */
    public $itemTemplateId;
    /**
     * The itemTemplateName
     * @var string
     */
    public $itemTemplateName;
    /**
     * The itemTemplateFields
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFieldsvalue
     */
    public $itemTemplateFields;
    /**
     * Constructor method for ItemTemplateListStruct
     * @see parent::__construct()
     * @param int $_itemTemplateId
     * @param string $_itemTemplateName
     * @param AllegroStructArrayOfFieldsvalue $_itemTemplateFields
     * @return AllegroStructItemTemplateListStruct
     */
    public function __construct($_itemTemplateId = NULL,$_itemTemplateName = NULL,$_itemTemplateFields = NULL)
    {
        parent::__construct(array('itemTemplateId'=>$_itemTemplateId,'itemTemplateName'=>$_itemTemplateName,'itemTemplateFields'=>($_itemTemplateFields instanceof AllegroStructArrayOfFieldsvalue)?$_itemTemplateFields:new AllegroStructArrayOfFieldsvalue($_itemTemplateFields)),false);
    }
    /**
     * Get itemTemplateId value
     * @return int|null
     */
    public function getItemTemplateId()
    {
        return $this->itemTemplateId;
    }
    /**
     * Set itemTemplateId value
     * @param int $_itemTemplateId the itemTemplateId
     * @return int
     */
    public function setItemTemplateId($_itemTemplateId)
    {
        return ($this->itemTemplateId = $_itemTemplateId);
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
     * Get itemTemplateFields value
     * @return AllegroStructArrayOfFieldsvalue|null
     */
    public function getItemTemplateFields()
    {
        return $this->itemTemplateFields;
    }
    /**
     * Set itemTemplateFields value
     * @param AllegroStructArrayOfFieldsvalue $_itemTemplateFields the itemTemplateFields
     * @return AllegroStructArrayOfFieldsvalue
     */
    public function setItemTemplateFields($_itemTemplateFields)
    {
        return ($this->itemTemplateFields = $_itemTemplateFields);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructItemTemplateListStruct
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
