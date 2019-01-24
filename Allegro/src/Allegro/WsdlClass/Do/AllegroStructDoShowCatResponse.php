<?php
/**
 * File for class AllegroStructDoShowCatResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoShowCatResponse originally named doShowCatResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoShowCatResponse extends AllegroWsdlClass
{
    /**
     * The catParentArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfInfocatlist
     */
    public $catParentArray;
    /**
     * The catChildArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfInfocatlist
     */
    public $catChildArray;
    /**
     * The catSisterArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfInfocatlist
     */
    public $catSisterArray;
    /**
     * The catItemsCount
     * @var int
     */
    public $catItemsCount;
    /**
     * The catItemsCountFeatured
     * @var int
     */
    public $catItemsCountFeatured;
    /**
     * The catItemsArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSearchresponsetype
     */
    public $catItemsArray;
    /**
     * Constructor method for doShowCatResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfInfocatlist $_catParentArray
     * @param AllegroStructArrayOfInfocatlist $_catChildArray
     * @param AllegroStructArrayOfInfocatlist $_catSisterArray
     * @param int $_catItemsCount
     * @param int $_catItemsCountFeatured
     * @param AllegroStructArrayOfSearchresponsetype $_catItemsArray
     * @return AllegroStructDoShowCatResponse
     */
    public function __construct($_catParentArray = NULL,$_catChildArray = NULL,$_catSisterArray = NULL,$_catItemsCount = NULL,$_catItemsCountFeatured = NULL,$_catItemsArray = NULL)
    {
        parent::__construct(array('catParentArray'=>($_catParentArray instanceof AllegroStructArrayOfInfocatlist)?$_catParentArray:new AllegroStructArrayOfInfocatlist($_catParentArray),'catChildArray'=>($_catChildArray instanceof AllegroStructArrayOfInfocatlist)?$_catChildArray:new AllegroStructArrayOfInfocatlist($_catChildArray),'catSisterArray'=>($_catSisterArray instanceof AllegroStructArrayOfInfocatlist)?$_catSisterArray:new AllegroStructArrayOfInfocatlist($_catSisterArray),'catItemsCount'=>$_catItemsCount,'catItemsCountFeatured'=>$_catItemsCountFeatured,'catItemsArray'=>($_catItemsArray instanceof AllegroStructArrayOfSearchresponsetype)?$_catItemsArray:new AllegroStructArrayOfSearchresponsetype($_catItemsArray)),false);
    }
    /**
     * Get catParentArray value
     * @return AllegroStructArrayOfInfocatlist|null
     */
    public function getCatParentArray()
    {
        return $this->catParentArray;
    }
    /**
     * Set catParentArray value
     * @param AllegroStructArrayOfInfocatlist $_catParentArray the catParentArray
     * @return AllegroStructArrayOfInfocatlist
     */
    public function setCatParentArray($_catParentArray)
    {
        return ($this->catParentArray = $_catParentArray);
    }
    /**
     * Get catChildArray value
     * @return AllegroStructArrayOfInfocatlist|null
     */
    public function getCatChildArray()
    {
        return $this->catChildArray;
    }
    /**
     * Set catChildArray value
     * @param AllegroStructArrayOfInfocatlist $_catChildArray the catChildArray
     * @return AllegroStructArrayOfInfocatlist
     */
    public function setCatChildArray($_catChildArray)
    {
        return ($this->catChildArray = $_catChildArray);
    }
    /**
     * Get catSisterArray value
     * @return AllegroStructArrayOfInfocatlist|null
     */
    public function getCatSisterArray()
    {
        return $this->catSisterArray;
    }
    /**
     * Set catSisterArray value
     * @param AllegroStructArrayOfInfocatlist $_catSisterArray the catSisterArray
     * @return AllegroStructArrayOfInfocatlist
     */
    public function setCatSisterArray($_catSisterArray)
    {
        return ($this->catSisterArray = $_catSisterArray);
    }
    /**
     * Get catItemsCount value
     * @return int|null
     */
    public function getCatItemsCount()
    {
        return $this->catItemsCount;
    }
    /**
     * Set catItemsCount value
     * @param int $_catItemsCount the catItemsCount
     * @return int
     */
    public function setCatItemsCount($_catItemsCount)
    {
        return ($this->catItemsCount = $_catItemsCount);
    }
    /**
     * Get catItemsCountFeatured value
     * @return int|null
     */
    public function getCatItemsCountFeatured()
    {
        return $this->catItemsCountFeatured;
    }
    /**
     * Set catItemsCountFeatured value
     * @param int $_catItemsCountFeatured the catItemsCountFeatured
     * @return int
     */
    public function setCatItemsCountFeatured($_catItemsCountFeatured)
    {
        return ($this->catItemsCountFeatured = $_catItemsCountFeatured);
    }
    /**
     * Get catItemsArray value
     * @return AllegroStructArrayOfSearchresponsetype|null
     */
    public function getCatItemsArray()
    {
        return $this->catItemsArray;
    }
    /**
     * Set catItemsArray value
     * @param AllegroStructArrayOfSearchresponsetype $_catItemsArray the catItemsArray
     * @return AllegroStructArrayOfSearchresponsetype
     */
    public function setCatItemsArray($_catItemsArray)
    {
        return ($this->catItemsArray = $_catItemsArray);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoShowCatResponse
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
