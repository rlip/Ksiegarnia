<?php
/**
 * File for class AllegroStructDoAddToBlackListRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoAddToBlackListRequest originally named DoAddToBlackListRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoAddToBlackListRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The usersBlackListArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfUserblackliststruct
     */
    public $usersBlackListArray;
    /**
     * Constructor method for DoAddToBlackListRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param AllegroStructArrayOfUserblackliststruct $_usersBlackListArray
     * @return AllegroStructDoAddToBlackListRequest
     */
    public function __construct($_sessionHandle = NULL,$_usersBlackListArray = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'usersBlackListArray'=>($_usersBlackListArray instanceof AllegroStructArrayOfUserblackliststruct)?$_usersBlackListArray:new AllegroStructArrayOfUserblackliststruct($_usersBlackListArray)),false);
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
     * Get usersBlackListArray value
     * @return AllegroStructArrayOfUserblackliststruct|null
     */
    public function getUsersBlackListArray()
    {
        return $this->usersBlackListArray;
    }
    /**
     * Set usersBlackListArray value
     * @param AllegroStructArrayOfUserblackliststruct $_usersBlackListArray the usersBlackListArray
     * @return AllegroStructArrayOfUserblackliststruct
     */
    public function setUsersBlackListArray($_usersBlackListArray)
    {
        return ($this->usersBlackListArray = $_usersBlackListArray);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoAddToBlackListRequest
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
