<?php
/**
 * File for class AllegroStructDoGetPostBuyFormsIdsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetPostBuyFormsIdsResponse originally named doGetPostBuyFormsIdsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetPostBuyFormsIdsResponse extends AllegroWsdlClass
{
    /**
     * The formsCount
     * @var int
     */
    public $formsCount;
    /**
     * The formsIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $formsIds;
    /**
     * The filtersList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFilterslisttype
     */
    public $filtersList;
    /**
     * Constructor method for doGetPostBuyFormsIdsResponse
     * @see parent::__construct()
     * @param int $_formsCount
     * @param AllegroStructArrayOfLong $_formsIds
     * @param AllegroStructArrayOfFilterslisttype $_filtersList
     * @return AllegroStructDoGetPostBuyFormsIdsResponse
     */
    public function __construct($_formsCount = NULL,$_formsIds = NULL,$_filtersList = NULL)
    {
        parent::__construct(array('formsCount'=>$_formsCount,'formsIds'=>($_formsIds instanceof AllegroStructArrayOfLong)?$_formsIds:new AllegroStructArrayOfLong($_formsIds),'filtersList'=>($_filtersList instanceof AllegroStructArrayOfFilterslisttype)?$_filtersList:new AllegroStructArrayOfFilterslisttype($_filtersList)),false);
    }
    /**
     * Get formsCount value
     * @return int|null
     */
    public function getFormsCount()
    {
        return $this->formsCount;
    }
    /**
     * Set formsCount value
     * @param int $_formsCount the formsCount
     * @return int
     */
    public function setFormsCount($_formsCount)
    {
        return ($this->formsCount = $_formsCount);
    }
    /**
     * Get formsIds value
     * @return AllegroStructArrayOfLong|null
     */
    public function getFormsIds()
    {
        return $this->formsIds;
    }
    /**
     * Set formsIds value
     * @param AllegroStructArrayOfLong $_formsIds the formsIds
     * @return AllegroStructArrayOfLong
     */
    public function setFormsIds($_formsIds)
    {
        return ($this->formsIds = $_formsIds);
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
     * @return AllegroStructDoGetPostBuyFormsIdsResponse
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
