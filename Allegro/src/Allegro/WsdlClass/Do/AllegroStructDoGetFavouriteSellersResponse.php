<?php
/**
 * File for class AllegroStructDoGetFavouriteSellersResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetFavouriteSellersResponse originally named doGetFavouriteSellersResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetFavouriteSellersResponse extends AllegroWsdlClass
{
    /**
     * The sFavouriteSellersList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFavouritessellersstruct
     */
    public $sFavouriteSellersList;
    /**
     * Constructor method for doGetFavouriteSellersResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfFavouritessellersstruct $_sFavouriteSellersList
     * @return AllegroStructDoGetFavouriteSellersResponse
     */
    public function __construct($_sFavouriteSellersList = NULL)
    {
        parent::__construct(array('sFavouriteSellersList'=>($_sFavouriteSellersList instanceof AllegroStructArrayOfFavouritessellersstruct)?$_sFavouriteSellersList:new AllegroStructArrayOfFavouritessellersstruct($_sFavouriteSellersList)),false);
    }
    /**
     * Get sFavouriteSellersList value
     * @return AllegroStructArrayOfFavouritessellersstruct|null
     */
    public function getSFavouriteSellersList()
    {
        return $this->sFavouriteSellersList;
    }
    /**
     * Set sFavouriteSellersList value
     * @param AllegroStructArrayOfFavouritessellersstruct $_sFavouriteSellersList the sFavouriteSellersList
     * @return AllegroStructArrayOfFavouritessellersstruct
     */
    public function setSFavouriteSellersList($_sFavouriteSellersList)
    {
        return ($this->sFavouriteSellersList = $_sFavouriteSellersList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetFavouriteSellersResponse
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
