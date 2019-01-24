<?php
/**
 * File for class AllegroStructDoRemoveFromWatchListResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoRemoveFromWatchListResponse originally named doRemoveFromWatchListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoRemoveFromWatchListResponse extends AllegroWsdlClass
{
    /**
     * The watchListResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfItemremovewatchstruct
     */
    public $watchListResult;
    /**
     * Constructor method for doRemoveFromWatchListResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfItemremovewatchstruct $_watchListResult
     * @return AllegroStructDoRemoveFromWatchListResponse
     */
    public function __construct($_watchListResult = NULL)
    {
        parent::__construct(array('watchListResult'=>($_watchListResult instanceof AllegroStructArrayOfItemremovewatchstruct)?$_watchListResult:new AllegroStructArrayOfItemremovewatchstruct($_watchListResult)),false);
    }
    /**
     * Get watchListResult value
     * @return AllegroStructArrayOfItemremovewatchstruct|null
     */
    public function getWatchListResult()
    {
        return $this->watchListResult;
    }
    /**
     * Set watchListResult value
     * @param AllegroStructArrayOfItemremovewatchstruct $_watchListResult the watchListResult
     * @return AllegroStructArrayOfItemremovewatchstruct
     */
    public function setWatchListResult($_watchListResult)
    {
        return ($this->watchListResult = $_watchListResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoRemoveFromWatchListResponse
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
