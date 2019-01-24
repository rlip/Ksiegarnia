<?php
/**
 * File for class AllegroStructDoGetShipmentDataForRelatedItemsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetShipmentDataForRelatedItemsResponse originally named doGetShipmentDataForRelatedItemsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetShipmentDataForRelatedItemsResponse extends AllegroWsdlClass
{
    /**
     * The relatedItemsShipmentData
     * @var AllegroStructRelatedItemsShipmentDataStruct
     */
    public $relatedItemsShipmentData;
    /**
     * Constructor method for doGetShipmentDataForRelatedItemsResponse
     * @see parent::__construct()
     * @param AllegroStructRelatedItemsShipmentDataStruct $_relatedItemsShipmentData
     * @return AllegroStructDoGetShipmentDataForRelatedItemsResponse
     */
    public function __construct($_relatedItemsShipmentData = NULL)
    {
        parent::__construct(array('relatedItemsShipmentData'=>$_relatedItemsShipmentData),false);
    }
    /**
     * Get relatedItemsShipmentData value
     * @return AllegroStructRelatedItemsShipmentDataStruct|null
     */
    public function getRelatedItemsShipmentData()
    {
        return $this->relatedItemsShipmentData;
    }
    /**
     * Set relatedItemsShipmentData value
     * @param AllegroStructRelatedItemsShipmentDataStruct $_relatedItemsShipmentData the relatedItemsShipmentData
     * @return AllegroStructRelatedItemsShipmentDataStruct
     */
    public function setRelatedItemsShipmentData($_relatedItemsShipmentData)
    {
        return ($this->relatedItemsShipmentData = $_relatedItemsShipmentData);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetShipmentDataForRelatedItemsResponse
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
