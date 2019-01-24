<?php
/**
 * File for class AllegroStructSellFilterOptionsStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSellFilterOptionsStruct originally named SellFilterOptionsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSellFilterOptionsStruct extends AllegroWsdlClass
{
    /**
     * The filterFormat
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $filterFormat;
    /**
     * The filterBids
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $filterBids;
    /**
     * The filterToEnd
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $filterToEnd;
    /**
     * The filterFromStart
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $filterFromStart;
    /**
     * The filterAutoListing
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $filterAutoListing;
    /**
     * The filterPrice
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructFilterPriceStruct
     */
    public $filterPrice;
    /**
     * The filterDurationType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $filterDurationType;
    /**
     * Constructor method for SellFilterOptionsStruct
     * @see parent::__construct()
     * @param int $_filterFormat
     * @param int $_filterBids
     * @param int $_filterToEnd
     * @param int $_filterFromStart
     * @param int $_filterAutoListing
     * @param AllegroStructFilterPriceStruct $_filterPrice
     * @param int $_filterDurationType
     * @return AllegroStructSellFilterOptionsStruct
     */
    public function __construct($_filterFormat = NULL,$_filterBids = NULL,$_filterToEnd = NULL,$_filterFromStart = NULL,$_filterAutoListing = NULL,$_filterPrice = NULL,$_filterDurationType = NULL)
    {
        parent::__construct(array('filterFormat'=>$_filterFormat,'filterBids'=>$_filterBids,'filterToEnd'=>$_filterToEnd,'filterFromStart'=>$_filterFromStart,'filterAutoListing'=>$_filterAutoListing,'filterPrice'=>$_filterPrice,'filterDurationType'=>$_filterDurationType),false);
    }
    /**
     * Get filterFormat value
     * @return int|null
     */
    public function getFilterFormat()
    {
        return $this->filterFormat;
    }
    /**
     * Set filterFormat value
     * @param int $_filterFormat the filterFormat
     * @return int
     */
    public function setFilterFormat($_filterFormat)
    {
        return ($this->filterFormat = $_filterFormat);
    }
    /**
     * Get filterBids value
     * @return int|null
     */
    public function getFilterBids()
    {
        return $this->filterBids;
    }
    /**
     * Set filterBids value
     * @param int $_filterBids the filterBids
     * @return int
     */
    public function setFilterBids($_filterBids)
    {
        return ($this->filterBids = $_filterBids);
    }
    /**
     * Get filterToEnd value
     * @return int|null
     */
    public function getFilterToEnd()
    {
        return $this->filterToEnd;
    }
    /**
     * Set filterToEnd value
     * @param int $_filterToEnd the filterToEnd
     * @return int
     */
    public function setFilterToEnd($_filterToEnd)
    {
        return ($this->filterToEnd = $_filterToEnd);
    }
    /**
     * Get filterFromStart value
     * @return int|null
     */
    public function getFilterFromStart()
    {
        return $this->filterFromStart;
    }
    /**
     * Set filterFromStart value
     * @param int $_filterFromStart the filterFromStart
     * @return int
     */
    public function setFilterFromStart($_filterFromStart)
    {
        return ($this->filterFromStart = $_filterFromStart);
    }
    /**
     * Get filterAutoListing value
     * @return int|null
     */
    public function getFilterAutoListing()
    {
        return $this->filterAutoListing;
    }
    /**
     * Set filterAutoListing value
     * @param int $_filterAutoListing the filterAutoListing
     * @return int
     */
    public function setFilterAutoListing($_filterAutoListing)
    {
        return ($this->filterAutoListing = $_filterAutoListing);
    }
    /**
     * Get filterPrice value
     * @return AllegroStructFilterPriceStruct|null
     */
    public function getFilterPrice()
    {
        return $this->filterPrice;
    }
    /**
     * Set filterPrice value
     * @param AllegroStructFilterPriceStruct $_filterPrice the filterPrice
     * @return AllegroStructFilterPriceStruct
     */
    public function setFilterPrice($_filterPrice)
    {
        return ($this->filterPrice = $_filterPrice);
    }
    /**
     * Get filterDurationType value
     * @return int|null
     */
    public function getFilterDurationType()
    {
        return $this->filterDurationType;
    }
    /**
     * Set filterDurationType value
     * @param int $_filterDurationType the filterDurationType
     * @return int
     */
    public function setFilterDurationType($_filterDurationType)
    {
        return ($this->filterDurationType = $_filterDurationType);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructSellFilterOptionsStruct
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
