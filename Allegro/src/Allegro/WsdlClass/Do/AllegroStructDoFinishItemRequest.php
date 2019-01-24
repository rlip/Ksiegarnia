<?php
/**
 * File for class AllegroStructDoFinishItemRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoFinishItemRequest originally named DoFinishItemRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoFinishItemRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The finishItemId
     * @var long
     */
    public $finishItemId;
    /**
     * The finishCancelAllBids
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $finishCancelAllBids;
    /**
     * The finishCancelReason
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $finishCancelReason;
    /**
     * Constructor method for DoFinishItemRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param long $_finishItemId
     * @param int $_finishCancelAllBids
     * @param string $_finishCancelReason
     * @return AllegroStructDoFinishItemRequest
     */
    public function __construct($_sessionHandle = NULL,$_finishItemId = NULL,$_finishCancelAllBids = NULL,$_finishCancelReason = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'finishItemId'=>$_finishItemId,'finishCancelAllBids'=>$_finishCancelAllBids,'finishCancelReason'=>$_finishCancelReason),false);
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
     * Get finishItemId value
     * @return long|null
     */
    public function getFinishItemId()
    {
        return $this->finishItemId;
    }
    /**
     * Set finishItemId value
     * @param long $_finishItemId the finishItemId
     * @return long
     */
    public function setFinishItemId($_finishItemId)
    {
        return ($this->finishItemId = $_finishItemId);
    }
    /**
     * Get finishCancelAllBids value
     * @return int|null
     */
    public function getFinishCancelAllBids()
    {
        return $this->finishCancelAllBids;
    }
    /**
     * Set finishCancelAllBids value
     * @param int $_finishCancelAllBids the finishCancelAllBids
     * @return int
     */
    public function setFinishCancelAllBids($_finishCancelAllBids)
    {
        return ($this->finishCancelAllBids = $_finishCancelAllBids);
    }
    /**
     * Get finishCancelReason value
     * @return string|null
     */
    public function getFinishCancelReason()
    {
        return $this->finishCancelReason;
    }
    /**
     * Set finishCancelReason value
     * @param string $_finishCancelReason the finishCancelReason
     * @return string
     */
    public function setFinishCancelReason($_finishCancelReason)
    {
        return ($this->finishCancelReason = $_finishCancelReason);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoFinishItemRequest
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
