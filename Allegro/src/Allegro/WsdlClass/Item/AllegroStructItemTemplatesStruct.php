<?php
/**
 * File for class AllegroStructItemTemplatesStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructItemTemplatesStruct originally named ItemTemplatesStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructItemTemplatesStruct extends AllegroWsdlClass
{
    /**
     * The itemTemplateList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfItemtemplateliststruct
     */
    public $itemTemplateList;
    /**
     * The itemTemplateIncorrectIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfInt
     */
    public $itemTemplateIncorrectIds;
    /**
     * Constructor method for ItemTemplatesStruct
     * @see parent::__construct()
     * @param AllegroStructArrayOfItemtemplateliststruct $_itemTemplateList
     * @param AllegroStructArrayOfInt $_itemTemplateIncorrectIds
     * @return AllegroStructItemTemplatesStruct
     */
    public function __construct($_itemTemplateList = NULL,$_itemTemplateIncorrectIds = NULL)
    {
        parent::__construct(array('itemTemplateList'=>($_itemTemplateList instanceof AllegroStructArrayOfItemtemplateliststruct)?$_itemTemplateList:new AllegroStructArrayOfItemtemplateliststruct($_itemTemplateList),'itemTemplateIncorrectIds'=>($_itemTemplateIncorrectIds instanceof AllegroStructArrayOfInt)?$_itemTemplateIncorrectIds:new AllegroStructArrayOfInt($_itemTemplateIncorrectIds)),false);
    }
    /**
     * Get itemTemplateList value
     * @return AllegroStructArrayOfItemtemplateliststruct|null
     */
    public function getItemTemplateList()
    {
        return $this->itemTemplateList;
    }
    /**
     * Set itemTemplateList value
     * @param AllegroStructArrayOfItemtemplateliststruct $_itemTemplateList the itemTemplateList
     * @return AllegroStructArrayOfItemtemplateliststruct
     */
    public function setItemTemplateList($_itemTemplateList)
    {
        return ($this->itemTemplateList = $_itemTemplateList);
    }
    /**
     * Get itemTemplateIncorrectIds value
     * @return AllegroStructArrayOfInt|null
     */
    public function getItemTemplateIncorrectIds()
    {
        return $this->itemTemplateIncorrectIds;
    }
    /**
     * Set itemTemplateIncorrectIds value
     * @param AllegroStructArrayOfInt $_itemTemplateIncorrectIds the itemTemplateIncorrectIds
     * @return AllegroStructArrayOfInt
     */
    public function setItemTemplateIncorrectIds($_itemTemplateIncorrectIds)
    {
        return ($this->itemTemplateIncorrectIds = $_itemTemplateIncorrectIds);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructItemTemplatesStruct
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
