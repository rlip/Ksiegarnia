<?php
/**
 * File for class AllegroStructRangeValueType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructRangeValueType originally named RangeValueType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructRangeValueType extends AllegroWsdlClass
{
    /**
     * The rangeValueMin
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $rangeValueMin;
    /**
     * The rangeValueMax
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $rangeValueMax;
    /**
     * Constructor method for RangeValueType
     * @see parent::__construct()
     * @param string $_rangeValueMin
     * @param string $_rangeValueMax
     * @return AllegroStructRangeValueType
     */
    public function __construct($_rangeValueMin = NULL,$_rangeValueMax = NULL)
    {
        parent::__construct(array('rangeValueMin'=>$_rangeValueMin,'rangeValueMax'=>$_rangeValueMax),false);
    }
    /**
     * Get rangeValueMin value
     * @return string|null
     */
    public function getRangeValueMin()
    {
        return $this->rangeValueMin;
    }
    /**
     * Set rangeValueMin value
     * @param string $_rangeValueMin the rangeValueMin
     * @return string
     */
    public function setRangeValueMin($_rangeValueMin)
    {
        return ($this->rangeValueMin = $_rangeValueMin);
    }
    /**
     * Get rangeValueMax value
     * @return string|null
     */
    public function getRangeValueMax()
    {
        return $this->rangeValueMax;
    }
    /**
     * Set rangeValueMax value
     * @param string $_rangeValueMax the rangeValueMax
     * @return string
     */
    public function setRangeValueMax($_rangeValueMax)
    {
        return ($this->rangeValueMax = $_rangeValueMax);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructRangeValueType
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
