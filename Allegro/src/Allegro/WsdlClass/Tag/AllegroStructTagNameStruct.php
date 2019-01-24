<?php
/**
 * File for class AllegroStructTagNameStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructTagNameStruct originally named TagNameStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructTagNameStruct extends AllegroWsdlClass
{
    /**
     * The tagName
     * @var string
     */
    public $tagName;
    /**
     * Constructor method for TagNameStruct
     * @see parent::__construct()
     * @param string $_tagName
     * @return AllegroStructTagNameStruct
     */
    public function __construct($_tagName = NULL)
    {
        parent::__construct(array('tagName'=>$_tagName),false);
    }
    /**
     * Get tagName value
     * @return string|null
     */
    public function getTagName()
    {
        return $this->tagName;
    }
    /**
     * Set tagName value
     * @param string $_tagName the tagName
     * @return string
     */
    public function setTagName($_tagName)
    {
        return ($this->tagName = $_tagName);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructTagNameStruct
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
