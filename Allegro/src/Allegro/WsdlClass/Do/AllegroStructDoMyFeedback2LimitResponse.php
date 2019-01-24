<?php
/**
 * File for class AllegroStructDoMyFeedback2LimitResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoMyFeedback2LimitResponse originally named doMyFeedback2LimitResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoMyFeedback2LimitResponse extends AllegroWsdlClass
{
    /**
     * The myfeedbackList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfMyfeedbackliststruct2
     */
    public $myfeedbackList;
    /**
     * Constructor method for doMyFeedback2LimitResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfMyfeedbackliststruct2 $_myfeedbackList
     * @return AllegroStructDoMyFeedback2LimitResponse
     */
    public function __construct($_myfeedbackList = NULL)
    {
        parent::__construct(array('myfeedbackList'=>($_myfeedbackList instanceof AllegroStructArrayOfMyfeedbackliststruct2)?$_myfeedbackList:new AllegroStructArrayOfMyfeedbackliststruct2($_myfeedbackList)),false);
    }
    /**
     * Get myfeedbackList value
     * @return AllegroStructArrayOfMyfeedbackliststruct2|null
     */
    public function getMyfeedbackList()
    {
        return $this->myfeedbackList;
    }
    /**
     * Set myfeedbackList value
     * @param AllegroStructArrayOfMyfeedbackliststruct2 $_myfeedbackList the myfeedbackList
     * @return AllegroStructArrayOfMyfeedbackliststruct2
     */
    public function setMyfeedbackList($_myfeedbackList)
    {
        return ($this->myfeedbackList = $_myfeedbackList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoMyFeedback2LimitResponse
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
