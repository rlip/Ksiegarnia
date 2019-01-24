<?php
/**
 * File for class AllegroStructDoGetCategoryPathResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetCategoryPathResponse originally named doGetCategoryPathResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetCategoryPathResponse extends AllegroWsdlClass
{
    /**
     * The categoryPath
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfCategorydata
     */
    public $categoryPath;
    /**
     * Constructor method for doGetCategoryPathResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfCategorydata $_categoryPath
     * @return AllegroStructDoGetCategoryPathResponse
     */
    public function __construct($_categoryPath = NULL)
    {
        parent::__construct(array('categoryPath'=>($_categoryPath instanceof AllegroStructArrayOfCategorydata)?$_categoryPath:new AllegroStructArrayOfCategorydata($_categoryPath)),false);
    }
    /**
     * Get categoryPath value
     * @return AllegroStructArrayOfCategorydata|null
     */
    public function getCategoryPath()
    {
        return $this->categoryPath;
    }
    /**
     * Set categoryPath value
     * @param AllegroStructArrayOfCategorydata $_categoryPath the categoryPath
     * @return AllegroStructArrayOfCategorydata
     */
    public function setCategoryPath($_categoryPath)
    {
        return ($this->categoryPath = $_categoryPath);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetCategoryPathResponse
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
