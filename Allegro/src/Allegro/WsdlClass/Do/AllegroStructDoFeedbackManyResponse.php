<?php
/**
 * File for class AllegroStructDoFeedbackManyResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoFeedbackManyResponse originally named doFeedbackManyResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoFeedbackManyResponse extends AllegroWsdlClass
{
    /**
     * The feResults
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFeedbackresultstruct
     */
    public $feResults;
    /**
     * Constructor method for doFeedbackManyResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfFeedbackresultstruct $_feResults
     * @return AllegroStructDoFeedbackManyResponse
     */
    public function __construct($_feResults = NULL)
    {
        parent::__construct(array('feResults'=>($_feResults instanceof AllegroStructArrayOfFeedbackresultstruct)?$_feResults:new AllegroStructArrayOfFeedbackresultstruct($_feResults)),false);
    }
    /**
     * Get feResults value
     * @return AllegroStructArrayOfFeedbackresultstruct|null
     */
    public function getFeResults()
    {
        return $this->feResults;
    }
    /**
     * Set feResults value
     * @param AllegroStructArrayOfFeedbackresultstruct $_feResults the feResults
     * @return AllegroStructArrayOfFeedbackresultstruct
     */
    public function setFeResults($_feResults)
    {
        return ($this->feResults = $_feResults);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoFeedbackManyResponse
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
