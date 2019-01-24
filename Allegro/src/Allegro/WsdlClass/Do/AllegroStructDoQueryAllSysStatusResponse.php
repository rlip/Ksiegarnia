<?php
/**
 * File for class AllegroStructDoQueryAllSysStatusResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoQueryAllSysStatusResponse originally named doQueryAllSysStatusResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoQueryAllSysStatusResponse extends AllegroWsdlClass
{
    /**
     * The sysCountryStatus
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSysstatustype
     */
    public $sysCountryStatus;
    /**
     * Constructor method for doQueryAllSysStatusResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfSysstatustype $_sysCountryStatus
     * @return AllegroStructDoQueryAllSysStatusResponse
     */
    public function __construct($_sysCountryStatus = NULL)
    {
        parent::__construct(array('sysCountryStatus'=>($_sysCountryStatus instanceof AllegroStructArrayOfSysstatustype)?$_sysCountryStatus:new AllegroStructArrayOfSysstatustype($_sysCountryStatus)),false);
    }
    /**
     * Get sysCountryStatus value
     * @return AllegroStructArrayOfSysstatustype|null
     */
    public function getSysCountryStatus()
    {
        return $this->sysCountryStatus;
    }
    /**
     * Set sysCountryStatus value
     * @param AllegroStructArrayOfSysstatustype $_sysCountryStatus the sysCountryStatus
     * @return AllegroStructArrayOfSysstatustype
     */
    public function setSysCountryStatus($_sysCountryStatus)
    {
        return ($this->sysCountryStatus = $_sysCountryStatus);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoQueryAllSysStatusResponse
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
