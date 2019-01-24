<?php
/**
 * File for class AllegroStructDoGetMyNotSoldItemsRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMyNotSoldItemsRequest originally named DoGetMyNotSoldItemsRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMyNotSoldItemsRequest extends AllegroWsdlClass
{
    /**
     * The sessionId
     * @var string
     */
    public $sessionId;
    /**
     * The sortOptions
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructSortOptionsStruct
     */
    public $sortOptions;
    /**
     * The filterOptions
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructNotSoldFilterOptionsStruct
     */
    public $filterOptions;
    /**
     * The searchValue
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $searchValue;
    /**
     * The categoryId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $categoryId;
    /**
     * The itemIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $itemIds;
    /**
     * The pageSize
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $pageSize;
    /**
     * The pageNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $pageNumber;
    /**
     * Constructor method for DoGetMyNotSoldItemsRequest
     * @see parent::__construct()
     * @param string $_sessionId
     * @param AllegroStructSortOptionsStruct $_sortOptions
     * @param AllegroStructNotSoldFilterOptionsStruct $_filterOptions
     * @param string $_searchValue
     * @param int $_categoryId
     * @param AllegroStructArrayOfLong $_itemIds
     * @param int $_pageSize
     * @param int $_pageNumber
     * @return AllegroStructDoGetMyNotSoldItemsRequest
     */
    public function __construct($_sessionId = NULL,$_sortOptions = NULL,$_filterOptions = NULL,$_searchValue = NULL,$_categoryId = NULL,$_itemIds = NULL,$_pageSize = NULL,$_pageNumber = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'sortOptions'=>$_sortOptions,'filterOptions'=>$_filterOptions,'searchValue'=>$_searchValue,'categoryId'=>$_categoryId,'itemIds'=>($_itemIds instanceof AllegroStructArrayOfLong)?$_itemIds:new AllegroStructArrayOfLong($_itemIds),'pageSize'=>$_pageSize,'pageNumber'=>$_pageNumber),false);
    }
    /**
     * Get sessionId value
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param string $_sessionId the sessionId
     * @return string
     */
    public function setSessionId($_sessionId)
    {
        return ($this->sessionId = $_sessionId);
    }
    /**
     * Get sortOptions value
     * @return AllegroStructSortOptionsStruct|null
     */
    public function getSortOptions()
    {
        return $this->sortOptions;
    }
    /**
     * Set sortOptions value
     * @param AllegroStructSortOptionsStruct $_sortOptions the sortOptions
     * @return AllegroStructSortOptionsStruct
     */
    public function setSortOptions($_sortOptions)
    {
        return ($this->sortOptions = $_sortOptions);
    }
    /**
     * Get filterOptions value
     * @return AllegroStructNotSoldFilterOptionsStruct|null
     */
    public function getFilterOptions()
    {
        return $this->filterOptions;
    }
    /**
     * Set filterOptions value
     * @param AllegroStructNotSoldFilterOptionsStruct $_filterOptions the filterOptions
     * @return AllegroStructNotSoldFilterOptionsStruct
     */
    public function setFilterOptions($_filterOptions)
    {
        return ($this->filterOptions = $_filterOptions);
    }
    /**
     * Get searchValue value
     * @return string|null
     */
    public function getSearchValue()
    {
        return $this->searchValue;
    }
    /**
     * Set searchValue value
     * @param string $_searchValue the searchValue
     * @return string
     */
    public function setSearchValue($_searchValue)
    {
        return ($this->searchValue = $_searchValue);
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
     * Get itemIds value
     * @return AllegroStructArrayOfLong|null
     */
    public function getItemIds()
    {
        return $this->itemIds;
    }
    /**
     * Set itemIds value
     * @param AllegroStructArrayOfLong $_itemIds the itemIds
     * @return AllegroStructArrayOfLong
     */
    public function setItemIds($_itemIds)
    {
        return ($this->itemIds = $_itemIds);
    }
    /**
     * Get pageSize value
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }
    /**
     * Set pageSize value
     * @param int $_pageSize the pageSize
     * @return int
     */
    public function setPageSize($_pageSize)
    {
        return ($this->pageSize = $_pageSize);
    }
    /**
     * Get pageNumber value
     * @return int|null
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }
    /**
     * Set pageNumber value
     * @param int $_pageNumber the pageNumber
     * @return int
     */
    public function setPageNumber($_pageNumber)
    {
        return ($this->pageNumber = $_pageNumber);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMyNotSoldItemsRequest
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
