<?php
/**
 * File for class AllegroStructDoRemoveFromBlackListRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoRemoveFromBlackListRequest originally named DoRemoveFromBlackListRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoRemoveFromBlackListRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The usersIdArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $usersIdArray;
    /**
     * Constructor method for DoRemoveFromBlackListRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param AllegroStructArrayOfLong $_usersIdArray
     * @return AllegroStructDoRemoveFromBlackListRequest
     */
    public function __construct($_sessionHandle = NULL,$_usersIdArray = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'usersIdArray'=>($_usersIdArray instanceof AllegroStructArrayOfLong)?$_usersIdArray:new AllegroStructArrayOfLong($_usersIdArray)),false);
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
     * Get usersIdArray value
     * @return AllegroStructArrayOfLong|null
     */
    public function getUsersIdArray()
    {
        return $this->usersIdArray;
    }
    /**
     * Set usersIdArray value
     * @param AllegroStructArrayOfLong $_usersIdArray the usersIdArray
     * @return AllegroStructArrayOfLong
     */
    public function setUsersIdArray($_usersIdArray)
    {
        return ($this->usersIdArray = $_usersIdArray);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoRemoveFromBlackListRequest
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
