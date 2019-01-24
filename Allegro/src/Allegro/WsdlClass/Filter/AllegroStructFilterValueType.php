<?php
/**
 * File for class AllegroStructFilterValueType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructFilterValueType originally named FilterValueType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructFilterValueType extends AllegroWsdlClass
{
    /**
     * The filterValueId
     * @var string
     */
    public $filterValueId;
    /**
     * The filterValueName
     * @var string
     */
    public $filterValueName;
    /**
     * The filterValueCount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $filterValueCount;
    /**
     * Constructor method for FilterValueType
     * @see parent::__construct()
     * @param string $_filterValueId
     * @param string $_filterValueName
     * @param int $_filterValueCount
     * @return AllegroStructFilterValueType
     */
    public function __construct($_filterValueId = NULL,$_filterValueName = NULL,$_filterValueCount = NULL)
    {
        parent::__construct(array('filterValueId'=>$_filterValueId,'filterValueName'=>$_filterValueName,'filterValueCount'=>$_filterValueCount),false);
    }
    /**
     * Get filterValueId value
     * @return string|null
     */
    public function getFilterValueId()
    {
        return $this->filterValueId;
    }
    /**
     * Set filterValueId value
     * @param string $_filterValueId the filterValueId
     * @return string
     */
    public function setFilterValueId($_filterValueId)
    {
        return ($this->filterValueId = $_filterValueId);
    }
    /**
     * Get filterValueName value
     * @return string|null
     */
    public function getFilterValueName()
    {
        return $this->filterValueName;
    }
    /**
     * Set filterValueName value
     * @param string $_filterValueName the filterValueName
     * @return string
     */
    public function setFilterValueName($_filterValueName)
    {
        return ($this->filterValueName = $_filterValueName);
    }
    /**
     * Get filterValueCount value
     * @return int|null
     */
    public function getFilterValueCount()
    {
        return $this->filterValueCount;
    }
    /**
     * Set filterValueCount value
     * @param int $_filterValueCount the filterValueCount
     * @return int
     */
    public function setFilterValueCount($_filterValueCount)
    {
        return ($this->filterValueCount = $_filterValueCount);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructFilterValueType
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
