<?php
/**
 * File for class AllegroStructDoGetItemsListRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetItemsListRequest originally named DoGetItemsListRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetItemsListRequest extends AllegroWsdlClass
{
    /**
     * The webapiKey
     * @var string
     */
    public $webapiKey;
    /**
     * The countryId
     * @var int
     */
    public $countryId;
    /**
     * The filterOptions
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFilteroptionstype
     */
    public $filterOptions;
    /**
     * The sortOptions
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructSortOptionsType
     */
    public $sortOptions;
    /**
     * The resultSize
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $resultSize;
    /**
     * The resultOffset
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $resultOffset;
    /**
     * The resultScope
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $resultScope;
    /**
     * Constructor method for DoGetItemsListRequest
     * @see parent::__construct()
     * @param string $_webapiKey
     * @param int $_countryId
     * @param AllegroStructArrayOfFilteroptionstype $_filterOptions
     * @param AllegroStructSortOptionsType $_sortOptions
     * @param int $_resultSize
     * @param int $_resultOffset
     * @param int $_resultScope
     * @return AllegroStructDoGetItemsListRequest
     */
    public function __construct($_webapiKey = NULL,$_countryId = NULL,$_filterOptions = NULL,$_sortOptions = NULL,$_resultSize = NULL,$_resultOffset = NULL,$_resultScope = NULL)
    {
        parent::__construct(array('webapiKey'=>$_webapiKey,'countryId'=>$_countryId,'filterOptions'=>($_filterOptions instanceof AllegroStructArrayOfFilteroptionstype)?$_filterOptions:new AllegroStructArrayOfFilteroptionstype($_filterOptions),'sortOptions'=>$_sortOptions,'resultSize'=>$_resultSize,'resultOffset'=>$_resultOffset,'resultScope'=>$_resultScope),false);
    }
    /**
     * Get webapiKey value
     * @return string|null
     */
    public function getWebapiKey()
    {
        return $this->webapiKey;
    }
    /**
     * Set webapiKey value
     * @param string $_webapiKey the webapiKey
     * @return string
     */
    public function setWebapiKey($_webapiKey)
    {
        return ($this->webapiKey = $_webapiKey);
    }
    /**
     * Get countryId value
     * @return int|null
     */
    public function getCountryId()
    {
        return $this->countryId;
    }
    /**
     * Set countryId value
     * @param int $_countryId the countryId
     * @return int
     */
    public function setCountryId($_countryId)
    {
        return ($this->countryId = $_countryId);
    }
    /**
     * Get filterOptions value
     * @return AllegroStructArrayOfFilteroptionstype|null
     */
    public function getFilterOptions()
    {
        return $this->filterOptions;
    }
    /**
     * Set filterOptions value
     * @param AllegroStructArrayOfFilteroptionstype $_filterOptions the filterOptions
     * @return AllegroStructArrayOfFilteroptionstype
     */
    public function setFilterOptions($_filterOptions)
    {
        return ($this->filterOptions = $_filterOptions);
    }
    /**
     * Get sortOptions value
     * @return AllegroStructSortOptionsType|null
     */
    public function getSortOptions()
    {
        return $this->sortOptions;
    }
    /**
     * Set sortOptions value
     * @param AllegroStructSortOptionsType $_sortOptions the sortOptions
     * @return AllegroStructSortOptionsType
     */
    public function setSortOptions($_sortOptions)
    {
        return ($this->sortOptions = $_sortOptions);
    }
    /**
     * Get resultSize value
     * @return int|null
     */
    public function getResultSize()
    {
        return $this->resultSize;
    }
    /**
     * Set resultSize value
     * @param int $_resultSize the resultSize
     * @return int
     */
    public function setResultSize($_resultSize)
    {
        return ($this->resultSize = $_resultSize);
    }
    /**
     * Get resultOffset value
     * @return int|null
     */
    public function getResultOffset()
    {
        return $this->resultOffset;
    }
    /**
     * Set resultOffset value
     * @param int $_resultOffset the resultOffset
     * @return int
     */
    public function setResultOffset($_resultOffset)
    {
        return ($this->resultOffset = $_resultOffset);
    }
    /**
     * Get resultScope value
     * @return int|null
     */
    public function getResultScope()
    {
        return $this->resultScope;
    }
    /**
     * Set resultScope value
     * @param int $_resultScope the resultScope
     * @return int
     */
    public function setResultScope($_resultScope)
    {
        return ($this->resultScope = $_resultScope);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetItemsListRequest
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
