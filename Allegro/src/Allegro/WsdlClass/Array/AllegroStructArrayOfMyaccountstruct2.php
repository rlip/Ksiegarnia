<?php
/**
 * File for class AllegroStructArrayOfMyaccountstruct2
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructArrayOfMyaccountstruct2 originally named ArrayOfMyaccountstruct2
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructArrayOfMyaccountstruct2 extends AllegroWsdlClass
{
    /**
     * The item
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var AllegroStructMyAccountStruct2
     */
    public $item;
    /**
     * Constructor method for ArrayOfMyaccountstruct2
     * @see parent::__construct()
     * @param AllegroStructMyAccountStruct2 $_item
     * @return AllegroStructArrayOfMyaccountstruct2
     */
    public function __construct($_item = NULL)
    {
        parent::__construct(array('item'=>$_item),false);
    }
    /**
     * Get item value
     * @return AllegroStructMyAccountStruct2|null
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * Set item value
     * @param AllegroStructMyAccountStruct2 $_item the item
     * @return AllegroStructMyAccountStruct2
     */
    public function setItem($_item)
    {
        return ($this->item = $_item);
    }
    /**
     * Returns the current element
     * @see AllegroWsdlClass::current()
     * @return AllegroStructMyAccountStruct2
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AllegroWsdlClass::item()
     * @param int $_index
     * @return AllegroStructMyAccountStruct2
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see AllegroWsdlClass::first()
     * @return AllegroStructMyAccountStruct2
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AllegroWsdlClass::last()
     * @return AllegroStructMyAccountStruct2
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AllegroWsdlClass::last()
     * @param int $_offset
     * @return AllegroStructMyAccountStruct2
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see AllegroWsdlClass::getAttributeName()
     * @return string item
     */
    public function getAttributeName()
    {
        return 'item';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructArrayOfMyaccountstruct2
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
