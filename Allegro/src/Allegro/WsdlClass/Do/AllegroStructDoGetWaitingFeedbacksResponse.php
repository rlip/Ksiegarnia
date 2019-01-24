<?php
/**
 * File for class AllegroStructDoGetWaitingFeedbacksResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetWaitingFeedbacksResponse originally named doGetWaitingFeedbacksResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetWaitingFeedbacksResponse extends AllegroWsdlClass
{
    /**
     * The feWaitList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfWaitfeedbackstruct
     */
    public $feWaitList;
    /**
     * Constructor method for doGetWaitingFeedbacksResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfWaitfeedbackstruct $_feWaitList
     * @return AllegroStructDoGetWaitingFeedbacksResponse
     */
    public function __construct($_feWaitList = NULL)
    {
        parent::__construct(array('feWaitList'=>($_feWaitList instanceof AllegroStructArrayOfWaitfeedbackstruct)?$_feWaitList:new AllegroStructArrayOfWaitfeedbackstruct($_feWaitList)),false);
    }
    /**
     * Get feWaitList value
     * @return AllegroStructArrayOfWaitfeedbackstruct|null
     */
    public function getFeWaitList()
    {
        return $this->feWaitList;
    }
    /**
     * Set feWaitList value
     * @param AllegroStructArrayOfWaitfeedbackstruct $_feWaitList the feWaitList
     * @return AllegroStructArrayOfWaitfeedbackstruct
     */
    public function setFeWaitList($_feWaitList)
    {
        return ($this->feWaitList = $_feWaitList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetWaitingFeedbacksResponse
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
