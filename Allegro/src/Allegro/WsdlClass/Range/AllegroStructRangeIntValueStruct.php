<?php
/**
 * File for class AllegroStructRangeIntValueStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructRangeIntValueStruct originally named RangeIntValueStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructRangeIntValueStruct extends AllegroWsdlClass
{
    /**
     * The fvalueRangeIntMin
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $fvalueRangeIntMin;
    /**
     * The fvalueRangeIntMax
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $fvalueRangeIntMax;
    /**
     * Constructor method for RangeIntValueStruct
     * @see parent::__construct()
     * @param int $_fvalueRangeIntMin
     * @param int $_fvalueRangeIntMax
     * @return AllegroStructRangeIntValueStruct
     */
    public function __construct($_fvalueRangeIntMin = NULL,$_fvalueRangeIntMax = NULL)
    {
        parent::__construct(array('fvalueRangeIntMin'=>$_fvalueRangeIntMin,'fvalueRangeIntMax'=>$_fvalueRangeIntMax),false);
    }
    /**
     * Get fvalueRangeIntMin value
     * @return int|null
     */
    public function getFvalueRangeIntMin()
    {
        return $this->fvalueRangeIntMin;
    }
    /**
     * Set fvalueRangeIntMin value
     * @param int $_fvalueRangeIntMin the fvalueRangeIntMin
     * @return int
     */
    public function setFvalueRangeIntMin($_fvalueRangeIntMin)
    {
        return ($this->fvalueRangeIntMin = $_fvalueRangeIntMin);
    }
    /**
     * Get fvalueRangeIntMax value
     * @return int|null
     */
    public function getFvalueRangeIntMax()
    {
        return $this->fvalueRangeIntMax;
    }
    /**
     * Set fvalueRangeIntMax value
     * @param int $_fvalueRangeIntMax the fvalueRangeIntMax
     * @return int
     */
    public function setFvalueRangeIntMax($_fvalueRangeIntMax)
    {
        return ($this->fvalueRangeIntMax = $_fvalueRangeIntMax);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructRangeIntValueStruct
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
