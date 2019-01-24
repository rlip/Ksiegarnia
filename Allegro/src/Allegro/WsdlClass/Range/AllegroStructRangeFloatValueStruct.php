<?php
/**
 * File for class AllegroStructRangeFloatValueStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructRangeFloatValueStruct originally named RangeFloatValueStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructRangeFloatValueStruct extends AllegroWsdlClass
{
    /**
     * The fvalueRangeFloatMin
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var float
     */
    public $fvalueRangeFloatMin;
    /**
     * The fvalueRangeFloatMax
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var float
     */
    public $fvalueRangeFloatMax;
    /**
     * Constructor method for RangeFloatValueStruct
     * @see parent::__construct()
     * @param float $_fvalueRangeFloatMin
     * @param float $_fvalueRangeFloatMax
     * @return AllegroStructRangeFloatValueStruct
     */
    public function __construct($_fvalueRangeFloatMin = NULL,$_fvalueRangeFloatMax = NULL)
    {
        parent::__construct(array('fvalueRangeFloatMin'=>$_fvalueRangeFloatMin,'fvalueRangeFloatMax'=>$_fvalueRangeFloatMax),false);
    }
    /**
     * Get fvalueRangeFloatMin value
     * @return float|null
     */
    public function getFvalueRangeFloatMin()
    {
        return $this->fvalueRangeFloatMin;
    }
    /**
     * Set fvalueRangeFloatMin value
     * @param float $_fvalueRangeFloatMin the fvalueRangeFloatMin
     * @return float
     */
    public function setFvalueRangeFloatMin($_fvalueRangeFloatMin)
    {
        return ($this->fvalueRangeFloatMin = $_fvalueRangeFloatMin);
    }
    /**
     * Get fvalueRangeFloatMax value
     * @return float|null
     */
    public function getFvalueRangeFloatMax()
    {
        return $this->fvalueRangeFloatMax;
    }
    /**
     * Set fvalueRangeFloatMax value
     * @param float $_fvalueRangeFloatMax the fvalueRangeFloatMax
     * @return float
     */
    public function setFvalueRangeFloatMax($_fvalueRangeFloatMax)
    {
        return ($this->fvalueRangeFloatMax = $_fvalueRangeFloatMax);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructRangeFloatValueStruct
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
