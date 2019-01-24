<?php
/**
 * File for class AllegroStructDoGetShopCatsDataResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetShopCatsDataResponse originally named doGetShopCatsDataResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetShopCatsDataResponse extends AllegroWsdlClass
{
    /**
     * The shopCatsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfCatinfotype
     */
    public $shopCatsList;
    /**
     * Constructor method for doGetShopCatsDataResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfCatinfotype $_shopCatsList
     * @return AllegroStructDoGetShopCatsDataResponse
     */
    public function __construct($_shopCatsList = NULL)
    {
        parent::__construct(array('shopCatsList'=>($_shopCatsList instanceof AllegroStructArrayOfCatinfotype)?$_shopCatsList:new AllegroStructArrayOfCatinfotype($_shopCatsList)),false);
    }
    /**
     * Get shopCatsList value
     * @return AllegroStructArrayOfCatinfotype|null
     */
    public function getShopCatsList()
    {
        return $this->shopCatsList;
    }
    /**
     * Set shopCatsList value
     * @param AllegroStructArrayOfCatinfotype $_shopCatsList the shopCatsList
     * @return AllegroStructArrayOfCatinfotype
     */
    public function setShopCatsList($_shopCatsList)
    {
        return ($this->shopCatsList = $_shopCatsList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetShopCatsDataResponse
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
