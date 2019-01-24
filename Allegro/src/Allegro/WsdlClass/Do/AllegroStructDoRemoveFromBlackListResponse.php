<?php
/**
 * File for class AllegroStructDoRemoveFromBlackListResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoRemoveFromBlackListResponse originally named doRemoveFromBlackListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoRemoveFromBlackListResponse extends AllegroWsdlClass
{
    /**
     * The blackListResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfBlacklistresstruct
     */
    public $blackListResult;
    /**
     * Constructor method for doRemoveFromBlackListResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfBlacklistresstruct $_blackListResult
     * @return AllegroStructDoRemoveFromBlackListResponse
     */
    public function __construct($_blackListResult = NULL)
    {
        parent::__construct(array('blackListResult'=>($_blackListResult instanceof AllegroStructArrayOfBlacklistresstruct)?$_blackListResult:new AllegroStructArrayOfBlacklistresstruct($_blackListResult)),false);
    }
    /**
     * Get blackListResult value
     * @return AllegroStructArrayOfBlacklistresstruct|null
     */
    public function getBlackListResult()
    {
        return $this->blackListResult;
    }
    /**
     * Set blackListResult value
     * @param AllegroStructArrayOfBlacklistresstruct $_blackListResult the blackListResult
     * @return AllegroStructArrayOfBlacklistresstruct
     */
    public function setBlackListResult($_blackListResult)
    {
        return ($this->blackListResult = $_blackListResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoRemoveFromBlackListResponse
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
