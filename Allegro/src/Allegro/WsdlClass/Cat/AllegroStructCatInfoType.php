<?php
/**
 * File for class AllegroStructCatInfoType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructCatInfoType originally named CatInfoType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructCatInfoType extends AllegroWsdlClass
{
    /**
     * The catId
     * @var int
     */
    public $catId;
    /**
     * The catName
     * @var string
     */
    public $catName;
    /**
     * The catParent
     * @var int
     */
    public $catParent;
    /**
     * The catPosition
     * @var int
     */
    public $catPosition;
    /**
     * The catIsProductCatalogueEnabled
     * @var int
     */
    public $catIsProductCatalogueEnabled;
    /**
     * Constructor method for CatInfoType
     * @see parent::__construct()
     * @param int $_catId
     * @param string $_catName
     * @param int $_catParent
     * @param int $_catPosition
     * @param int $_catIsProductCatalogueEnabled
     * @return AllegroStructCatInfoType
     */
    public function __construct($_catId = NULL,$_catName = NULL,$_catParent = NULL,$_catPosition = NULL,$_catIsProductCatalogueEnabled = NULL)
    {
        parent::__construct(array('catId'=>$_catId,'catName'=>$_catName,'catParent'=>$_catParent,'catPosition'=>$_catPosition,'catIsProductCatalogueEnabled'=>$_catIsProductCatalogueEnabled),false);
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
     * Get catPosition value
     * @return int|null
     */
    public function getCatPosition()
    {
        return $this->catPosition;
    }
    /**
     * Set catPosition value
     * @param int $_catPosition the catPosition
     * @return int
     */
    public function setCatPosition($_catPosition)
    {
        return ($this->catPosition = $_catPosition);
    }
    /**
     * Get catIsProductCatalogueEnabled value
     * @return int|null
     */
    public function getCatIsProductCatalogueEnabled()
    {
        return $this->catIsProductCatalogueEnabled;
    }
    /**
     * Set catIsProductCatalogueEnabled value
     * @param int $_catIsProductCatalogueEnabled the catIsProductCatalogueEnabled
     * @return int
     */
    public function setCatIsProductCatalogueEnabled($_catIsProductCatalogueEnabled)
    {
        return ($this->catIsProductCatalogueEnabled = $_catIsProductCatalogueEnabled);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructCatInfoType
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
