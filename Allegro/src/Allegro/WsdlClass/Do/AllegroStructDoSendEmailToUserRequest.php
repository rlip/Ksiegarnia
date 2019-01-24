<?php
/**
 * File for class AllegroStructDoSendEmailToUserRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoSendEmailToUserRequest originally named DoSendEmailToUserRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoSendEmailToUserRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The mailToUserItemId
     * @var long
     */
    public $mailToUserItemId;
    /**
     * The mailToUserReceiverId
     * @var long
     */
    public $mailToUserReceiverId;
    /**
     * The mailToUserSubjectId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $mailToUserSubjectId;
    /**
     * The mailToUserOption
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $mailToUserOption;
    /**
     * The mailToUserMessage
     * @var string
     */
    public $mailToUserMessage;
    /**
     * Constructor method for DoSendEmailToUserRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param long $_mailToUserItemId
     * @param long $_mailToUserReceiverId
     * @param int $_mailToUserSubjectId
     * @param int $_mailToUserOption
     * @param string $_mailToUserMessage
     * @return AllegroStructDoSendEmailToUserRequest
     */
    public function __construct($_sessionHandle = NULL,$_mailToUserItemId = NULL,$_mailToUserReceiverId = NULL,$_mailToUserSubjectId = NULL,$_mailToUserOption = NULL,$_mailToUserMessage = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'mailToUserItemId'=>$_mailToUserItemId,'mailToUserReceiverId'=>$_mailToUserReceiverId,'mailToUserSubjectId'=>$_mailToUserSubjectId,'mailToUserOption'=>$_mailToUserOption,'mailToUserMessage'=>$_mailToUserMessage),false);
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
     * Get mailToUserItemId value
     * @return long|null
     */
    public function getMailToUserItemId()
    {
        return $this->mailToUserItemId;
    }
    /**
     * Set mailToUserItemId value
     * @param long $_mailToUserItemId the mailToUserItemId
     * @return long
     */
    public function setMailToUserItemId($_mailToUserItemId)
    {
        return ($this->mailToUserItemId = $_mailToUserItemId);
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
     * Get mailToUserSubjectId value
     * @return int|null
     */
    public function getMailToUserSubjectId()
    {
        return $this->mailToUserSubjectId;
    }
    /**
     * Set mailToUserSubjectId value
     * @param int $_mailToUserSubjectId the mailToUserSubjectId
     * @return int
     */
    public function setMailToUserSubjectId($_mailToUserSubjectId)
    {
        return ($this->mailToUserSubjectId = $_mailToUserSubjectId);
    }
    /**
     * Get mailToUserOption value
     * @return int|null
     */
    public function getMailToUserOption()
    {
        return $this->mailToUserOption;
    }
    /**
     * Set mailToUserOption value
     * @param int $_mailToUserOption the mailToUserOption
     * @return int
     */
    public function setMailToUserOption($_mailToUserOption)
    {
        return ($this->mailToUserOption = $_mailToUserOption);
    }
    /**
     * Get mailToUserMessage value
     * @return string|null
     */
    public function getMailToUserMessage()
    {
        return $this->mailToUserMessage;
    }
    /**
     * Set mailToUserMessage value
     * @param string $_mailToUserMessage the mailToUserMessage
     * @return string
     */
    public function setMailToUserMessage($_mailToUserMessage)
    {
        return ($this->mailToUserMessage = $_mailToUserMessage);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoSendEmailToUserRequest
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
