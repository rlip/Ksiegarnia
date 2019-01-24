<?php
/**
 * File for class AllegroStructDoGetFavouriteCategoriesResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetFavouriteCategoriesResponse originally named doGetFavouriteCategoriesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetFavouriteCategoriesResponse extends AllegroWsdlClass
{
    /**
     * The sFavouriteCategoriesList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFavouritescategoriesstruct
     */
    public $sFavouriteCategoriesList;
    /**
     * Constructor method for doGetFavouriteCategoriesResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfFavouritescategoriesstruct $_sFavouriteCategoriesList
     * @return AllegroStructDoGetFavouriteCategoriesResponse
     */
    public function __construct($_sFavouriteCategoriesList = NULL)
    {
        parent::__construct(array('sFavouriteCategoriesList'=>($_sFavouriteCategoriesList instanceof AllegroStructArrayOfFavouritescategoriesstruct)?$_sFavouriteCategoriesList:new AllegroStructArrayOfFavouritescategoriesstruct($_sFavouriteCategoriesList)),false);
    }
    /**
     * Get sFavouriteCategoriesList value
     * @return AllegroStructArrayOfFavouritescategoriesstruct|null
     */
    public function getSFavouriteCategoriesList()
    {
        return $this->sFavouriteCategoriesList;
    }
    /**
     * Set sFavouriteCategoriesList value
     * @param AllegroStructArrayOfFavouritescategoriesstruct $_sFavouriteCategoriesList the sFavouriteCategoriesList
     * @return AllegroStructArrayOfFavouritescategoriesstruct
     */
    public function setSFavouriteCategoriesList($_sFavouriteCategoriesList)
    {
        return ($this->sFavouriteCategoriesList = $_sFavouriteCategoriesList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetFavouriteCategoriesResponse
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
