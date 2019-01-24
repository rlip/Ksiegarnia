<?php
/**
 * File for class AllegroStructStateInfoStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructStateInfoStruct originally named StateInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructStateInfoStruct extends AllegroWsdlClass
{
    /**
     * The stateId
     * @var int
     */
    public $stateId;
    /**
     * The stateName
     * @var string
     */
    public $stateName;
    /**
     * Constructor method for StateInfoStruct
     * @see parent::__construct()
     * @param int $_stateId
     * @param string $_stateName
     * @return AllegroStructStateInfoStruct
     */
    public function __construct($_stateId = NULL,$_stateName = NULL)
    {
        parent::__construct(array('stateId'=>$_stateId,'stateName'=>$_stateName),false);
    }
    /**
     * Get stateId value
     * @return int|null
     */
    public function getStateId()
    {
        return $this->stateId;
    }
    /**
     * Set stateId value
     * @param int $_stateId the stateId
     * @return int
     */
    public function setStateId($_stateId)
    {
        return ($this->stateId = $_stateId);
    }
    /**
     * Get stateName value
     * @return string|null
     */
    public function getStateName()
    {
        return $this->stateName;
    }
    /**
     * Set stateName value
     * @param string $_stateName the stateName
     * @return string
     */
    public function setStateName($_stateName)
    {
        return ($this->stateName = $_stateName);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructStateInfoStruct
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
