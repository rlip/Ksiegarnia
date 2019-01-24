<?php
/**
 * File for class AllegroStructCategoriesStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructCategoriesStruct originally named CategoriesStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructCategoriesStruct extends AllegroWsdlClass
{
    /**
     * The categoryId
     * @var int
     */
    public $categoryId;
    /**
     * The categoryName
     * @var string
     */
    public $categoryName;
    /**
     * The categoryParentId
     * @var int
     */
    public $categoryParentId;
    /**
     * The categoryItemsCount
     * @var int
     */
    public $categoryItemsCount;
    /**
     * Constructor method for CategoriesStruct
     * @see parent::__construct()
     * @param int $_categoryId
     * @param string $_categoryName
     * @param int $_categoryParentId
     * @param int $_categoryItemsCount
     * @return AllegroStructCategoriesStruct
     */
    public function __construct($_categoryId = NULL,$_categoryName = NULL,$_categoryParentId = NULL,$_categoryItemsCount = NULL)
    {
        parent::__construct(array('categoryId'=>$_categoryId,'categoryName'=>$_categoryName,'categoryParentId'=>$_categoryParentId,'categoryItemsCount'=>$_categoryItemsCount),false);
    }
    /**
     * Get categoryId value
     * @return int|null
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
    /**
     * Set categoryId value
     * @param int $_categoryId the categoryId
     * @return int
     */
    public function setCategoryId($_categoryId)
    {
        return ($this->categoryId = $_categoryId);
    }
    /**
     * Get categoryName value
     * @return string|null
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }
    /**
     * Set categoryName value
     * @param string $_categoryName the categoryName
     * @return string
     */
    public function setCategoryName($_categoryName)
    {
        return ($this->categoryName = $_categoryName);
    }
    /**
     * Get categoryParentId value
     * @return int|null
     */
    public function getCategoryParentId()
    {
        return $this->categoryParentId;
    }
    /**
     * Set categoryParentId value
     * @param int $_categoryParentId the categoryParentId
     * @return int
     */
    public function setCategoryParentId($_categoryParentId)
    {
        return ($this->categoryParentId = $_categoryParentId);
    }
    /**
     * Get categoryItemsCount value
     * @return int|null
     */
    public function getCategoryItemsCount()
    {
        return $this->categoryItemsCount;
    }
    /**
     * Set categoryItemsCount value
     * @param int $_categoryItemsCount the categoryItemsCount
     * @return int
     */
    public function setCategoryItemsCount($_categoryItemsCount)
    {
        return ($this->categoryItemsCount = $_categoryItemsCount);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructCategoriesStruct
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
