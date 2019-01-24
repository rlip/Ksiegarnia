<?php
/**
 * File for class AllegroStructRelatedItemsStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructRelatedItemsStruct originally named RelatedItemsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructRelatedItemsStruct extends AllegroWsdlClass
{
    /**
     * The relatedItemsInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfRelateditemstruct
     */
    public $relatedItemsInfo;
    /**
     * The relatedItemsAmount
     * @var float
     */
    public $relatedItemsAmount;
    /**
     * Constructor method for RelatedItemsStruct
     * @see parent::__construct()
     * @param AllegroStructArrayOfRelateditemstruct $_relatedItemsInfo
     * @param float $_relatedItemsAmount
     * @return AllegroStructRelatedItemsStruct
     */
    public function __construct($_relatedItemsInfo = NULL,$_relatedItemsAmount = NULL)
    {
        parent::__construct(array('relatedItemsInfo'=>($_relatedItemsInfo instanceof AllegroStructArrayOfRelateditemstruct)?$_relatedItemsInfo:new AllegroStructArrayOfRelateditemstruct($_relatedItemsInfo),'relatedItemsAmount'=>$_relatedItemsAmount),false);
    }
    /**
     * Get relatedItemsInfo value
     * @return AllegroStructArrayOfRelateditemstruct|null
     */
    public function getRelatedItemsInfo()
    {
        return $this->relatedItemsInfo;
    }
    /**
     * Set relatedItemsInfo value
     * @param AllegroStructArrayOfRelateditemstruct $_relatedItemsInfo the relatedItemsInfo
     * @return AllegroStructArrayOfRelateditemstruct
     */
    public function setRelatedItemsInfo($_relatedItemsInfo)
    {
        return ($this->relatedItemsInfo = $_relatedItemsInfo);
    }
    /**
     * Get relatedItemsAmount value
     * @return float|null
     */
    public function getRelatedItemsAmount()
    {
        return $this->relatedItemsAmount;
    }
    /**
     * Set relatedItemsAmount value
     * @param float $_relatedItemsAmount the relatedItemsAmount
     * @return float
     */
    public function setRelatedItemsAmount($_relatedItemsAmount)
    {
        return ($this->relatedItemsAmount = $_relatedItemsAmount);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructRelatedItemsStruct
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
