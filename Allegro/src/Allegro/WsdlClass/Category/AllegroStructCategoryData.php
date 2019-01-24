<?php
/**
 * File for class AllegroStructCategoryData
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructCategoryData originally named CategoryData
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructCategoryData extends AllegroWsdlClass
{
    /**
     * The catId
     * @var int
     */
    public $catId;
    /**
     * The catParent
     * @var int
     */
    public $catParent;
    /**
     * The catCountry
     * @var int
     */
    public $catCountry;
    /**
     * The catLevel
     * @var int
     */
    public $catLevel;
    /**
     * The catIsLeaf
     * @var int
     */
    public $catIsLeaf;
    /**
     * The catName
     * @var string
     */
    public $catName;
    /**
     * The catOptions
     * @var int
     */
    public $catOptions;
    /**
     * Constructor method for CategoryData
     * @see parent::__construct()
     * @param int $_catId
     * @param int $_catParent
     * @param int $_catCountry
     * @param int $_catLevel
     * @param int $_catIsLeaf
     * @param string $_catName
     * @param int $_catOptions
     * @return AllegroStructCategoryData
     */
    public function __construct($_catId = NULL,$_catParent = NULL,$_catCountry = NULL,$_catLevel = NULL,$_catIsLeaf = NULL,$_catName = NULL,$_catOptions = NULL)
    {
        parent::__construct(array('catId'=>$_catId,'catParent'=>$_catParent,'catCountry'=>$_catCountry,'catLevel'=>$_catLevel,'catIsLeaf'=>$_catIsLeaf,'catName'=>$_catName,'catOptions'=>$_catOptions),false);
    }
    /**
     * Get catId value
     * @return int|null
     */
    public function getCatId()
    {
        return $this->catId;
    }
    /**
     * Set catId value
     * @param int $_catId the catId
     * @return int
     */
    public function setCatId($_catId)
    {
        return ($this->catId = $_catId);
    }
    /**
     * Get catParent value
     * @return int|null
     */
    public function getCatParent()
    {
        return $this->catParent;
    }
    /**
     * Set catParent value
     * @param int $_catParent the catParent
     * @return int
     */
    public function setCatParent($_catParent)
    {
        return ($this->catParent = $_catParent);
    }
    /**
     * Get catCountry value
     * @return int|null
     */
    public function getCatCountry()
    {
        return $this->catCountry;
    }
    /**
     * Set catCountry value
     * @param int $_catCountry the catCountry
     * @return int
     */
    public function setCatCountry($_catCountry)
    {
        return ($this->catCountry = $_catCountry);
    }
    /**
     * Get catLevel value
     * @return int|null
     */
    public function getCatLevel()
    {
        return $this->catLevel;
    }
    /**
     * Set catLevel value
     * @param int $_catLevel the catLevel
     * @return int
     */
    public function setCatLevel($_catLevel)
    {
        return ($this->catLevel = $_catLevel);
    }
    /**
     * Get catIsLeaf value
     * @return int|null
     */
    public function getCatIsLeaf()
    {
        return $this->catIsLeaf;
    }
    /**
     * Set catIsLeaf value
     * @param int $_catIsLeaf the catIsLeaf
     * @return int
     */
    public function setCatIsLeaf($_catIsLeaf)
    {
        return ($this->catIsLeaf = $_catIsLeaf);
    }
    /**
     * Get catName value
     * @return string|null
     */
    public function getCatName()
    {
        return $this->catName;
    }
    /**
     * Set catName value
     * @param string $_catName the catName
     * @return string
     */
    public function setCatName($_catName)
    {
        return ($this->catName = $_catName);
    }
    /**
     * Get catOptions value
     * @return int|null
     */
    public function getCatOptions()
    {
        return $this->catOptions;
    }
    /**
     * Set catOptions value
     * @param int $_catOptions the catOptions
     * @return int
     */
    public function setCatOptions($_catOptions)
    {
        return ($this->catOptions = $_catOptions);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructCategoryData
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
