<?php
/**
 * File for class AllegroStructDoVerifyItemRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoVerifyItemRequest originally named DoVerifyItemRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoVerifyItemRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The localId
     * @var int
     */
    public $localId;
    /**
     * Constructor method for DoVerifyItemRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param int $_localId
     * @return AllegroStructDoVerifyItemRequest
     */
    public function __construct($_sessionHandle = NULL,$_localId = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'localId'=>$_localId),false);
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
     * Get localId value
     * @return int|null
     */
    public function getLocalId()
    {
        return $this->localId;
    }
    /**
     * Set localId value
     * @param int $_localId the localId
     * @return int
     */
    public function setLocalId($_localId)
    {
        return ($this->localId = $_localId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoVerifyItemRequest
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
