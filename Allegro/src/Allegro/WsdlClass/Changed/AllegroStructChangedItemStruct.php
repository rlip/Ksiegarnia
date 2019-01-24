<?php
/**
 * File for class AllegroStructChangedItemStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructChangedItemStruct originally named ChangedItemStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructChangedItemStruct extends AllegroWsdlClass
{
    /**
     * The itemId
     * @var long
     */
    public $itemId;
    /**
     * The itemFields
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFieldsvalue
     */
    public $itemFields;
    /**
     * The itemSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfItemsurchargestruct
     */
    public $itemSurcharge;
    /**
     * Constructor method for ChangedItemStruct
     * @see parent::__construct()
     * @param long $_itemId
     * @param AllegroStructArrayOfFieldsvalue $_itemFields
     * @param AllegroStructArrayOfItemsurchargestruct $_itemSurcharge
     * @return AllegroStructChangedItemStruct
     */
    public function __construct($_itemId = NULL,$_itemFields = NULL,$_itemSurcharge = NULL)
    {
        parent::__construct(array('itemId'=>$_itemId,'itemFields'=>($_itemFields instanceof AllegroStructArrayOfFieldsvalue)?$_itemFields:new AllegroStructArrayOfFieldsvalue($_itemFields),'itemSurcharge'=>($_itemSurcharge instanceof AllegroStructArrayOfItemsurchargestruct)?$_itemSurcharge:new AllegroStructArrayOfItemsurchargestruct($_itemSurcharge)),false);
    }
    /**
     * Get itemId value
     * @return long|null
     */
    public function getItemId()
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param long $_itemId the itemId
     * @return long
     */
    public function setItemId($_itemId)
    {
        return ($this->itemId = $_itemId);
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
     * Get itemSurcharge value
     * @return AllegroStructArrayOfItemsurchargestruct|null
     */
    public function getItemSurcharge()
    {
        return $this->itemSurcharge;
    }
    /**
     * Set itemSurcharge value
     * @param AllegroStructArrayOfItemsurchargestruct $_itemSurcharge the itemSurcharge
     * @return AllegroStructArrayOfItemsurchargestruct
     */
    public function setItemSurcharge($_itemSurcharge)
    {
        return ($this->itemSurcharge = $_itemSurcharge);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructChangedItemStruct
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
