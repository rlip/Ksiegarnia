<?php
/**
 * File for class AllegroStructDoGetServiceInfoResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetServiceInfoResponse originally named doGetServiceInfoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetServiceInfoResponse extends AllegroWsdlClass
{
    /**
     * The serviceInfoItemsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfServiceinfostruct
     */
    public $serviceInfoItemsList;
    /**
     * Constructor method for doGetServiceInfoResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfServiceinfostruct $_serviceInfoItemsList
     * @return AllegroStructDoGetServiceInfoResponse
     */
    public function __construct($_serviceInfoItemsList = NULL)
    {
        parent::__construct(array('serviceInfoItemsList'=>($_serviceInfoItemsList instanceof AllegroStructArrayOfServiceinfostruct)?$_serviceInfoItemsList:new AllegroStructArrayOfServiceinfostruct($_serviceInfoItemsList)),false);
    }
    /**
     * Get serviceInfoItemsList value
     * @return AllegroStructArrayOfServiceinfostruct|null
     */
    public function getServiceInfoItemsList()
    {
        return $this->serviceInfoItemsList;
    }
    /**
     * Set serviceInfoItemsList value
     * @param AllegroStructArrayOfServiceinfostruct $_serviceInfoItemsList the serviceInfoItemsList
     * @return AllegroStructArrayOfServiceinfostruct
     */
    public function setServiceInfoItemsList($_serviceInfoItemsList)
    {
        return ($this->serviceInfoItemsList = $_serviceInfoItemsList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetServiceInfoResponse
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
