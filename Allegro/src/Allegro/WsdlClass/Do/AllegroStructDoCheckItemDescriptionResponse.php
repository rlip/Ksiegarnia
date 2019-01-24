<?php
/**
 * File for class AllegroStructDoCheckItemDescriptionResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoCheckItemDescriptionResponse originally named doCheckItemDescriptionResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoCheckItemDescriptionResponse extends AllegroWsdlClass
{
    /**
     * The itemDescription
     * @var AllegroStructItemDescriptionStruct
     */
    public $itemDescription;
    /**
     * Constructor method for doCheckItemDescriptionResponse
     * @see parent::__construct()
     * @param AllegroStructItemDescriptionStruct $_itemDescription
     * @return AllegroStructDoCheckItemDescriptionResponse
     */
    public function __construct($_itemDescription = NULL)
    {
        parent::__construct(array('itemDescription'=>$_itemDescription),false);
    }
    /**
     * Get itemDescription value
     * @return AllegroStructItemDescriptionStruct|null
     */
    public function getItemDescription()
    {
        return $this->itemDescription;
    }
    /**
     * Set itemDescription value
     * @param AllegroStructItemDescriptionStruct $_itemDescription the itemDescription
     * @return AllegroStructItemDescriptionStruct
     */
    public function setItemDescription($_itemDescription)
    {
        return ($this->itemDescription = $_itemDescription);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoCheckItemDescriptionResponse
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
