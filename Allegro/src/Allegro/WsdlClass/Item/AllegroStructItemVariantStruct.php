<?php
/**
 * File for class AllegroStructItemVariantStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructItemVariantStruct originally named ItemVariantStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructItemVariantStruct extends AllegroWsdlClass
{
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * The quantity
     * @var int
     */
    public $quantity;
    /**
     * The attributes
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfItemvariantattributestruct
     */
    public $attributes;
    /**
     * Constructor method for ItemVariantStruct
     * @see parent::__construct()
     * @param string $_id
     * @param int $_quantity
     * @param AllegroStructArrayOfItemvariantattributestruct $_attributes
     * @return AllegroStructItemVariantStruct
     */
    public function __construct($_id = NULL,$_quantity = NULL,$_attributes = NULL)
    {
        parent::__construct(array('id'=>$_id,'quantity'=>$_quantity,'attributes'=>($_attributes instanceof AllegroStructArrayOfItemvariantattributestruct)?$_attributes:new AllegroStructArrayOfItemvariantattributestruct($_attributes)),false);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $_id the id
     * @return string
     */
    public function setId($_id)
    {
        return ($this->id = $_id);
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
     * Get attributes value
     * @return AllegroStructArrayOfItemvariantattributestruct|null
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
    /**
     * Set attributes value
     * @param AllegroStructArrayOfItemvariantattributestruct $_attributes the attributes
     * @return AllegroStructArrayOfItemvariantattributestruct
     */
    public function setAttributes($_attributes)
    {
        return ($this->attributes = $_attributes);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructItemVariantStruct
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
