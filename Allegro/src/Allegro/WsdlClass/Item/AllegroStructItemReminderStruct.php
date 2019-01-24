<?php
/**
 * File for class AllegroStructItemReminderStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructItemReminderStruct originally named ItemReminderStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructItemReminderStruct extends AllegroWsdlClass
{
    /**
     * The reminderType
     * @var int
     */
    public $reminderType;
    /**
     * The reminderTime
     * @var int
     */
    public $reminderTime;
    /**
     * Constructor method for ItemReminderStruct
     * @see parent::__construct()
     * @param int $_reminderType
     * @param int $_reminderTime
     * @return AllegroStructItemReminderStruct
     */
    public function __construct($_reminderType = NULL,$_reminderTime = NULL)
    {
        parent::__construct(array('reminderType'=>$_reminderType,'reminderTime'=>$_reminderTime),false);
    }
    /**
     * Get reminderType value
     * @return int|null
     */
    public function getReminderType()
    {
        return $this->reminderType;
    }
    /**
     * Set reminderType value
     * @param int $_reminderType the reminderType
     * @return int
     */
    public function setReminderType($_reminderType)
    {
        return ($this->reminderType = $_reminderType);
    }
    /**
     * Get reminderTime value
     * @return int|null
     */
    public function getReminderTime()
    {
        return $this->reminderTime;
    }
    /**
     * Set reminderTime value
     * @param int $_reminderTime the reminderTime
     * @return int
     */
    public function setReminderTime($_reminderTime)
    {
        return ($this->reminderTime = $_reminderTime);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructItemReminderStruct
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
