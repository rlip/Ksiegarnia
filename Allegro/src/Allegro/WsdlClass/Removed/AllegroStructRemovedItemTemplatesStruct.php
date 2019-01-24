<?php
/**
 * File for class AllegroStructRemovedItemTemplatesStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructRemovedItemTemplatesStruct originally named RemovedItemTemplatesStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructRemovedItemTemplatesStruct extends AllegroWsdlClass
{
    /**
     * The itemTemplateIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfInt
     */
    public $itemTemplateIds;
    /**
     * The itemTemplateIncorrectIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfInt
     */
    public $itemTemplateIncorrectIds;
    /**
     * Constructor method for RemovedItemTemplatesStruct
     * @see parent::__construct()
     * @param AllegroStructArrayOfInt $_itemTemplateIds
     * @param AllegroStructArrayOfInt $_itemTemplateIncorrectIds
     * @return AllegroStructRemovedItemTemplatesStruct
     */
    public function __construct($_itemTemplateIds = NULL,$_itemTemplateIncorrectIds = NULL)
    {
        parent::__construct(array('itemTemplateIds'=>($_itemTemplateIds instanceof AllegroStructArrayOfInt)?$_itemTemplateIds:new AllegroStructArrayOfInt($_itemTemplateIds),'itemTemplateIncorrectIds'=>($_itemTemplateIncorrectIds instanceof AllegroStructArrayOfInt)?$_itemTemplateIncorrectIds:new AllegroStructArrayOfInt($_itemTemplateIncorrectIds)),false);
    }
    /**
     * Get itemTemplateIds value
     * @return AllegroStructArrayOfInt|null
     */
    public function getItemTemplateIds()
    {
        return $this->itemTemplateIds;
    }
    /**
     * Set itemTemplateIds value
     * @param AllegroStructArrayOfInt $_itemTemplateIds the itemTemplateIds
     * @return AllegroStructArrayOfInt
     */
    public function setItemTemplateIds($_itemTemplateIds)
    {
        return ($this->itemTemplateIds = $_itemTemplateIds);
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
     * @return AllegroStructRemovedItemTemplatesStruct
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
