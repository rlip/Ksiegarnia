<?php
/**
 * File for class AllegroStructStructSellFailed
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructStructSellFailed originally named StructSellFailed
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructStructSellFailed extends AllegroWsdlClass
{
    /**
     * The sellItemId
     * @var long
     */
    public $sellItemId;
    /**
     * The sellFaultCode
     * @var string
     */
    public $sellFaultCode;
    /**
     * The sellFaultString
     * @var string
     */
    public $sellFaultString;
    /**
     * Constructor method for StructSellFailed
     * @see parent::__construct()
     * @param long $_sellItemId
     * @param string $_sellFaultCode
     * @param string $_sellFaultString
     * @return AllegroStructStructSellFailed
     */
    public function __construct($_sellItemId = NULL,$_sellFaultCode = NULL,$_sellFaultString = NULL)
    {
        parent::__construct(array('sellItemId'=>$_sellItemId,'sellFaultCode'=>$_sellFaultCode,'sellFaultString'=>$_sellFaultString),false);
    }
    /**
     * Get sellItemId value
     * @return long|null
     */
    public function getSellItemId()
    {
        return $this->sellItemId;
    }
    /**
     * Set sellItemId value
     * @param long $_sellItemId the sellItemId
     * @return long
     */
    public function setSellItemId($_sellItemId)
    {
        return ($this->sellItemId = $_sellItemId);
    }
    /**
     * Get sellFaultCode value
     * @return string|null
     */
    public function getSellFaultCode()
    {
        return $this->sellFaultCode;
    }
    /**
     * Set sellFaultCode value
     * @param string $_sellFaultCode the sellFaultCode
     * @return string
     */
    public function setSellFaultCode($_sellFaultCode)
    {
        return ($this->sellFaultCode = $_sellFaultCode);
    }
    /**
     * Get sellFaultString value
     * @return string|null
     */
    public function getSellFaultString()
    {
        return $this->sellFaultString;
    }
    /**
     * Set sellFaultString value
     * @param string $_sellFaultString the sellFaultString
     * @return string
     */
    public function setSellFaultString($_sellFaultString)
    {
        return ($this->sellFaultString = $_sellFaultString);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructStructSellFailed
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
