<?php
/**
 * File for class AllegroStructDoGetPostBuyFormsDataForBuyersResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetPostBuyFormsDataForBuyersResponse originally named doGetPostBuyFormsDataForBuyersResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetPostBuyFormsDataForBuyersResponse extends AllegroWsdlClass
{
    /**
     * The postBuyFormDataForBuyers
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfPostbuyformforbuyersdatastruct
     */
    public $postBuyFormDataForBuyers;
    /**
     * Constructor method for doGetPostBuyFormsDataForBuyersResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfPostbuyformforbuyersdatastruct $_postBuyFormDataForBuyers
     * @return AllegroStructDoGetPostBuyFormsDataForBuyersResponse
     */
    public function __construct($_postBuyFormDataForBuyers = NULL)
    {
        parent::__construct(array('postBuyFormDataForBuyers'=>($_postBuyFormDataForBuyers instanceof AllegroStructArrayOfPostbuyformforbuyersdatastruct)?$_postBuyFormDataForBuyers:new AllegroStructArrayOfPostbuyformforbuyersdatastruct($_postBuyFormDataForBuyers)),false);
    }
    /**
     * Get postBuyFormDataForBuyers value
     * @return AllegroStructArrayOfPostbuyformforbuyersdatastruct|null
     */
    public function getPostBuyFormDataForBuyers()
    {
        return $this->postBuyFormDataForBuyers;
    }
    /**
     * Set postBuyFormDataForBuyers value
     * @param AllegroStructArrayOfPostbuyformforbuyersdatastruct $_postBuyFormDataForBuyers the postBuyFormDataForBuyers
     * @return AllegroStructArrayOfPostbuyformforbuyersdatastruct
     */
    public function setPostBuyFormDataForBuyers($_postBuyFormDataForBuyers)
    {
        return ($this->postBuyFormDataForBuyers = $_postBuyFormDataForBuyers);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetPostBuyFormsDataForBuyersResponse
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
