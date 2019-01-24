<?php
/**
 * File for class AllegroStructArrayOfWaitfeedbackstruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructArrayOfWaitfeedbackstruct originally named ArrayOfWaitfeedbackstruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructArrayOfWaitfeedbackstruct extends AllegroWsdlClass
{
    /**
     * The item
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var AllegroStructWaitFeedbackStruct
     */
    public $item;
    /**
     * Constructor method for ArrayOfWaitfeedbackstruct
     * @see parent::__construct()
     * @param AllegroStructWaitFeedbackStruct $_item
     * @return AllegroStructArrayOfWaitfeedbackstruct
     */
    public function __construct($_item = NULL)
    {
        parent::__construct(array('item'=>$_item),false);
    }
    /**
     * Get item value
     * @return AllegroStructWaitFeedbackStruct|null
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * Set item value
     * @param AllegroStructWaitFeedbackStruct $_item the item
     * @return AllegroStructWaitFeedbackStruct
     */
    public function setItem($_item)
    {
        return ($this->item = $_item);
    }
    /**
     * Returns the current element
     * @see AllegroWsdlClass::current()
     * @return AllegroStructWaitFeedbackStruct
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AllegroWsdlClass::item()
     * @param int $_index
     * @return AllegroStructWaitFeedbackStruct
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see AllegroWsdlClass::first()
     * @return AllegroStructWaitFeedbackStruct
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AllegroWsdlClass::last()
     * @return AllegroStructWaitFeedbackStruct
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AllegroWsdlClass::last()
     * @param int $_offset
     * @return AllegroStructWaitFeedbackStruct
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
     * @return AllegroStructArrayOfWaitfeedbackstruct
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
