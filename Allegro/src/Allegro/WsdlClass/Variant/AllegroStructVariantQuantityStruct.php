<?php
/**
 * File for class AllegroStructVariantQuantityStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructVariantQuantityStruct originally named VariantQuantityStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructVariantQuantityStruct extends AllegroWsdlClass
{
    /**
     * The mask
     * @var int
     */
    public $mask;
    /**
     * The quantity
     * @var int
     */
    public $quantity;
    /**
     * Constructor method for VariantQuantityStruct
     * @see parent::__construct()
     * @param int $_mask
     * @param int $_quantity
     * @return AllegroStructVariantQuantityStruct
     */
    public function __construct($_mask = NULL,$_quantity = NULL)
    {
        parent::__construct(array('mask'=>$_mask,'quantity'=>$_quantity),false);
    }
    /**
     * Get mask value
     * @return int|null
     */
    public function getMask()
    {
        return $this->mask;
    }
    /**
     * Set mask value
     * @param int $_mask the mask
     * @return int
     */
    public function setMask($_mask)
    {
        return ($this->mask = $_mask);
    }
    /**
     * Get quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param int $_quantity the quantity
     * @return int
     */
    public function setQuantity($_quantity)
    {
        return ($this->quantity = $_quantity);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructVariantQuantityStruct
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
