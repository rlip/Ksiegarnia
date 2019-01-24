<?php
/**
 * File for class AllegroStructDoGetRefundsDealsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetRefundsDealsResponse originally named doGetRefundsDealsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetRefundsDealsResponse extends AllegroWsdlClass
{
    /**
     * The dealsCount
     * @var int
     */
    public $dealsCount;
    /**
     * The dealsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfRefundsdealslisttype
     */
    public $dealsList;
    /**
     * The filtersList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFilterslisttype
     */
    public $filtersList;
    /**
     * Constructor method for doGetRefundsDealsResponse
     * @see parent::__construct()
     * @param int $_dealsCount
     * @param AllegroStructArrayOfRefundsdealslisttype $_dealsList
     * @param AllegroStructArrayOfFilterslisttype $_filtersList
     * @return AllegroStructDoGetRefundsDealsResponse
     */
    public function __construct($_dealsCount = NULL,$_dealsList = NULL,$_filtersList = NULL)
    {
        parent::__construct(array('dealsCount'=>$_dealsCount,'dealsList'=>($_dealsList instanceof AllegroStructArrayOfRefundsdealslisttype)?$_dealsList:new AllegroStructArrayOfRefundsdealslisttype($_dealsList),'filtersList'=>($_filtersList instanceof AllegroStructArrayOfFilterslisttype)?$_filtersList:new AllegroStructArrayOfFilterslisttype($_filtersList)),false);
    }
    /**
     * Get dealsCount value
     * @return int|null
     */
    public function getDealsCount()
    {
        return $this->dealsCount;
    }
    /**
     * Set dealsCount value
     * @param int $_dealsCount the dealsCount
     * @return int
     */
    public function setDealsCount($_dealsCount)
    {
        return ($this->dealsCount = $_dealsCount);
    }
    /**
     * Get dealsList value
     * @return AllegroStructArrayOfRefundsdealslisttype|null
     */
    public function getDealsList()
    {
        return $this->dealsList;
    }
    /**
     * Set dealsList value
     * @param AllegroStructArrayOfRefundsdealslisttype $_dealsList the dealsList
     * @return AllegroStructArrayOfRefundsdealslisttype
     */
    public function setDealsList($_dealsList)
    {
        return ($this->dealsList = $_dealsList);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetRefundsDealsResponse
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
