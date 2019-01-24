<?php
/**
 * File for class AllegroStructSearchOptType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSearchOptType originally named SearchOptType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSearchOptType extends AllegroWsdlClass
{
    /**
     * The searchString
     * @var string
     */
    public $searchString;
    /**
     * The searchOptions
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $searchOptions;
    /**
     * The searchOrder
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $searchOrder;
    /**
     * The searchOrderType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $searchOrderType;
    /**
     * The searchCountry
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $searchCountry;
    /**
     * The searchCategory
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $searchCategory;
    /**
     * The searchOffset
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $searchOffset;
    /**
     * The searchCity
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $searchCity;
    /**
     * The searchState
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $searchState;
    /**
     * The searchPriceFrom
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var float
     */
    public $searchPriceFrom;
    /**
     * The searchPriceTo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var float
     */
    public $searchPriceTo;
    /**
     * The searchLimit
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $searchLimit;
    /**
     * The searchOrderFulfillmentTime
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $searchOrderFulfillmentTime;
    /**
     * The searchUser
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $searchUser;
    /**
     * Constructor method for SearchOptType
     * @see parent::__construct()
     * @param string $_searchString
     * @param int $_searchOptions
     * @param int $_searchOrder
     * @param int $_searchOrderType
     * @param int $_searchCountry
     * @param int $_searchCategory
     * @param int $_searchOffset
     * @param string $_searchCity
     * @param int $_searchState
     * @param float $_searchPriceFrom
     * @param float $_searchPriceTo
     * @param int $_searchLimit
     * @param int $_searchOrderFulfillmentTime
     * @param int $_searchUser
     * @return AllegroStructSearchOptType
     */
    public function __construct($_searchString = NULL,$_searchOptions = NULL,$_searchOrder = NULL,$_searchOrderType = NULL,$_searchCountry = NULL,$_searchCategory = NULL,$_searchOffset = NULL,$_searchCity = NULL,$_searchState = NULL,$_searchPriceFrom = NULL,$_searchPriceTo = NULL,$_searchLimit = NULL,$_searchOrderFulfillmentTime = NULL,$_searchUser = NULL)
    {
        parent::__construct(array('searchString'=>$_searchString,'searchOptions'=>$_searchOptions,'searchOrder'=>$_searchOrder,'searchOrderType'=>$_searchOrderType,'searchCountry'=>$_searchCountry,'searchCategory'=>$_searchCategory,'searchOffset'=>$_searchOffset,'searchCity'=>$_searchCity,'searchState'=>$_searchState,'searchPriceFrom'=>$_searchPriceFrom,'searchPriceTo'=>$_searchPriceTo,'searchLimit'=>$_searchLimit,'searchOrderFulfillmentTime'=>$_searchOrderFulfillmentTime,'searchUser'=>$_searchUser),false);
    }
    /**
     * Get searchString value
     * @return string|null
     */
    public function getSearchString()
    {
        return $this->searchString;
    }
    /**
     * Set searchString value
     * @param string $_searchString the searchString
     * @return string
     */
    public function setSearchString($_searchString)
    {
        return ($this->searchString = $_searchString);
    }
    /**
     * Get searchOptions value
     * @return int|null
     */
    public function getSearchOptions()
    {
        return $this->searchOptions;
    }
    /**
     * Set searchOptions value
     * @param int $_searchOptions the searchOptions
     * @return int
     */
    public function setSearchOptions($_searchOptions)
    {
        return ($this->searchOptions = $_searchOptions);
    }
    /**
     * Get searchOrder value
     * @return int|null
     */
    public function getSearchOrder()
    {
        return $this->searchOrder;
    }
    /**
     * Set searchOrder value
     * @param int $_searchOrder the searchOrder
     * @return int
     */
    public function setSearchOrder($_searchOrder)
    {
        return ($this->searchOrder = $_searchOrder);
    }
    /**
     * Get searchOrderType value
     * @return int|null
     */
    public function getSearchOrderType()
    {
        return $this->searchOrderType;
    }
    /**
     * Set searchOrderType value
     * @param int $_searchOrderType the searchOrderType
     * @return int
     */
    public function setSearchOrderType($_searchOrderType)
    {
        return ($this->searchOrderType = $_searchOrderType);
    }
    /**
     * Get searchCountry value
     * @return int|null
     */
    public function getSearchCountry()
    {
        return $this->searchCountry;
    }
    /**
     * Set searchCountry value
     * @param int $_searchCountry the searchCountry
     * @return int
     */
    public function setSearchCountry($_searchCountry)
    {
        return ($this->searchCountry = $_searchCountry);
    }
    /**
     * Get searchCategory value
     * @return int|null
     */
    public function getSearchCategory()
    {
        return $this->searchCategory;
    }
    /**
     * Set searchCategory value
     * @param int $_searchCategory the searchCategory
     * @return int
     */
    public function setSearchCategory($_searchCategory)
    {
        return ($this->searchCategory = $_searchCategory);
    }
    /**
     * Get searchOffset value
     * @return int|null
     */
    public function getSearchOffset()
    {
        return $this->searchOffset;
    }
    /**
     * Set searchOffset value
     * @param int $_searchOffset the searchOffset
     * @return int
     */
    public function setSearchOffset($_searchOffset)
    {
        return ($this->searchOffset = $_searchOffset);
    }
    /**
     * Get searchCity value
     * @return string|null
     */
    public function getSearchCity()
    {
        return $this->searchCity;
    }
    /**
     * Set searchCity value
     * @param string $_searchCity the searchCity
     * @return string
     */
    public function setSearchCity($_searchCity)
    {
        return ($this->searchCity = $_searchCity);
    }
    /**
     * Get searchState value
     * @return int|null
     */
    public function getSearchState()
    {
        return $this->searchState;
    }
    /**
     * Set searchState value
     * @param int $_searchState the searchState
     * @return int
     */
    public function setSearchState($_searchState)
    {
        return ($this->searchState = $_searchState);
    }
    /**
     * Get searchPriceFrom value
     * @return float|null
     */
    public function getSearchPriceFrom()
    {
        return $this->searchPriceFrom;
    }
    /**
     * Set searchPriceFrom value
     * @param float $_searchPriceFrom the searchPriceFrom
     * @return float
     */
    public function setSearchPriceFrom($_searchPriceFrom)
    {
        return ($this->searchPriceFrom = $_searchPriceFrom);
    }
    /**
     * Get searchPriceTo value
     * @return float|null
     */
    public function getSearchPriceTo()
    {
        return $this->searchPriceTo;
    }
    /**
     * Set searchPriceTo value
     * @param float $_searchPriceTo the searchPriceTo
     * @return float
     */
    public function setSearchPriceTo($_searchPriceTo)
    {
        return ($this->searchPriceTo = $_searchPriceTo);
    }
    /**
     * Get searchLimit value
     * @return int|null
     */
    public function getSearchLimit()
    {
        return $this->searchLimit;
    }
    /**
     * Set searchLimit value
     * @param int $_searchLimit the searchLimit
     * @return int
     */
    public function setSearchLimit($_searchLimit)
    {
        return ($this->searchLimit = $_searchLimit);
    }
    /**
     * Get searchOrderFulfillmentTime value
     * @return int|null
     */
    public function getSearchOrderFulfillmentTime()
    {
        return $this->searchOrderFulfillmentTime;
    }
    /**
     * Set searchOrderFulfillmentTime value
     * @param int $_searchOrderFulfillmentTime the searchOrderFulfillmentTime
     * @return int
     */
    public function setSearchOrderFulfillmentTime($_searchOrderFulfillmentTime)
    {
        return ($this->searchOrderFulfillmentTime = $_searchOrderFulfillmentTime);
    }
    /**
     * Get searchUser value
     * @return int|null
     */
    public function getSearchUser()
    {
        return $this->searchUser;
    }
    /**
     * Set searchUser value
     * @param int $_searchUser the searchUser
     * @return int
     */
    public function setSearchUser($_searchUser)
    {
        return ($this->searchUser = $_searchUser);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSearchOptType
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
