<?php
/**
 * File for class AllegroStructDoGetShopsTagsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetShopsTagsResponse originally named doGetShopsTagsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetShopsTagsResponse extends AllegroWsdlClass
{
    /**
     * The shopsTagsCount
     * @var int
     */
    public $shopsTagsCount;
    /**
     * The shopsTags
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfShopstagtypestruct
     */
    public $shopsTags;
    /**
     * Constructor method for doGetShopsTagsResponse
     * @see parent::__construct()
     * @param int $_shopsTagsCount
     * @param AllegroStructArrayOfShopstagtypestruct $_shopsTags
     * @return AllegroStructDoGetShopsTagsResponse
     */
    public function __construct($_shopsTagsCount = NULL,$_shopsTags = NULL)
    {
        parent::__construct(array('shopsTagsCount'=>$_shopsTagsCount,'shopsTags'=>($_shopsTags instanceof AllegroStructArrayOfShopstagtypestruct)?$_shopsTags:new AllegroStructArrayOfShopstagtypestruct($_shopsTags)),false);
    }
    /**
     * Get shopsTagsCount value
     * @return int|null
     */
    public function getShopsTagsCount()
    {
        return $this->shopsTagsCount;
    }
    /**
     * Set shopsTagsCount value
     * @param int $_shopsTagsCount the shopsTagsCount
     * @return int
     */
    public function setShopsTagsCount($_shopsTagsCount)
    {
        return ($this->shopsTagsCount = $_shopsTagsCount);
    }
    /**
     * Get shopsTags value
     * @return AllegroStructArrayOfShopstagtypestruct|null
     */
    public function getShopsTags()
    {
        return $this->shopsTags;
    }
    /**
     * Set shopsTags value
     * @param AllegroStructArrayOfShopstagtypestruct $_shopsTags the shopsTags
     * @return AllegroStructArrayOfShopstagtypestruct
     */
    public function setShopsTags($_shopsTags)
    {
        return ($this->shopsTags = $_shopsTags);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetShopsTagsResponse
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
