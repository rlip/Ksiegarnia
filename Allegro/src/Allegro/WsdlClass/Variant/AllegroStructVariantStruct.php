<?php
/**
 * File for class AllegroStructVariantStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructVariantStruct originally named VariantStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructVariantStruct extends AllegroWsdlClass
{
    /**
     * The fid
     * @var int
     */
    public $fid;
    /**
     * The quantities
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfVariantquantitystruct
     */
    public $quantities;
    /**
     * Constructor method for VariantStruct
     * @see parent::__construct()
     * @param int $_fid
     * @param AllegroStructArrayOfVariantquantitystruct $_quantities
     * @return AllegroStructVariantStruct
     */
    public function __construct($_fid = NULL,$_quantities = NULL)
    {
        parent::__construct(array('fid'=>$_fid,'quantities'=>($_quantities instanceof AllegroStructArrayOfVariantquantitystruct)?$_quantities:new AllegroStructArrayOfVariantquantitystruct($_quantities)),false);
    }
    /**
     * Get fid value
     * @return int|null
     */
    public function getFid()
    {
        return $this->fid;
    }
    /**
     * Set fid value
     * @param int $_fid the fid
     * @return int
     */
    public function setFid($_fid)
    {
        return ($this->fid = $_fid);
    }
    /**
     * Get quantities value
     * @return AllegroStructArrayOfVariantquantitystruct|null
     */
    public function getQuantities()
    {
        return $this->quantities;
    }
    /**
     * Set quantities value
     * @param AllegroStructArrayOfVariantquantitystruct $_quantities the quantities
     * @return AllegroStructArrayOfVariantquantitystruct
     */
    public function setQuantities($_quantities)
    {
        return ($this->quantities = $_quantities);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructVariantStruct
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
