<?php
/**
 * File for class AllegroStructSortOptionsStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSortOptionsStruct originally named SortOptionsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSortOptionsStruct extends AllegroWsdlClass
{
    /**
     * The sortType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $sortType;
    /**
     * The sortOrder
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $sortOrder;
    /**
     * Constructor method for SortOptionsStruct
     * @see parent::__construct()
     * @param int $_sortType
     * @param int $_sortOrder
     * @return AllegroStructSortOptionsStruct
     */
    public function __construct($_sortType = NULL,$_sortOrder = NULL)
    {
        parent::__construct(array('sortType'=>$_sortType,'sortOrder'=>$_sortOrder),false);
    }
    /**
     * Get sortType value
     * @return int|null
     */
    public function getSortType()
    {
        return $this->sortType;
    }
    /**
     * Set sortType value
     * @param int $_sortType the sortType
     * @return int
     */
    public function setSortType($_sortType)
    {
        return ($this->sortType = $_sortType);
    }
    /**
     * Get sortOrder value
     * @return int|null
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }
    /**
     * Set sortOrder value
     * @param int $_sortOrder the sortOrder
     * @return int
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
     * @return AllegroStructSortOptionsStruct
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
