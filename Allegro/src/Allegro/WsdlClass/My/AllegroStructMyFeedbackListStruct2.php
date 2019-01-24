<?php
/**
 * File for class AllegroStructMyFeedbackListStruct2
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructMyFeedbackListStruct2 originally named MyFeedbackListStruct2
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructMyFeedbackListStruct2 extends AllegroWsdlClass
{
    /**
     * The feedbackArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfString
     */
    public $feedbackArray;
    /**
     * Constructor method for MyFeedbackListStruct2
     * @see parent::__construct()
     * @param AllegroStructArrayOfString $_feedbackArray
     * @return AllegroStructMyFeedbackListStruct2
     */
    public function __construct($_feedbackArray = NULL)
    {
        parent::__construct(array('feedbackArray'=>($_feedbackArray instanceof AllegroStructArrayOfString)?$_feedbackArray:new AllegroStructArrayOfString($_feedbackArray)),false);
    }
    /**
     * Get feedbackArray value
     * @return AllegroStructArrayOfString|null
     */
    public function getFeedbackArray()
    {
        return $this->feedbackArray;
    }
    /**
     * Set feedbackArray value
     * @param AllegroStructArrayOfString $_feedbackArray the feedbackArray
     * @return AllegroStructArrayOfString
     */
    public function setFeedbackArray($_feedbackArray)
    {
        return ($this->feedbackArray = $_feedbackArray);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructMyFeedbackListStruct2
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
