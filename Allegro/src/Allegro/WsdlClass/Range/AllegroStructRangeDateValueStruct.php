<?php
/**
 * File for class AllegroStructRangeDateValueStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructRangeDateValueStruct originally named RangeDateValueStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructRangeDateValueStruct extends AllegroWsdlClass
{
    /**
     * The fvalueRangeDateMin
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $fvalueRangeDateMin;
    /**
     * The fvalueRangeDateMax
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $fvalueRangeDateMax;
    /**
     * Constructor method for RangeDateValueStruct
     * @see parent::__construct()
     * @param string $_fvalueRangeDateMin
     * @param string $_fvalueRangeDateMax
     * @return AllegroStructRangeDateValueStruct
     */
    public function __construct($_fvalueRangeDateMin = NULL,$_fvalueRangeDateMax = NULL)
    {
        parent::__construct(array('fvalueRangeDateMin'=>$_fvalueRangeDateMin,'fvalueRangeDateMax'=>$_fvalueRangeDateMax),false);
    }
    /**
     * Get fvalueRangeDateMin value
     * @return string|null
     */
    public function getFvalueRangeDateMin()
    {
        return $this->fvalueRangeDateMin;
    }
    /**
     * Set fvalueRangeDateMin value
     * @param string $_fvalueRangeDateMin the fvalueRangeDateMin
     * @return string
     */
    public function setFvalueRangeDateMin($_fvalueRangeDateMin)
    {
        return ($this->fvalueRangeDateMin = $_fvalueRangeDateMin);
    }
    /**
     * Get fvalueRangeDateMax value
     * @return string|null
     */
    public function getFvalueRangeDateMax()
    {
        return $this->fvalueRangeDateMax;
    }
    /**
     * Set fvalueRangeDateMax value
     * @param string $_fvalueRangeDateMax the fvalueRangeDateMax
     * @return string
     */
    public function setFvalueRangeDateMax($_fvalueRangeDateMax)
    {
        return ($this->fvalueRangeDateMax = $_fvalueRangeDateMax);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructRangeDateValueStruct
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
