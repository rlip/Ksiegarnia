<?php
/**
 * File for class AllegroStructShopsTagTypeStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructShopsTagTypeStruct originally named ShopsTagTypeStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructShopsTagTypeStruct extends AllegroWsdlClass
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The code
     * @var string
     */
    public $code;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * Constructor method for ShopsTagTypeStruct
     * @see parent::__construct()
     * @param int $_id
     * @param string $_code
     * @param string $_name
     * @return AllegroStructShopsTagTypeStruct
     */
    public function __construct($_id = NULL,$_code = NULL,$_name = NULL)
    {
        parent::__construct(array('id'=>$_id,'code'=>$_code,'name'=>$_name),false);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $_id the id
     * @return int
     */
    public function setId($_id)
    {
        return ($this->id = $_id);
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $_code the code
     * @return string
     */
    public function setCode($_code)
    {
        return ($this->code = $_code);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $_name the name
     * @return string
     */
    public function setName($_name)
    {
        return ($this->name = $_name);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructShopsTagTypeStruct
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
