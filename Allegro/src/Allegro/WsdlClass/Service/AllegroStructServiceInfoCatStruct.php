<?php
/**
 * File for class AllegroStructServiceInfoCatStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructServiceInfoCatStruct originally named ServiceInfoCatStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructServiceInfoCatStruct extends AllegroWsdlClass
{
    /**
     * The anCatId
     * @var int
     */
    public $anCatId;
    /**
     * The anCatName
     * @var string
     */
    public $anCatName;
    /**
     * Constructor method for ServiceInfoCatStruct
     * @see parent::__construct()
     * @param int $_anCatId
     * @param string $_anCatName
     * @return AllegroStructServiceInfoCatStruct
     */
    public function __construct($_anCatId = NULL,$_anCatName = NULL)
    {
        parent::__construct(array('anCatId'=>$_anCatId,'anCatName'=>$_anCatName),false);
    }
    /**
     * Get anCatId value
     * @return int|null
     */
    public function getAnCatId()
    {
        return $this->anCatId;
    }
    /**
     * Set anCatId value
     * @param int $_anCatId the anCatId
     * @return int
     */
    public function setAnCatId($_anCatId)
    {
        return ($this->anCatId = $_anCatId);
    }
    /**
     * Get anCatName value
     * @return string|null
     */
    public function getAnCatName()
    {
        return $this->anCatName;
    }
    /**
     * Set anCatName value
     * @param string $_anCatName the anCatName
     * @return string
     */
    public function setAnCatName($_anCatName)
    {
        return ($this->anCatName = $_anCatName);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructServiceInfoCatStruct
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
