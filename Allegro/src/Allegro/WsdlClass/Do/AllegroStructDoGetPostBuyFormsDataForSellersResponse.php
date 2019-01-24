<?php
/**
 * File for class AllegroStructDoGetPostBuyFormsDataForSellersResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetPostBuyFormsDataForSellersResponse originally named doGetPostBuyFormsDataForSellersResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetPostBuyFormsDataForSellersResponse extends AllegroWsdlClass
{
    /**
     * The postBuyFormData
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfPostbuyformdatastruct
     */
    public $postBuyFormData;
    /**
     * Constructor method for doGetPostBuyFormsDataForSellersResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfPostbuyformdatastruct $_postBuyFormData
     * @return AllegroStructDoGetPostBuyFormsDataForSellersResponse
     */
    public function __construct($_postBuyFormData = NULL)
    {
        parent::__construct(array('postBuyFormData'=>($_postBuyFormData instanceof AllegroStructArrayOfPostbuyformdatastruct)?$_postBuyFormData:new AllegroStructArrayOfPostbuyformdatastruct($_postBuyFormData)),false);
    }
    /**
     * Get postBuyFormData value
     * @return AllegroStructArrayOfPostbuyformdatastruct|null
     */
    public function getPostBuyFormData()
    {
        return $this->postBuyFormData;
    }
    /**
     * Set postBuyFormData value
     * @param AllegroStructArrayOfPostbuyformdatastruct $_postBuyFormData the postBuyFormData
     * @return AllegroStructArrayOfPostbuyformdatastruct
     */
    public function setPostBuyFormData($_postBuyFormData)
    {
        return ($this->postBuyFormData = $_postBuyFormData);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetPostBuyFormsDataForSellersResponse
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
