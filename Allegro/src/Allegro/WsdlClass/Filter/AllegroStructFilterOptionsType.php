<?php
/**
 * File for class AllegroStructFilterOptionsType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructFilterOptionsType originally named FilterOptionsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructFilterOptionsType extends AllegroWsdlClass
{
    /**
     * The filterId
     * @var string
     */
    public $filterId;
    /**
     * The filterValueId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfString
     */
    public $filterValueId;
    /**
     * The filterValueRange
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructRangeValueType
     */
    public $filterValueRange;
    /**
     * Constructor method for FilterOptionsType
     * @see parent::__construct()
     * @param string $_filterId
     * @param AllegroStructArrayOfString $_filterValueId
     * @param AllegroStructRangeValueType $_filterValueRange
     * @return AllegroStructFilterOptionsType
     */
    public function __construct($_filterId = NULL,$_filterValueId = NULL,$_filterValueRange = NULL)
    {
        parent::__construct(array('filterId'=>$_filterId,'filterValueId'=>($_filterValueId instanceof AllegroStructArrayOfString)?$_filterValueId:new AllegroStructArrayOfString($_filterValueId),'filterValueRange'=>$_filterValueRange),false);
    }
    /**
     * Get filterId value
     * @return string|null
     */
    public function getFilterId()
    {
        return $this->filterId;
    }
    /**
     * Set filterId value
     * @param string $_filterId the filterId
     * @return string
     */
    public function setFilterId($_filterId)
    {
        return ($this->filterId = $_filterId);
    }
    /**
     * Get filterValueId value
     * @return AllegroStructArrayOfString|null
     */
    public function getFilterValueId()
    {
        return $this->filterValueId;
    }
    /**
     * Set filterValueId value
     * @param AllegroStructArrayOfString $_filterValueId the filterValueId
     * @return AllegroStructArrayOfString
     */
    public function setFilterValueId($_filterValueId)
    {
        return ($this->filterValueId = $_filterValueId);
    }
    /**
     * Get filterValueRange value
     * @return AllegroStructRangeValueType|null
     */
    public function getFilterValueRange()
    {
        return $this->filterValueRange;
    }
    /**
     * Set filterValueRange value
     * @param AllegroStructRangeValueType $_filterValueRange the filterValueRange
     * @return AllegroStructRangeValueType
     */
    public function setFilterValueRange($_filterValueRange)
    {
        return ($this->filterValueRange = $_filterValueRange);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructFilterOptionsType
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
