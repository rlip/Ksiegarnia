<?php
/**
 * File for class AllegroStructDoGetServiceInfoCategoriesResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetServiceInfoCategoriesResponse originally named doGetServiceInfoCategoriesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetServiceInfoCategoriesResponse extends AllegroWsdlClass
{
    /**
     * The serviceInfoCatsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfServiceinfocatstruct
     */
    public $serviceInfoCatsList;
    /**
     * Constructor method for doGetServiceInfoCategoriesResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfServiceinfocatstruct $_serviceInfoCatsList
     * @return AllegroStructDoGetServiceInfoCategoriesResponse
     */
    public function __construct($_serviceInfoCatsList = NULL)
    {
        parent::__construct(array('serviceInfoCatsList'=>($_serviceInfoCatsList instanceof AllegroStructArrayOfServiceinfocatstruct)?$_serviceInfoCatsList:new AllegroStructArrayOfServiceinfocatstruct($_serviceInfoCatsList)),false);
    }
    /**
     * Get serviceInfoCatsList value
     * @return AllegroStructArrayOfServiceinfocatstruct|null
     */
    public function getServiceInfoCatsList()
    {
        return $this->serviceInfoCatsList;
    }
    /**
     * Set serviceInfoCatsList value
     * @param AllegroStructArrayOfServiceinfocatstruct $_serviceInfoCatsList the serviceInfoCatsList
     * @return AllegroStructArrayOfServiceinfocatstruct
     */
    public function setServiceInfoCatsList($_serviceInfoCatsList)
    {
        return ($this->serviceInfoCatsList = $_serviceInfoCatsList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetServiceInfoCategoriesResponse
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
