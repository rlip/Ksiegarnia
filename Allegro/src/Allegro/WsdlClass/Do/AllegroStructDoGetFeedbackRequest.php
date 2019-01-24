<?php
/**
 * File for class AllegroStructDoGetFeedbackRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetFeedbackRequest originally named DoGetFeedbackRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetFeedbackRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The feedbackFrom
     * @var int
     */
    public $feedbackFrom;
    /**
     * The feedbackTo
     * @var int
     */
    public $feedbackTo;
    /**
     * The feedbackOffset
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $feedbackOffset;
    /**
     * The feedbackKindList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $feedbackKindList;
    /**
     * Constructor method for DoGetFeedbackRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param int $_feedbackFrom
     * @param int $_feedbackTo
     * @param int $_feedbackOffset
     * @param string $_feedbackKindList
     * @return AllegroStructDoGetFeedbackRequest
     */
    public function __construct($_sessionHandle = NULL,$_feedbackFrom = NULL,$_feedbackTo = NULL,$_feedbackOffset = NULL,$_feedbackKindList = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'feedbackFrom'=>$_feedbackFrom,'feedbackTo'=>$_feedbackTo,'feedbackOffset'=>$_feedbackOffset,'feedbackKindList'=>$_feedbackKindList),false);
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
     * Get feedbackFrom value
     * @return int|null
     */
    public function getFeedbackFrom()
    {
        return $this->feedbackFrom;
    }
    /**
     * Set feedbackFrom value
     * @param int $_feedbackFrom the feedbackFrom
     * @return int
     */
    public function setFeedbackFrom($_feedbackFrom)
    {
        return ($this->feedbackFrom = $_feedbackFrom);
    }
    /**
     * Get feedbackTo value
     * @return int|null
     */
    public function getFeedbackTo()
    {
        return $this->feedbackTo;
    }
    /**
     * Set feedbackTo value
     * @param int $_feedbackTo the feedbackTo
     * @return int
     */
    public function setFeedbackTo($_feedbackTo)
    {
        return ($this->feedbackTo = $_feedbackTo);
    }
    /**
     * Get feedbackOffset value
     * @return int|null
     */
    public function getFeedbackOffset()
    {
        return $this->feedbackOffset;
    }
    /**
     * Set feedbackOffset value
     * @param int $_feedbackOffset the feedbackOffset
     * @return int
     */
    public function setFeedbackOffset($_feedbackOffset)
    {
        return ($this->feedbackOffset = $_feedbackOffset);
    }
    /**
     * Get feedbackKindList value
     * @return string|null
     */
    public function getFeedbackKindList()
    {
        return $this->feedbackKindList;
    }
    /**
     * Set feedbackKindList value
     * @param string $_feedbackKindList the feedbackKindList
     * @return string
     */
    public function setFeedbackKindList($_feedbackKindList)
    {
        return ($this->feedbackKindList = $_feedbackKindList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetFeedbackRequest
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
