<?php
/**
 * File for class AllegroStructAdvertInfoType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructAdvertInfoType originally named AdvertInfoType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructAdvertInfoType extends AllegroWsdlClass
{
    /**
     * The serviceId
     * @var string
     */
    public $serviceId;
    /**
     * The advertId
     * @var string
     */
    public $advertId;
    /**
     * Constructor method for AdvertInfoType
     * @see parent::__construct()
     * @param string $_serviceId
     * @param string $_advertId
     * @return AllegroStructAdvertInfoType
     */
    public function __construct($_serviceId = NULL,$_advertId = NULL)
    {
        parent::__construct(array('serviceId'=>$_serviceId,'advertId'=>$_advertId),false);
    }
    /**
     * Get serviceId value
     * @return string|null
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }
    /**
     * Set serviceId value
     * @param string $_serviceId the serviceId
     * @return string
     */
    public function setServiceId($_serviceId)
    {
        return ($this->serviceId = $_serviceId);
    }
    /**
     * Get advertId value
     * @return string|null
     */
    public function getAdvertId()
    {
        return $this->advertId;
    }
    /**
     * Set advertId value
     * @param string $_advertId the advertId
     * @return string
     */
    public function setAdvertId($_advertId)
    {
        return ($this->advertId = $_advertId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructAdvertInfoType
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
