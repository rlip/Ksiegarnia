<?php
/**
 * File for class AllegroStructItemCatList
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructItemCatList originally named ItemCatList
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructItemCatList extends AllegroWsdlClass
{
    /**
     * The catLevel
     * @var int
     */
    public $catLevel;
    /**
     * The catId
     * @var long
     */
    public $catId;
    /**
     * The catName
     * @var string
     */
    public $catName;
    /**
     * Constructor method for ItemCatList
     * @see parent::__construct()
     * @param int $_catLevel
     * @param long $_catId
     * @param string $_catName
     * @return AllegroStructItemCatList
     */
    public function __construct($_catLevel = NULL,$_catId = NULL,$_catName = NULL)
    {
        parent::__construct(array('catLevel'=>$_catLevel,'catId'=>$_catId,'catName'=>$_catName),false);
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
     * Get catId value
     * @return long|null
     */
    public function getCatId()
    {
        return $this->catId;
    }
    /**
     * Set catId value
     * @param long $_catId the catId
     * @return long
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructItemCatList
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
