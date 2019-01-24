<?php
/**
 * File for class AllegroStructDoGetItemsListResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetItemsListResponse originally named doGetItemsListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetItemsListResponse extends AllegroWsdlClass
{
    /**
     * The itemsCount
     * @var int
     */
    public $itemsCount;
    /**
     * The itemsFeaturedCount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $itemsFeaturedCount;
    /**
     * The itemsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfItemslisttype
     */
    public $itemsList;
    /**
     * The categoriesList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructCategoriesListType
     */
    public $categoriesList;
    /**
     * The filtersList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFilterslisttype
     */
    public $filtersList;
    /**
     * The filtersRejected
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfString
     */
    public $filtersRejected;
    /**
     * Constructor method for doGetItemsListResponse
     * @see parent::__construct()
     * @param int $_itemsCount
     * @param int $_itemsFeaturedCount
     * @param AllegroStructArrayOfItemslisttype $_itemsList
     * @param AllegroStructCategoriesListType $_categoriesList
     * @param AllegroStructArrayOfFilterslisttype $_filtersList
     * @param AllegroStructArrayOfString $_filtersRejected
     * @return AllegroStructDoGetItemsListResponse
     */
    public function __construct($_itemsCount = NULL,$_itemsFeaturedCount = NULL,$_itemsList = NULL,$_categoriesList = NULL,$_filtersList = NULL,$_filtersRejected = NULL)
    {
        parent::__construct(array('itemsCount'=>$_itemsCount,'itemsFeaturedCount'=>$_itemsFeaturedCount,'itemsList'=>($_itemsList instanceof AllegroStructArrayOfItemslisttype)?$_itemsList:new AllegroStructArrayOfItemslisttype($_itemsList),'categoriesList'=>$_categoriesList,'filtersList'=>($_filtersList instanceof AllegroStructArrayOfFilterslisttype)?$_filtersList:new AllegroStructArrayOfFilterslisttype($_filtersList),'filtersRejected'=>($_filtersRejected instanceof AllegroStructArrayOfString)?$_filtersRejected:new AllegroStructArrayOfString($_filtersRejected)),false);
    }
    /**
     * Get itemsCount value
     * @return int|null
     */
    public function getItemsCount()
    {
        return $this->itemsCount;
    }
    /**
     * Set itemsCount value
     * @param int $_itemsCount the itemsCount
     * @return int
     */
    public function setItemsCount($_itemsCount)
    {
        return ($this->itemsCount = $_itemsCount);
    }
    /**
     * Get itemsFeaturedCount value
     * @return int|null
     */
    public function getItemsFeaturedCount()
    {
        return $this->itemsFeaturedCount;
    }
    /**
     * Set itemsFeaturedCount value
     * @param int $_itemsFeaturedCount the itemsFeaturedCount
     * @return int
     */
    public function setItemsFeaturedCount($_itemsFeaturedCount)
    {
        return ($this->itemsFeaturedCount = $_itemsFeaturedCount);
    }
    /**
     * Get itemsList value
     * @return AllegroStructArrayOfItemslisttype|null
     */
    public function getItemsList()
    {
        return $this->itemsList;
    }
    /**
     * Set itemsList value
     * @param AllegroStructArrayOfItemslisttype $_itemsList the itemsList
     * @return AllegroStructArrayOfItemslisttype
     */
    public function setItemsList($_itemsList)
    {
        return ($this->itemsList = $_itemsList);
    }
    /**
     * Get categoriesList value
     * @return AllegroStructCategoriesListType|null
     */
    public function getCategoriesList()
    {
        return $this->categoriesList;
    }
    /**
     * Set categoriesList value
     * @param AllegroStructCategoriesListType $_categoriesList the categoriesList
     * @return AllegroStructCategoriesListType
     */
    public function setCategoriesList($_categoriesList)
    {
        return ($this->categoriesList = $_categoriesList);
    }
    /**
     * Get filtersList value
     * @return AllegroStructArrayOfFilterslisttype|null
     */
    public function getFiltersList()
    {
        return $this->filtersList;
    }
    /**
     * Set filtersList value
     * @param AllegroStructArrayOfFilterslisttype $_filtersList the filtersList
     * @return AllegroStructArrayOfFilterslisttype
     */
    public function setFiltersList($_filtersList)
    {
        return ($this->filtersList = $_filtersList);
    }
    /**
     * Get filtersRejected value
     * @return AllegroStructArrayOfString|null
     */
    public function getFiltersRejected()
    {
        return $this->filtersRejected;
    }
    /**
     * Set filtersRejected value
     * @param AllegroStructArrayOfString $_filtersRejected the filtersRejected
     * @return AllegroStructArrayOfString
     */
    public function setFiltersRejected($_filtersRejected)
    {
        return ($this->filtersRejected = $_filtersRejected);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetItemsListResponse
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
