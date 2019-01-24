<?php
/**
 * File for class AllegroStructDoGetFeedbackResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetFeedbackResponse originally named doGetFeedbackResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetFeedbackResponse extends AllegroWsdlClass
{
    /**
     * The feedbackList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFeedbacklist
     */
    public $feedbackList;
    /**
     * The feedbackCount
     * @var int
     */
    public $feedbackCount;
    /**
     * Constructor method for doGetFeedbackResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfFeedbacklist $_feedbackList
     * @param int $_feedbackCount
     * @return AllegroStructDoGetFeedbackResponse
     */
    public function __construct($_feedbackList = NULL,$_feedbackCount = NULL)
    {
        parent::__construct(array('feedbackList'=>($_feedbackList instanceof AllegroStructArrayOfFeedbacklist)?$_feedbackList:new AllegroStructArrayOfFeedbacklist($_feedbackList),'feedbackCount'=>$_feedbackCount),false);
    }
    /**
     * Get feedbackList value
     * @return AllegroStructArrayOfFeedbacklist|null
     */
    public function getFeedbackList()
    {
        return $this->feedbackList;
    }
    /**
     * Set feedbackList value
     * @param AllegroStructArrayOfFeedbacklist $_feedbackList the feedbackList
     * @return AllegroStructArrayOfFeedbacklist
     */
    public function setFeedbackList($_feedbackList)
    {
        return ($this->feedbackList = $_feedbackList);
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
     * @return AllegroStructDoGetFeedbackResponse
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
