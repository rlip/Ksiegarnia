<?php
/**
 * File for class AllegroStructDoSearchRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoSearchRequest originally named DoSearchRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoSearchRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The searchQuery
     * @var AllegroStructSearchOptType
     */
    public $searchQuery;
    /**
     * Constructor method for DoSearchRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param AllegroStructSearchOptType $_searchQuery
     * @return AllegroStructDoSearchRequest
     */
    public function __construct($_sessionHandle = NULL,$_searchQuery = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'searchQuery'=>$_searchQuery),false);
    }
    /**
     * Get sessionHandle value
     * @return string|null
     */
    public function getSessionHandle()
    {
        return $this->sessionHandle;
    }
    /**
     * Set sessionHandle value
     * @param string $_sessionHandle the sessionHandle
     * @return string
     */
    public function setSessionHandle($_sessionHandle)
    {
        return ($this->sessionHandle = $_sessionHandle);
    }
    /**
     * Get searchQuery value
     * @return AllegroStructSearchOptType|null
     */
    public function getSearchQuery()
    {
        return $this->searchQuery;
    }
    /**
     * Set searchQuery value
     * @param AllegroStructSearchOptType $_searchQuery the searchQuery
     * @return AllegroStructSearchOptType
     */
    public function setSearchQuery($_searchQuery)
    {
        return ($this->searchQuery = $_searchQuery);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoSearchRequest
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
