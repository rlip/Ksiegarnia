<?php
/**
 * File for class AllegroStructDoAddToWatchListResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoAddToWatchListResponse originally named doAddToWatchListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoAddToWatchListResponse extends AllegroWsdlClass
{
    /**
     * The watchListInfo
     * @var AllegroStructWatchListInfoStruct
     */
    public $watchListInfo;
    /**
     * Constructor method for doAddToWatchListResponse
     * @see parent::__construct()
     * @param AllegroStructWatchListInfoStruct $_watchListInfo
     * @return AllegroStructDoAddToWatchListResponse
     */
    public function __construct($_watchListInfo = NULL)
    {
        parent::__construct(array('watchListInfo'=>$_watchListInfo),false);
    }
    /**
     * Get watchListInfo value
     * @return AllegroStructWatchListInfoStruct|null
     */
    public function getWatchListInfo()
    {
        return $this->watchListInfo;
    }
    /**
     * Set watchListInfo value
     * @param AllegroStructWatchListInfoStruct $_watchListInfo the watchListInfo
     * @return AllegroStructWatchListInfoStruct
     */
    public function setWatchListInfo($_watchListInfo)
    {
        return ($this->watchListInfo = $_watchListInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoAddToWatchListResponse
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
