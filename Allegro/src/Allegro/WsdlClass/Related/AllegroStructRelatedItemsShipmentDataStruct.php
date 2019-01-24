<?php
/**
 * File for class AllegroStructRelatedItemsShipmentDataStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructRelatedItemsShipmentDataStruct originally named RelatedItemsShipmentDataStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructRelatedItemsShipmentDataStruct extends AllegroWsdlClass
{
    /**
     * The sellerShipmentData
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSellershipmentdatastruct
     */
    public $sellerShipmentData;
    /**
     * Constructor method for RelatedItemsShipmentDataStruct
     * @see parent::__construct()
     * @param AllegroStructArrayOfSellershipmentdatastruct $_sellerShipmentData
     * @return AllegroStructRelatedItemsShipmentDataStruct
     */
    public function __construct($_sellerShipmentData = NULL)
    {
        parent::__construct(array('sellerShipmentData'=>($_sellerShipmentData instanceof AllegroStructArrayOfSellershipmentdatastruct)?$_sellerShipmentData:new AllegroStructArrayOfSellershipmentdatastruct($_sellerShipmentData)),false);
    }
    /**
     * Get sellerShipmentData value
     * @return AllegroStructArrayOfSellershipmentdatastruct|null
     */
    public function getSellerShipmentData()
    {
        return $this->sellerShipmentData;
    }
    /**
     * Set sellerShipmentData value
     * @param AllegroStructArrayOfSellershipmentdatastruct $_sellerShipmentData the sellerShipmentData
     * @return AllegroStructArrayOfSellershipmentdatastruct
     */
    public function setSellerShipmentData($_sellerShipmentData)
    {
        return ($this->sellerShipmentData = $_sellerShipmentData);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructRelatedItemsShipmentDataStruct
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
