<?php
/**
 * File for class AllegroStructCategoriesListType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructCategoriesListType originally named CategoriesListType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructCategoriesListType extends AllegroWsdlClass
{
    /**
     * The categoriesTree
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfCategorytreetype
     */
    public $categoriesTree;
    /**
     * The categoriesPath
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfCategorypathtype
     */
    public $categoriesPath;
    /**
     * Constructor method for CategoriesListType
     * @see parent::__construct()
     * @param AllegroStructArrayOfCategorytreetype $_categoriesTree
     * @param AllegroStructArrayOfCategorypathtype $_categoriesPath
     * @return AllegroStructCategoriesListType
     */
    public function __construct($_categoriesTree = NULL,$_categoriesPath = NULL)
    {
        parent::__construct(array('categoriesTree'=>($_categoriesTree instanceof AllegroStructArrayOfCategorytreetype)?$_categoriesTree:new AllegroStructArrayOfCategorytreetype($_categoriesTree),'categoriesPath'=>($_categoriesPath instanceof AllegroStructArrayOfCategorypathtype)?$_categoriesPath:new AllegroStructArrayOfCategorypathtype($_categoriesPath)),false);
    }
    /**
     * Get categoriesTree value
     * @return AllegroStructArrayOfCategorytreetype|null
     */
    public function getCategoriesTree()
    {
        return $this->categoriesTree;
    }
    /**
     * Set categoriesTree value
     * @param AllegroStructArrayOfCategorytreetype $_categoriesTree the categoriesTree
     * @return AllegroStructArrayOfCategorytreetype
     */
    public function setCategoriesTree($_categoriesTree)
    {
        return ($this->categoriesTree = $_categoriesTree);
    }
    /**
     * Get categoriesPath value
     * @return AllegroStructArrayOfCategorypathtype|null
     */
    public function getCategoriesPath()
    {
        return $this->categoriesPath;
    }
    /**
     * Set categoriesPath value
     * @param AllegroStructArrayOfCategorypathtype $_categoriesPath the categoriesPath
     * @return AllegroStructArrayOfCategorypathtype
     */
    public function setCategoriesPath($_categoriesPath)
    {
        return ($this->categoriesPath = $_categoriesPath);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructCategoriesListType
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
