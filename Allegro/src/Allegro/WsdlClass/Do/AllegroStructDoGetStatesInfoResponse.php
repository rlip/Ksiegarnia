<?php
/**
 * File for class AllegroStructDoGetStatesInfoResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetStatesInfoResponse originally named doGetStatesInfoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetStatesInfoResponse extends AllegroWsdlClass
{
    /**
     * The statesInfoArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfStateinfostruct
     */
    public $statesInfoArray;
    /**
     * Constructor method for doGetStatesInfoResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfStateinfostruct $_statesInfoArray
     * @return AllegroStructDoGetStatesInfoResponse
     */
    public function __construct($_statesInfoArray = NULL)
    {
        parent::__construct(array('statesInfoArray'=>($_statesInfoArray instanceof AllegroStructArrayOfStateinfostruct)?$_statesInfoArray:new AllegroStructArrayOfStateinfostruct($_statesInfoArray)),false);
    }
    /**
     * Get statesInfoArray value
     * @return AllegroStructArrayOfStateinfostruct|null
     */
    public function getStatesInfoArray()
    {
        return $this->statesInfoArray;
    }
    /**
     * Set statesInfoArray value
     * @param AllegroStructArrayOfStateinfostruct $_statesInfoArray the statesInfoArray
     * @return AllegroStructArrayOfStateinfostruct
     */
    public function setStatesInfoArray($_statesInfoArray)
    {
        return ($this->statesInfoArray = $_statesInfoArray);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetStatesInfoResponse
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
