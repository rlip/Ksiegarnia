<?php
/**
 * File for class AllegroStructDoGetWaitingFeedbacksRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetWaitingFeedbacksRequest originally named DoGetWaitingFeedbacksRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetWaitingFeedbacksRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The offset
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $offset;
    /**
     * The packageSize
     * @var int
     */
    public $packageSize;
    /**
     * Constructor method for DoGetWaitingFeedbacksRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param int $_offset
     * @param int $_packageSize
     * @return AllegroStructDoGetWaitingFeedbacksRequest
     */
    public function __construct($_sessionHandle = NULL,$_offset = NULL,$_packageSize = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'offset'=>$_offset,'packageSize'=>$_packageSize),false);
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
     * Get offset value
     * @return int|null
     */
    public function getOffset()
    {
        return $this->offset;
    }
    /**
     * Set offset value
     * @param int $_offset the offset
     * @return int
     */
    public function setOffset($_offset)
    {
        return ($this->offset = $_offset);
    }
    /**
     * Get packageSize value
     * @return int|null
     */
    public function getPackageSize()
    {
        return $this->packageSize;
    }
    /**
     * Set packageSize value
     * @param int $_packageSize the packageSize
     * @return int
     */
    public function setPackageSize($_packageSize)
    {
        return ($this->packageSize = $_packageSize);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetWaitingFeedbacksRequest
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
