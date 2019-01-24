<?php
/**
 * File for class AllegroStructRelatedPersonsStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructRelatedPersonsStruct originally named RelatedPersonsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructRelatedPersonsStruct extends AllegroWsdlClass
{
    /**
     * The spouseFirstName
     * @var string
     */
    public $spouseFirstName;
    /**
     * The spouseLastName
     * @var string
     */
    public $spouseLastName;
    /**
     * Constructor method for RelatedPersonsStruct
     * @see parent::__construct()
     * @param string $_spouseFirstName
     * @param string $_spouseLastName
     * @return AllegroStructRelatedPersonsStruct
     */
    public function __construct($_spouseFirstName = NULL,$_spouseLastName = NULL)
    {
        parent::__construct(array('spouseFirstName'=>$_spouseFirstName,'spouseLastName'=>$_spouseLastName),false);
    }
    /**
     * Get spouseFirstName value
     * @return string|null
     */
    public function getSpouseFirstName()
    {
        return $this->spouseFirstName;
    }
    /**
     * Set spouseFirstName value
     * @param string $_spouseFirstName the spouseFirstName
     * @return string
     */
    public function setSpouseFirstName($_spouseFirstName)
    {
        return ($this->spouseFirstName = $_spouseFirstName);
    }
    /**
     * Get spouseLastName value
     * @return string|null
     */
    public function getSpouseLastName()
    {
        return $this->spouseLastName;
    }
    /**
     * Set spouseLastName value
     * @param string $_spouseLastName the spouseLastName
     * @return string
     */
    public function setSpouseLastName($_spouseLastName)
    {
        return ($this->spouseLastName = $_spouseLastName);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructRelatedPersonsStruct
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
