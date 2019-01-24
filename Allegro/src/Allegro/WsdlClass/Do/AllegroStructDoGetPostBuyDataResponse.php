<?php
/**
 * File for class AllegroStructDoGetPostBuyDataResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetPostBuyDataResponse originally named doGetPostBuyDataResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetPostBuyDataResponse extends AllegroWsdlClass
{
    /**
     * The itemsPostBuyData
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfItempostbuydatastruct
     */
    public $itemsPostBuyData;
    /**
     * Constructor method for doGetPostBuyDataResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfItempostbuydatastruct $_itemsPostBuyData
     * @return AllegroStructDoGetPostBuyDataResponse
     */
    public function __construct($_itemsPostBuyData = NULL)
    {
        parent::__construct(array('itemsPostBuyData'=>($_itemsPostBuyData instanceof AllegroStructArrayOfItempostbuydatastruct)?$_itemsPostBuyData:new AllegroStructArrayOfItempostbuydatastruct($_itemsPostBuyData)),false);
    }
    /**
     * Get itemsPostBuyData value
     * @return AllegroStructArrayOfItempostbuydatastruct|null
     */
    public function getItemsPostBuyData()
    {
        return $this->itemsPostBuyData;
    }
    /**
     * Set itemsPostBuyData value
     * @param AllegroStructArrayOfItempostbuydatastruct $_itemsPostBuyData the itemsPostBuyData
     * @return AllegroStructArrayOfItempostbuydatastruct
     */
    public function setItemsPostBuyData($_itemsPostBuyData)
    {
        return ($this->itemsPostBuyData = $_itemsPostBuyData);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetPostBuyDataResponse
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
