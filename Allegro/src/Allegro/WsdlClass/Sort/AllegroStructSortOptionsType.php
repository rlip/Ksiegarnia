<?php
/**
 * File for class AllegroStructSortOptionsType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSortOptionsType originally named SortOptionsType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSortOptionsType extends AllegroWsdlClass
{
    /**
     * The sortType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $sortType;
    /**
     * The sortOrder
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $sortOrder;
    /**
     * Constructor method for SortOptionsType
     * @see parent::__construct()
     * @param string $_sortType
     * @param string $_sortOrder
     * @return AllegroStructSortOptionsType
     */
    public function __construct($_sortType = NULL,$_sortOrder = NULL)
    {
        parent::__construct(array('sortType'=>$_sortType,'sortOrder'=>$_sortOrder),false);
    }
    /**
     * Get sortType value
     * @return string|null
     */
    public function getSortType()
    {
        return $this->sortType;
    }
    /**
     * Set sortType value
     * @param string $_sortType the sortType
     * @return string
     */
    public function setSortType($_sortType)
    {
        return ($this->sortType = $_sortType);
    }
    /**
     * Get sortOrder value
     * @return string|null
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }
    /**
     * Set sortOrder value
     * @param string $_sortOrder the sortOrder
     * @return string
     */
    public function setSortOrder($_sortOrder)
    {
        return ($this->sortOrder = $_sortOrder);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSortOptionsType
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
