<?php
/**
 * File for class AllegroStructDoChangeItemFieldsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoChangeItemFieldsResponse originally named doChangeItemFieldsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoChangeItemFieldsResponse extends AllegroWsdlClass
{
    /**
     * The changedItem
     * @var AllegroStructChangedItemStruct
     */
    public $changedItem;
    /**
     * Constructor method for doChangeItemFieldsResponse
     * @see parent::__construct()
     * @param AllegroStructChangedItemStruct $_changedItem
     * @return AllegroStructDoChangeItemFieldsResponse
     */
    public function __construct($_changedItem = NULL)
    {
        parent::__construct(array('changedItem'=>$_changedItem),false);
    }
    /**
     * Get changedItem value
     * @return AllegroStructChangedItemStruct|null
     */
    public function getChangedItem()
    {
        return $this->changedItem;
    }
    /**
     * Set changedItem value
     * @param AllegroStructChangedItemStruct $_changedItem the changedItem
     * @return AllegroStructChangedItemStruct
     */
    public function setChangedItem($_changedItem)
    {
        return ($this->changedItem = $_changedItem);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoChangeItemFieldsResponse
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
