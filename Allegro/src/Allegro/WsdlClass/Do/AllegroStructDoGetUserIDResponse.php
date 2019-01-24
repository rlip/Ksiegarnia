<?php
/**
 * File for class AllegroStructDoGetUserIDResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetUserIDResponse originally named doGetUserIDResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetUserIDResponse extends AllegroWsdlClass
{
    /**
     * The userId
     * @var int
     */
    public $userId;
    /**
     * Constructor method for doGetUserIDResponse
     * @see parent::__construct()
     * @param int $_userId
     * @return AllegroStructDoGetUserIDResponse
     */
    public function __construct($_userId = NULL)
    {
        parent::__construct(array('userId'=>$_userId),false);
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId()
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $_userId the userId
     * @return int
     */
    public function setUserId($_userId)
    {
        return ($this->userId = $_userId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetUserIDResponse
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
