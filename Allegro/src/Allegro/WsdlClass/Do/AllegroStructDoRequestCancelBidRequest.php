<?php
/**
 * File for class AllegroStructDoRequestCancelBidRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoRequestCancelBidRequest originally named DoRequestCancelBidRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoRequestCancelBidRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The requestItemId
     * @var long
     */
    public $requestItemId;
    /**
     * The requestCancelReason
     * @var string
     */
    public $requestCancelReason;
    /**
     * Constructor method for DoRequestCancelBidRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param long $_requestItemId
     * @param string $_requestCancelReason
     * @return AllegroStructDoRequestCancelBidRequest
     */
    public function __construct($_sessionHandle = NULL,$_requestItemId = NULL,$_requestCancelReason = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'requestItemId'=>$_requestItemId,'requestCancelReason'=>$_requestCancelReason),false);
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
     * Get requestItemId value
     * @return long|null
     */
    public function getRequestItemId()
    {
        return $this->requestItemId;
    }
    /**
     * Set requestItemId value
     * @param long $_requestItemId the requestItemId
     * @return long
     */
    public function setRequestItemId($_requestItemId)
    {
        return ($this->requestItemId = $_requestItemId);
    }
    /**
     * Get requestCancelReason value
     * @return string|null
     */
    public function getRequestCancelReason()
    {
        return $this->requestCancelReason;
    }
    /**
     * Set requestCancelReason value
     * @param string $_requestCancelReason the requestCancelReason
     * @return string
     */
    public function setRequestCancelReason($_requestCancelReason)
    {
        return ($this->requestCancelReason = $_requestCancelReason);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoRequestCancelBidRequest
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
