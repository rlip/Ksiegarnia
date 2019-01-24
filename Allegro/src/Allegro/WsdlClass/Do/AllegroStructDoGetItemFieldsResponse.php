<?php
/**
 * File for class AllegroStructDoGetItemFieldsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetItemFieldsResponse originally named doGetItemFieldsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetItemFieldsResponse extends AllegroWsdlClass
{
    /**
     * The itemFields
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFieldsvalue
     */
    public $itemFields;
    /**
     * Constructor method for doGetItemFieldsResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfFieldsvalue $_itemFields
     * @return AllegroStructDoGetItemFieldsResponse
     */
    public function __construct($_itemFields = NULL)
    {
        parent::__construct(array('itemFields'=>($_itemFields instanceof AllegroStructArrayOfFieldsvalue)?$_itemFields:new AllegroStructArrayOfFieldsvalue($_itemFields)),false);
    }
    /**
     * Get itemFields value
     * @return AllegroStructArrayOfFieldsvalue|null
     */
    public function getItemFields()
    {
        return $this->itemFields;
    }
    /**
     * Set itemFields value
     * @param AllegroStructArrayOfFieldsvalue $_itemFields the itemFields
     * @return AllegroStructArrayOfFieldsvalue
     */
    public function setItemFields($_itemFields)
    {
        return ($this->itemFields = $_itemFields);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetItemFieldsResponse
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
