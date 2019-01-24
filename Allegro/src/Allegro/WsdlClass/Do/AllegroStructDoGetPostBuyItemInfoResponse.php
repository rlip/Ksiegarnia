<?php
/**
 * File for class AllegroStructDoGetPostBuyItemInfoResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetPostBuyItemInfoResponse originally named doGetPostBuyItemInfoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetPostBuyItemInfoResponse extends AllegroWsdlClass
{
    /**
     * The itemPostBuyFormInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfPostbuyiteminfostruct
     */
    public $itemPostBuyFormInfo;
    /**
     * Constructor method for doGetPostBuyItemInfoResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfPostbuyiteminfostruct $_itemPostBuyFormInfo
     * @return AllegroStructDoGetPostBuyItemInfoResponse
     */
    public function __construct($_itemPostBuyFormInfo = NULL)
    {
        parent::__construct(array('itemPostBuyFormInfo'=>($_itemPostBuyFormInfo instanceof AllegroStructArrayOfPostbuyiteminfostruct)?$_itemPostBuyFormInfo:new AllegroStructArrayOfPostbuyiteminfostruct($_itemPostBuyFormInfo)),false);
    }
    /**
     * Get itemPostBuyFormInfo value
     * @return AllegroStructArrayOfPostbuyiteminfostruct|null
     */
    public function getItemPostBuyFormInfo()
    {
        return $this->itemPostBuyFormInfo;
    }
    /**
     * Set itemPostBuyFormInfo value
     * @param AllegroStructArrayOfPostbuyiteminfostruct $_itemPostBuyFormInfo the itemPostBuyFormInfo
     * @return AllegroStructArrayOfPostbuyiteminfostruct
     */
    public function setItemPostBuyFormInfo($_itemPostBuyFormInfo)
    {
        return ($this->itemPostBuyFormInfo = $_itemPostBuyFormInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetPostBuyItemInfoResponse
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
