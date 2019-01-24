<?php
/**
 * File for class AllegroStructSoldFilterOptionsStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSoldFilterOptionsStruct originally named SoldFilterOptionsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSoldFilterOptionsStruct extends AllegroWsdlClass
{
    /**
     * The filterFormat
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $filterFormat;
    /**
     * The filterFromEnd
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $filterFromEnd;
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
     * Constructor method for SoldFilterOptionsStruct
     * @see parent::__construct()
     * @param int $_filterFormat
     * @param int $_filterFromEnd
     * @param int $_filterAutoListing
     * @param AllegroStructFilterPriceStruct $_filterPrice
     * @param int $_filterDurationType
     * @return AllegroStructSoldFilterOptionsStruct
     */
    public function __construct($_filterFormat = NULL,$_filterFromEnd = NULL,$_filterAutoListing = NULL,$_filterPrice = NULL,$_filterDurationType = NULL)
    {
        parent::__construct(array('filterFormat'=>$_filterFormat,'filterFromEnd'=>$_filterFromEnd,'filterAutoListing'=>$_filterAutoListing,'filterPrice'=>$_filterPrice,'filterDurationType'=>$_filterDurationType),false);
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
     * Get filterFromEnd value
     * @return int|null
     */
    public function getFilterFromEnd()
    {
        return $this->filterFromEnd;
    }
    /**
     * Set filterFromEnd value
     * @param int $_filterFromEnd the filterFromEnd
     * @return int
     */
    public function setFilterFromEnd($_filterFromEnd)
    {
        return ($this->filterFromEnd = $_filterFromEnd);
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
     * @return AllegroStructSoldFilterOptionsStruct
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
