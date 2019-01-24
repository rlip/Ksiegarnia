<?php
/**
 * File for class AllegroStructFiltersListType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructFiltersListType originally named FiltersListType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructFiltersListType extends AllegroWsdlClass
{
    /**
     * The filterId
     * @var string
     */
    public $filterId;
    /**
     * The filterName
     * @var string
     */
    public $filterName;
    /**
     * The filterType
     * @var string
     */
    public $filterType;
    /**
     * The filterControlType
     * @var string
     */
    public $filterControlType;
    /**
     * The filterDataType
     * @var string
     */
    public $filterDataType;
    /**
     * The filterIsRange
     * @var boolean
     */
    public $filterIsRange;
    /**
     * The filterArraySize
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $filterArraySize;
    /**
     * The filterValues
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFiltervaluetype
     */
    public $filterValues;
    /**
     * The filterRelations
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructFilterRelationType
     */
    public $filterRelations;
    /**
     * Constructor method for FiltersListType
     * @see parent::__construct()
     * @param string $_filterId
     * @param string $_filterName
     * @param string $_filterType
     * @param string $_filterControlType
     * @param string $_filterDataType
     * @param boolean $_filterIsRange
     * @param int $_filterArraySize
     * @param AllegroStructArrayOfFiltervaluetype $_filterValues
     * @param AllegroStructFilterRelationType $_filterRelations
     * @return AllegroStructFiltersListType
     */
    public function __construct($_filterId = NULL,$_filterName = NULL,$_filterType = NULL,$_filterControlType = NULL,$_filterDataType = NULL,$_filterIsRange = NULL,$_filterArraySize = NULL,$_filterValues = NULL,$_filterRelations = NULL)
    {
        parent::__construct(array('filterId'=>$_filterId,'filterName'=>$_filterName,'filterType'=>$_filterType,'filterControlType'=>$_filterControlType,'filterDataType'=>$_filterDataType,'filterIsRange'=>$_filterIsRange,'filterArraySize'=>$_filterArraySize,'filterValues'=>($_filterValues instanceof AllegroStructArrayOfFiltervaluetype)?$_filterValues:new AllegroStructArrayOfFiltervaluetype($_filterValues),'filterRelations'=>$_filterRelations),false);
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
     * Get filterName value
     * @return string|null
     */
    public function getFilterName()
    {
        return $this->filterName;
    }
    /**
     * Set filterName value
     * @param string $_filterName the filterName
     * @return string
     */
    public function setFilterName($_filterName)
    {
        return ($this->filterName = $_filterName);
    }
    /**
     * Get filterType value
     * @return string|null
     */
    public function getFilterType()
    {
        return $this->filterType;
    }
    /**
     * Set filterType value
     * @param string $_filterType the filterType
     * @return string
     */
    public function setFilterType($_filterType)
    {
        return ($this->filterType = $_filterType);
    }
    /**
     * Get filterControlType value
     * @return string|null
     */
    public function getFilterControlType()
    {
        return $this->filterControlType;
    }
    /**
     * Set filterControlType value
     * @param string $_filterControlType the filterControlType
     * @return string
     */
    public function setFilterControlType($_filterControlType)
    {
        return ($this->filterControlType = $_filterControlType);
    }
    /**
     * Get filterDataType value
     * @return string|null
     */
    public function getFilterDataType()
    {
        return $this->filterDataType;
    }
    /**
     * Set filterDataType value
     * @param string $_filterDataType the filterDataType
     * @return string
     */
    public function setFilterDataType($_filterDataType)
    {
        return ($this->filterDataType = $_filterDataType);
    }
    /**
     * Get filterIsRange value
     * @return boolean|null
     */
    public function getFilterIsRange()
    {
        return $this->filterIsRange;
    }
    /**
     * Set filterIsRange value
     * @param boolean $_filterIsRange the filterIsRange
     * @return boolean
     */
    public function setFilterIsRange($_filterIsRange)
    {
        return ($this->filterIsRange = $_filterIsRange);
    }
    /**
     * Get filterArraySize value
     * @return int|null
     */
    public function getFilterArraySize()
    {
        return $this->filterArraySize;
    }
    /**
     * Set filterArraySize value
     * @param int $_filterArraySize the filterArraySize
     * @return int
     */
    public function setFilterArraySize($_filterArraySize)
    {
        return ($this->filterArraySize = $_filterArraySize);
    }
    /**
     * Get filterValues value
     * @return AllegroStructArrayOfFiltervaluetype|null
     */
    public function getFilterValues()
    {
        return $this->filterValues;
    }
    /**
     * Set filterValues value
     * @param AllegroStructArrayOfFiltervaluetype $_filterValues the filterValues
     * @return AllegroStructArrayOfFiltervaluetype
     */
    public function setFilterValues($_filterValues)
    {
        return ($this->filterValues = $_filterValues);
    }
    /**
     * Get filterRelations value
     * @return AllegroStructFilterRelationType|null
     */
    public function getFilterRelations()
    {
        return $this->filterRelations;
    }
    /**
     * Set filterRelations value
     * @param AllegroStructFilterRelationType $_filterRelations the filterRelations
     * @return AllegroStructFilterRelationType
     */
    public function setFilterRelations($_filterRelations)
    {
        return ($this->filterRelations = $_filterRelations);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructFiltersListType
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
