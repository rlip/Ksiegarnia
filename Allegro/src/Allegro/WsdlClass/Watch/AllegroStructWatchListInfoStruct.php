<?php
/**
 * File for class AllegroStructWatchListInfoStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructWatchListInfoStruct originally named WatchListInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructWatchListInfoStruct extends AllegroWsdlClass
{
    /**
     * The itemsAdded
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $itemsAdded;
    /**
     * The itemsNotAdded
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfItemsnotaddedstruct
     */
    public $itemsNotAdded;
    /**
     * Constructor method for WatchListInfoStruct
     * @see parent::__construct()
     * @param AllegroStructArrayOfLong $_itemsAdded
     * @param AllegroStructArrayOfItemsnotaddedstruct $_itemsNotAdded
     * @return AllegroStructWatchListInfoStruct
     */
    public function __construct($_itemsAdded = NULL,$_itemsNotAdded = NULL)
    {
        parent::__construct(array('itemsAdded'=>($_itemsAdded instanceof AllegroStructArrayOfLong)?$_itemsAdded:new AllegroStructArrayOfLong($_itemsAdded),'itemsNotAdded'=>($_itemsNotAdded instanceof AllegroStructArrayOfItemsnotaddedstruct)?$_itemsNotAdded:new AllegroStructArrayOfItemsnotaddedstruct($_itemsNotAdded)),false);
    }
    /**
     * Get itemsAdded value
     * @return AllegroStructArrayOfLong|null
     */
    public function getItemsAdded()
    {
        return $this->itemsAdded;
    }
    /**
     * Set itemsAdded value
     * @param AllegroStructArrayOfLong $_itemsAdded the itemsAdded
     * @return AllegroStructArrayOfLong
     */
    public function setItemsAdded($_itemsAdded)
    {
        return ($this->itemsAdded = $_itemsAdded);
    }
    /**
     * Get itemsNotAdded value
     * @return AllegroStructArrayOfItemsnotaddedstruct|null
     */
    public function getItemsNotAdded()
    {
        return $this->itemsNotAdded;
    }
    /**
     * Set itemsNotAdded value
     * @param AllegroStructArrayOfItemsnotaddedstruct $_itemsNotAdded the itemsNotAdded
     * @return AllegroStructArrayOfItemsnotaddedstruct
     */
    public function setItemsNotAdded($_itemsNotAdded)
    {
        return ($this->itemsNotAdded = $_itemsNotAdded);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructWatchListInfoStruct
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
