<?php
/**
 * File for class AllegroStructDoGetShipmentDataResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetShipmentDataResponse originally named doGetShipmentDataResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetShipmentDataResponse extends AllegroWsdlClass
{
    /**
     * The shipmentDataList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfShipmentdatastruct
     */
    public $shipmentDataList;
    /**
     * The localVersion
     * @var long
     */
    public $localVersion;
    /**
     * Constructor method for doGetShipmentDataResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfShipmentdatastruct $_shipmentDataList
     * @param long $_localVersion
     * @return AllegroStructDoGetShipmentDataResponse
     */
    public function __construct($_shipmentDataList = NULL,$_localVersion = NULL)
    {
        parent::__construct(array('shipmentDataList'=>($_shipmentDataList instanceof AllegroStructArrayOfShipmentdatastruct)?$_shipmentDataList:new AllegroStructArrayOfShipmentdatastruct($_shipmentDataList),'localVersion'=>$_localVersion),false);
    }
    /**
     * Get shipmentDataList value
     * @return AllegroStructArrayOfShipmentdatastruct|null
     */
    public function getShipmentDataList()
    {
        return $this->shipmentDataList;
    }
    /**
     * Set shipmentDataList value
     * @param AllegroStructArrayOfShipmentdatastruct $_shipmentDataList the shipmentDataList
     * @return AllegroStructArrayOfShipmentdatastruct
     */
    public function setShipmentDataList($_shipmentDataList)
    {
        return ($this->shipmentDataList = $_shipmentDataList);
    }
    /**
     * Get localVersion value
     * @return long|null
     */
    public function getLocalVersion()
    {
        return $this->localVersion;
    }
    /**
     * Set localVersion value
     * @param long $_localVersion the localVersion
     * @return long
     */
    public function setLocalVersion($_localVersion)
    {
        return ($this->localVersion = $_localVersion);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetShipmentDataResponse
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
