<?php
/**
 * File for class AllegroStructCreatedItemTemplateStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructCreatedItemTemplateStruct originally named CreatedItemTemplateStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructCreatedItemTemplateStruct extends AllegroWsdlClass
{
    /**
     * The itemTemplateId
     * @var int
     */
    public $itemTemplateId;
    /**
     * Constructor method for CreatedItemTemplateStruct
     * @see parent::__construct()
     * @param int $_itemTemplateId
     * @return AllegroStructCreatedItemTemplateStruct
     */
    public function __construct($_itemTemplateId = NULL)
    {
        parent::__construct(array('itemTemplateId'=>$_itemTemplateId),false);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructCreatedItemTemplateStruct
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
