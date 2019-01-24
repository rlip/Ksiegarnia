<?php
/**
 * File for class AllegroStructActionDataStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructActionDataStruct originally named ActionDataStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructActionDataStruct extends AllegroWsdlClass
{
    /**
     * The actionKey
     * @var string
     */
    public $actionKey;
    /**
     * The actionValue
     * @var string
     */
    public $actionValue;
    /**
     * Constructor method for ActionDataStruct
     * @see parent::__construct()
     * @param string $_actionKey
     * @param string $_actionValue
     * @return AllegroStructActionDataStruct
     */
    public function __construct($_actionKey = NULL,$_actionValue = NULL)
    {
        parent::__construct(array('actionKey'=>$_actionKey,'actionValue'=>$_actionValue),false);
    }
    /**
     * Get actionKey value
     * @return string|null
     */
    public function getActionKey()
    {
        return $this->actionKey;
    }
    /**
     * Set actionKey value
     * @param string $_actionKey the actionKey
     * @return string
     */
    public function setActionKey($_actionKey)
    {
        return ($this->actionKey = $_actionKey);
    }
    /**
     * Get actionValue value
     * @return string|null
     */
    public function getActionValue()
    {
        return $this->actionValue;
    }
    /**
     * Set actionValue value
     * @param string $_actionValue the actionValue
     * @return string
     */
    public function setActionValue($_actionValue)
    {
        return ($this->actionValue = $_actionValue);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructActionDataStruct
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
