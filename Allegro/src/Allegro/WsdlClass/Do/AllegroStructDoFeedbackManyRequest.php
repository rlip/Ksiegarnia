<?php
/**
 * File for class AllegroStructDoFeedbackManyRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoFeedbackManyRequest originally named DoFeedbackManyRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoFeedbackManyRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The feedbacksList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFeedbackmanystruct
     */
    public $feedbacksList;
    /**
     * Constructor method for DoFeedbackManyRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param AllegroStructArrayOfFeedbackmanystruct $_feedbacksList
     * @return AllegroStructDoFeedbackManyRequest
     */
    public function __construct($_sessionHandle = NULL,$_feedbacksList = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'feedbacksList'=>($_feedbacksList instanceof AllegroStructArrayOfFeedbackmanystruct)?$_feedbacksList:new AllegroStructArrayOfFeedbackmanystruct($_feedbacksList)),false);
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
     * Get feedbacksList value
     * @return AllegroStructArrayOfFeedbackmanystruct|null
     */
    public function getFeedbacksList()
    {
        return $this->feedbacksList;
    }
    /**
     * Set feedbacksList value
     * @param AllegroStructArrayOfFeedbackmanystruct $_feedbacksList the feedbacksList
     * @return AllegroStructArrayOfFeedbackmanystruct
     */
    public function setFeedbacksList($_feedbacksList)
    {
        return ($this->feedbacksList = $_feedbacksList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoFeedbackManyRequest
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
