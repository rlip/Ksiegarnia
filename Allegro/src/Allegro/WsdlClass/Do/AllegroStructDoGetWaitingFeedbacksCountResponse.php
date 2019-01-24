<?php
/**
 * File for class AllegroStructDoGetWaitingFeedbacksCountResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetWaitingFeedbacksCountResponse originally named doGetWaitingFeedbacksCountResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetWaitingFeedbacksCountResponse extends AllegroWsdlClass
{
    /**
     * The feedbackCount
     * @var int
     */
    public $feedbackCount;
    /**
     * Constructor method for doGetWaitingFeedbacksCountResponse
     * @see parent::__construct()
     * @param int $_feedbackCount
     * @return AllegroStructDoGetWaitingFeedbacksCountResponse
     */
    public function __construct($_feedbackCount = NULL)
    {
        parent::__construct(array('feedbackCount'=>$_feedbackCount),false);
    }
    /**
     * Get feedbackCount value
     * @return int|null
     */
    public function getFeedbackCount()
    {
        return $this->feedbackCount;
    }
    /**
     * Set feedbackCount value
     * @param int $_feedbackCount the feedbackCount
     * @return int
     */
    public function setFeedbackCount($_feedbackCount)
    {
        return ($this->feedbackCount = $_feedbackCount);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetWaitingFeedbacksCountResponse
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
