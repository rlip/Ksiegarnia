<?php
/**
 * File for class AllegroStructPostBuyItemInfoStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPostBuyItemInfoStruct originally named PostBuyItemInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPostBuyItemInfoStruct extends AllegroWsdlClass
{
    /**
     * The itemId
     * @var long
     */
    public $itemId;
    /**
     * The itemPostBuyFormInfo
     * @var int
     */
    public $itemPostBuyFormInfo;
    /**
     * Constructor method for PostBuyItemInfoStruct
     * @see parent::__construct()
     * @param long $_itemId
     * @param int $_itemPostBuyFormInfo
     * @return AllegroStructPostBuyItemInfoStruct
     */
    public function __construct($_itemId = NULL,$_itemPostBuyFormInfo = NULL)
    {
        parent::__construct(array('itemId'=>$_itemId,'itemPostBuyFormInfo'=>$_itemPostBuyFormInfo),false);
    }
    /**
     * Get itemId value
     * @return long|null
     */
    public function getItemId()
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param long $_itemId the itemId
     * @return long
     */
    public function setItemId($_itemId)
    {
        return ($this->itemId = $_itemId);
    }
    /**
     * Get itemPostBuyFormInfo value
     * @return int|null
     */
    public function getItemPostBuyFormInfo()
    {
        return $this->itemPostBuyFormInfo;
    }
    /**
     * Set itemPostBuyFormInfo value
     * @param int $_itemPostBuyFormInfo the itemPostBuyFormInfo
     * @return int
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
     * @return AllegroStructPostBuyItemInfoStruct
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
