<?php
/**
 * File for class AllegroStructFilterPriceStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructFilterPriceStruct originally named FilterPriceStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructFilterPriceStruct extends AllegroWsdlClass
{
    /**
     * The filterPriceFrom
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var float
     */
    public $filterPriceFrom;
    /**
     * The filterPriceTo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var float
     */
    public $filterPriceTo;
    /**
     * Constructor method for FilterPriceStruct
     * @see parent::__construct()
     * @param float $_filterPriceFrom
     * @param float $_filterPriceTo
     * @return AllegroStructFilterPriceStruct
     */
    public function __construct($_filterPriceFrom = NULL,$_filterPriceTo = NULL)
    {
        parent::__construct(array('filterPriceFrom'=>$_filterPriceFrom,'filterPriceTo'=>$_filterPriceTo),false);
    }
    /**
     * Get filterPriceFrom value
     * @return float|null
     */
    public function getFilterPriceFrom()
    {
        return $this->filterPriceFrom;
    }
    /**
     * Set filterPriceFrom value
     * @param float $_filterPriceFrom the filterPriceFrom
     * @return float
     */
    public function setFilterPriceFrom($_filterPriceFrom)
    {
        return ($this->filterPriceFrom = $_filterPriceFrom);
    }
    /**
     * Get filterPriceTo value
     * @return float|null
     */
    public function getFilterPriceTo()
    {
        return $this->filterPriceTo;
    }
    /**
     * Set filterPriceTo value
     * @param float $_filterPriceTo the filterPriceTo
     * @return float
     */
    public function setFilterPriceTo($_filterPriceTo)
    {
        return ($this->filterPriceTo = $_filterPriceTo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructFilterPriceStruct
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
