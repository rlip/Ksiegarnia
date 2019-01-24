<?php
/**
 * File for class AllegroStructFutureFilterOptionsStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructFutureFilterOptionsStruct originally named FutureFilterOptionsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructFutureFilterOptionsStruct extends AllegroWsdlClass
{
    /**
     * The filterFormat
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $filterFormat;
    /**
     * Constructor method for FutureFilterOptionsStruct
     * @see parent::__construct()
     * @param int $_filterFormat
     * @return AllegroStructFutureFilterOptionsStruct
     */
    public function __construct($_filterFormat = NULL)
    {
        parent::__construct(array('filterFormat'=>$_filterFormat),false);
    }
    /**
     * Get filterFormat value
     * @return int|null
     */
    public function getFilterFormat()
    {
        return $this->filterFormat;
    }
    /**
     * Set filterFormat value
     * @param int $_filterFormat the filterFormat
     * @return int
     */
    public function setFilterFormat($_filterFormat)
    {
        return ($this->filterFormat = $_filterFormat);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructFutureFilterOptionsStruct
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
