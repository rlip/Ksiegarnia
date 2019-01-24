<?php
/**
 * File for class AllegroStructAttribStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructAttribStruct originally named AttribStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructAttribStruct extends AllegroWsdlClass
{
    /**
     * The attribName
     * @var string
     */
    public $attribName;
    /**
     * The attribValues
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfString
     */
    public $attribValues;
    /**
     * Constructor method for AttribStruct
     * @see parent::__construct()
     * @param string $_attribName
     * @param AllegroStructArrayOfString $_attribValues
     * @return AllegroStructAttribStruct
     */
    public function __construct($_attribName = NULL,$_attribValues = NULL)
    {
        parent::__construct(array('attribName'=>$_attribName,'attribValues'=>($_attribValues instanceof AllegroStructArrayOfString)?$_attribValues:new AllegroStructArrayOfString($_attribValues)),false);
    }
    /**
     * Get attribName value
     * @return string|null
     */
    public function getAttribName()
    {
        return $this->attribName;
    }
    /**
     * Set attribName value
     * @param string $_attribName the attribName
     * @return string
     */
    public function setAttribName($_attribName)
    {
        return ($this->attribName = $_attribName);
    }
    /**
     * Get attribValues value
     * @return AllegroStructArrayOfString|null
     */
    public function getAttribValues()
    {
        return $this->attribValues;
    }
    /**
     * Set attribValues value
     * @param AllegroStructArrayOfString $_attribValues the attribValues
     * @return AllegroStructArrayOfString
     */
    public function setAttribValues($_attribValues)
    {
        return ($this->attribValues = $_attribValues);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructAttribStruct
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
