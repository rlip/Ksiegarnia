<?php
/**
 * File for class AllegroStructDoGetSellFormFieldsForCategoryResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetSellFormFieldsForCategoryResponse originally named doGetSellFormFieldsForCategoryResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetSellFormFieldsForCategoryResponse extends AllegroWsdlClass
{
    /**
     * The sellFormFieldsForCategory
     * @var AllegroStructSellFormFieldsForCategoryStruct
     */
    public $sellFormFieldsForCategory;
    /**
     * Constructor method for doGetSellFormFieldsForCategoryResponse
     * @see parent::__construct()
     * @param AllegroStructSellFormFieldsForCategoryStruct $_sellFormFieldsForCategory
     * @return AllegroStructDoGetSellFormFieldsForCategoryResponse
     */
    public function __construct($_sellFormFieldsForCategory = NULL)
    {
        parent::__construct(array('sellFormFieldsForCategory'=>$_sellFormFieldsForCategory),false);
    }
    /**
     * Get sellFormFieldsForCategory value
     * @return AllegroStructSellFormFieldsForCategoryStruct|null
     */
    public function getSellFormFieldsForCategory()
    {
        return $this->sellFormFieldsForCategory;
    }
    /**
     * Set sellFormFieldsForCategory value
     * @param AllegroStructSellFormFieldsForCategoryStruct $_sellFormFieldsForCategory the sellFormFieldsForCategory
     * @return AllegroStructSellFormFieldsForCategoryStruct
     */
    public function setSellFormFieldsForCategory($_sellFormFieldsForCategory)
    {
        return ($this->sellFormFieldsForCategory = $_sellFormFieldsForCategory);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetSellFormFieldsForCategoryResponse
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
