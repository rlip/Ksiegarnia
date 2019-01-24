<?php
/**
 * File for class AllegroStructDoGetBlackListUsersResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetBlackListUsersResponse originally named doGetBlackListUsersResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetBlackListUsersResponse extends AllegroWsdlClass
{
    /**
     * The blackListUsers
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfBlackliststruct
     */
    public $blackListUsers;
    /**
     * Constructor method for doGetBlackListUsersResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfBlackliststruct $_blackListUsers
     * @return AllegroStructDoGetBlackListUsersResponse
     */
    public function __construct($_blackListUsers = NULL)
    {
        parent::__construct(array('blackListUsers'=>($_blackListUsers instanceof AllegroStructArrayOfBlackliststruct)?$_blackListUsers:new AllegroStructArrayOfBlackliststruct($_blackListUsers)),false);
    }
    /**
     * Get blackListUsers value
     * @return AllegroStructArrayOfBlackliststruct|null
     */
    public function getBlackListUsers()
    {
        return $this->blackListUsers;
    }
    /**
     * Set blackListUsers value
     * @param AllegroStructArrayOfBlackliststruct $_blackListUsers the blackListUsers
     * @return AllegroStructArrayOfBlackliststruct
     */
    public function setBlackListUsers($_blackListUsers)
    {
        return ($this->blackListUsers = $_blackListUsers);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetBlackListUsersResponse
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
