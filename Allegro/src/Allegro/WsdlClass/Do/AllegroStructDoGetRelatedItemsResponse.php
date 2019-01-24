<?php
/**
 * File for class AllegroStructDoGetRelatedItemsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetRelatedItemsResponse originally named doGetRelatedItemsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetRelatedItemsResponse extends AllegroWsdlClass
{
    /**
     * The relatedItems
     * @var AllegroStructRelatedItemsStruct
     */
    public $relatedItems;
    /**
     * Constructor method for doGetRelatedItemsResponse
     * @see parent::__construct()
     * @param AllegroStructRelatedItemsStruct $_relatedItems
     * @return AllegroStructDoGetRelatedItemsResponse
     */
    public function __construct($_relatedItems = NULL)
    {
        parent::__construct(array('relatedItems'=>$_relatedItems),false);
    }
    /**
     * Get relatedItems value
     * @return AllegroStructRelatedItemsStruct|null
     */
    public function getRelatedItems()
    {
        return $this->relatedItems;
    }
    /**
     * Set relatedItems value
     * @param AllegroStructRelatedItemsStruct $_relatedItems the relatedItems
     * @return AllegroStructRelatedItemsStruct
     */
    public function setRelatedItems($_relatedItems)
    {
        return ($this->relatedItems = $_relatedItems);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetRelatedItemsResponse
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
