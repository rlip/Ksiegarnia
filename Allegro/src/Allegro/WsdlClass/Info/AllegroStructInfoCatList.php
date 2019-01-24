<?php
/**
 * File for class AllegroStructInfoCatList
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructInfoCatList originally named InfoCatList
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructInfoCatList extends AllegroWsdlClass
{
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
     * The catItemsCount
     * @var long
     */
    public $catItemsCount;
    /**
     * Constructor method for InfoCatList
     * @see parent::__construct()
     * @param long $_catId
     * @param string $_catName
     * @param long $_catItemsCount
     * @return AllegroStructInfoCatList
     */
    public function __construct($_catId = NULL,$_catName = NULL,$_catItemsCount = NULL)
    {
        parent::__construct(array('catId'=>$_catId,'catName'=>$_catName,'catItemsCount'=>$_catItemsCount),false);
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
     * Get catItemsCount value
     * @return long|null
     */
    public function getCatItemsCount()
    {
        return $this->catItemsCount;
    }
    /**
     * Set catItemsCount value
     * @param long $_catItemsCount the catItemsCount
     * @return long
     */
    public function setCatItemsCount($_catItemsCount)
    {
        return ($this->catItemsCount = $_catItemsCount);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructInfoCatList
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
