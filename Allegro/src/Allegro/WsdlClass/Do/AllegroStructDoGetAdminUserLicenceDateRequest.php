<?php
/**
 * File for class AllegroStructDoGetAdminUserLicenceDateRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetAdminUserLicenceDateRequest originally named DoGetAdminUserLicenceDateRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetAdminUserLicenceDateRequest extends AllegroWsdlClass
{
    /**
     * The adminSessionHandle
     * @var string
     */
    public $adminSessionHandle;
    /**
     * The userLicLogin
     * @var string
     */
    public $userLicLogin;
    /**
     * Constructor method for DoGetAdminUserLicenceDateRequest
     * @see parent::__construct()
     * @param string $_adminSessionHandle
     * @param string $_userLicLogin
     * @return AllegroStructDoGetAdminUserLicenceDateRequest
     */
    public function __construct($_adminSessionHandle = NULL,$_userLicLogin = NULL)
    {
        parent::__construct(array('adminSessionHandle'=>$_adminSessionHandle,'userLicLogin'=>$_userLicLogin),false);
    }
    /**
     * Get adminSessionHandle value
     * @return string|null
     */
    public function getAdminSessionHandle()
    {
        return $this->adminSessionHandle;
    }
    /**
     * Set adminSessionHandle value
     * @param string $_adminSessionHandle the adminSessionHandle
     * @return string
     */
    public function setAdminSessionHandle($_adminSessionHandle)
    {
        return ($this->adminSessionHandle = $_adminSessionHandle);
    }
    /**
     * Get userLicLogin value
     * @return string|null
     */
    public function getUserLicLogin()
    {
        return $this->userLicLogin;
    }
    /**
     * Set userLicLogin value
     * @param string $_userLicLogin the userLicLogin
     * @return string
     */
    public function setUserLicLogin($_userLicLogin)
    {
        return ($this->userLicLogin = $_userLicLogin);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetAdminUserLicenceDateRequest
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
