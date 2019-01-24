<?php
/**
 * File for class AllegroStructDoGetRefundsListResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetRefundsListResponse originally named doGetRefundsListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetRefundsListResponse extends AllegroWsdlClass
{
    /**
     * The refundsCount
     * @var int
     */
    public $refundsCount;
    /**
     * The refundsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfRefundlisttype
     */
    public $refundsList;
    /**
     * The filtersList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFilterslisttype
     */
    public $filtersList;
    /**
     * Constructor method for doGetRefundsListResponse
     * @see parent::__construct()
     * @param int $_refundsCount
     * @param AllegroStructArrayOfRefundlisttype $_refundsList
     * @param AllegroStructArrayOfFilterslisttype $_filtersList
     * @return AllegroStructDoGetRefundsListResponse
     */
    public function __construct($_refundsCount = NULL,$_refundsList = NULL,$_filtersList = NULL)
    {
        parent::__construct(array('refundsCount'=>$_refundsCount,'refundsList'=>($_refundsList instanceof AllegroStructArrayOfRefundlisttype)?$_refundsList:new AllegroStructArrayOfRefundlisttype($_refundsList),'filtersList'=>($_filtersList instanceof AllegroStructArrayOfFilterslisttype)?$_filtersList:new AllegroStructArrayOfFilterslisttype($_filtersList)),false);
    }
    /**
     * Get refundsCount value
     * @return int|null
     */
    public function getRefundsCount()
    {
        return $this->refundsCount;
    }
    /**
     * Set refundsCount value
     * @param int $_refundsCount the refundsCount
     * @return int
     */
    public function setRefundsCount($_refundsCount)
    {
        return ($this->refundsCount = $_refundsCount);
    }
    /**
     * Get refundsList value
     * @return AllegroStructArrayOfRefundlisttype|null
     */
    public function getRefundsList()
    {
        return $this->refundsList;
    }
    /**
     * Set refundsList value
     * @param AllegroStructArrayOfRefundlisttype $_refundsList the refundsList
     * @return AllegroStructArrayOfRefundlisttype
     */
    public function setRefundsList($_refundsList)
    {
        return ($this->refundsList = $_refundsList);
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
     * @return AllegroStructDoGetRefundsListResponse
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
