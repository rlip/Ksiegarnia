<?php
/**
 * File for class AllegroStructDoFeedbackResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoFeedbackResponse originally named doFeedbackResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoFeedbackResponse extends AllegroWsdlClass
{
    /**
     * The feedbackId
     * @var int
     */
    public $feedbackId;
    /**
     * Constructor method for doFeedbackResponse
     * @see parent::__construct()
     * @param int $_feedbackId
     * @return AllegroStructDoFeedbackResponse
     */
    public function __construct($_feedbackId = NULL)
    {
        parent::__construct(array('feedbackId'=>$_feedbackId),false);
    }
    /**
     * Get feedbackId value
     * @return int|null
     */
    public function getFeedbackId()
    {
        return $this->feedbackId;
    }
    /**
     * Set feedbackId value
     * @param int $_feedbackId the feedbackId
     * @return int
     */
    public function setFeedbackId($_feedbackId)
    {
        return ($this->feedbackId = $_feedbackId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoFeedbackResponse
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
