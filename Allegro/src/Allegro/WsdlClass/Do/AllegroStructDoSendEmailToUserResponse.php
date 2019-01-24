<?php
/**
 * File for class AllegroStructDoSendEmailToUserResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoSendEmailToUserResponse originally named doSendEmailToUserResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoSendEmailToUserResponse extends AllegroWsdlClass
{
    /**
     * The mailToUserReceiverId
     * @var long
     */
    public $mailToUserReceiverId;
    /**
     * The mailToUserResult
     * @var string
     */
    public $mailToUserResult;
    /**
     * Constructor method for doSendEmailToUserResponse
     * @see parent::__construct()
     * @param long $_mailToUserReceiverId
     * @param string $_mailToUserResult
     * @return AllegroStructDoSendEmailToUserResponse
     */
    public function __construct($_mailToUserReceiverId = NULL,$_mailToUserResult = NULL)
    {
        parent::__construct(array('mailToUserReceiverId'=>$_mailToUserReceiverId,'mailToUserResult'=>$_mailToUserResult),false);
    }
    /**
     * Get mailToUserReceiverId value
     * @return long|null
     */
    public function getMailToUserReceiverId()
    {
        return $this->mailToUserReceiverId;
    }
    /**
     * Set mailToUserReceiverId value
     * @param long $_mailToUserReceiverId the mailToUserReceiverId
     * @return long
     */
    public function setMailToUserReceiverId($_mailToUserReceiverId)
    {
        return ($this->mailToUserReceiverId = $_mailToUserReceiverId);
    }
    /**
     * Get mailToUserResult value
     * @return string|null
     */
    public function getMailToUserResult()
    {
        return $this->mailToUserResult;
    }
    /**
     * Set mailToUserResult value
     * @param string $_mailToUserResult the mailToUserResult
     * @return string
     */
    public function setMailToUserResult($_mailToUserResult)
    {
        return ($this->mailToUserResult = $_mailToUserResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoSendEmailToUserResponse
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
