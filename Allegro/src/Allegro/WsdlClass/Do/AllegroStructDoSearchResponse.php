<?php
/**
 * File for class AllegroStructDoSearchResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoSearchResponse originally named doSearchResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoSearchResponse extends AllegroWsdlClass
{
    /**
     * The searchCount
     * @var int
     */
    public $searchCount;
    /**
     * The searchCountFeatured
     * @var int
     */
    public $searchCountFeatured;
    /**
     * The searchArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSearchresponsetype
     */
    public $searchArray;
    /**
     * The searchExcludedWords
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfString
     */
    public $searchExcludedWords;
    /**
     * The searchCategories
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfCategoriesstruct
     */
    public $searchCategories;
    /**
     * Constructor method for doSearchResponse
     * @see parent::__construct()
     * @param int $_searchCount
     * @param int $_searchCountFeatured
     * @param AllegroStructArrayOfSearchresponsetype $_searchArray
     * @param AllegroStructArrayOfString $_searchExcludedWords
     * @param AllegroStructArrayOfCategoriesstruct $_searchCategories
     * @return AllegroStructDoSearchResponse
     */
    public function __construct($_searchCount = NULL,$_searchCountFeatured = NULL,$_searchArray = NULL,$_searchExcludedWords = NULL,$_searchCategories = NULL)
    {
        parent::__construct(array('searchCount'=>$_searchCount,'searchCountFeatured'=>$_searchCountFeatured,'searchArray'=>($_searchArray instanceof AllegroStructArrayOfSearchresponsetype)?$_searchArray:new AllegroStructArrayOfSearchresponsetype($_searchArray),'searchExcludedWords'=>($_searchExcludedWords instanceof AllegroStructArrayOfString)?$_searchExcludedWords:new AllegroStructArrayOfString($_searchExcludedWords),'searchCategories'=>($_searchCategories instanceof AllegroStructArrayOfCategoriesstruct)?$_searchCategories:new AllegroStructArrayOfCategoriesstruct($_searchCategories)),false);
    }
    /**
     * Get searchCount value
     * @return int|null
     */
    public function getSearchCount()
    {
        return $this->searchCount;
    }
    /**
     * Set searchCount value
     * @param int $_searchCount the searchCount
     * @return int
     */
    public function setSearchCount($_searchCount)
    {
        return ($this->searchCount = $_searchCount);
    }
    /**
     * Get searchCountFeatured value
     * @return int|null
     */
    public function getSearchCountFeatured()
    {
        return $this->searchCountFeatured;
    }
    /**
     * Set searchCountFeatured value
     * @param int $_searchCountFeatured the searchCountFeatured
     * @return int
     */
    public function setSearchCountFeatured($_searchCountFeatured)
    {
        return ($this->searchCountFeatured = $_searchCountFeatured);
    }
    /**
     * Get searchArray value
     * @return AllegroStructArrayOfSearchresponsetype|null
     */
    public function getSearchArray()
    {
        return $this->searchArray;
    }
    /**
     * Set searchArray value
     * @param AllegroStructArrayOfSearchresponsetype $_searchArray the searchArray
     * @return AllegroStructArrayOfSearchresponsetype
     */
    public function setSearchArray($_searchArray)
    {
        return ($this->searchArray = $_searchArray);
    }
    /**
     * Get searchExcludedWords value
     * @return AllegroStructArrayOfString|null
     */
    public function getSearchExcludedWords()
    {
        return $this->searchExcludedWords;
    }
    /**
     * Set searchExcludedWords value
     * @param AllegroStructArrayOfString $_searchExcludedWords the searchExcludedWords
     * @return AllegroStructArrayOfString
     */
    public function setSearchExcludedWords($_searchExcludedWords)
    {
        return ($this->searchExcludedWords = $_searchExcludedWords);
    }
    /**
     * Get searchCategories value
     * @return AllegroStructArrayOfCategoriesstruct|null
     */
    public function getSearchCategories()
    {
        return $this->searchCategories;
    }
    /**
     * Set searchCategories value
     * @param AllegroStructArrayOfCategoriesstruct $_searchCategories the searchCategories
     * @return AllegroStructArrayOfCategoriesstruct
     */
    public function setSearchCategories($_searchCategories)
    {
        return ($this->searchCategories = $_searchCategories);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoSearchResponse
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
