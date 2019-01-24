<?php
/**
 * File for class AllegroStructDoQuerySysStatusResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoQuerySysStatusResponse originally named doQuerySysStatusResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoQuerySysStatusResponse extends AllegroWsdlClass
{
    /**
     * The info
     * @var string
     */
    public $info;
    /**
     * The verKey
     * @var long
     */
    public $verKey;
    /**
     * Constructor method for doQuerySysStatusResponse
     * @see parent::__construct()
     * @param string $_info
     * @param long $_verKey
     * @return AllegroStructDoQuerySysStatusResponse
     */
    public function __construct($_info = NULL,$_verKey = NULL)
    {
        parent::__construct(array('info'=>$_info,'verKey'=>$_verKey),false);
    }
    /**
     * Get info value
     * @return string|null
     */
    public function getInfo()
    {
        return $this->info;
    }
    /**
     * Set info value
     * @param string $_info the info
     * @return string
     */
    public function setInfo($_info)
    {
        return ($this->info = $_info);
    }
    /**
     * Get verKey value
     * @return long|null
     */
    public function getVerKey()
    {
        return $this->verKey;
    }
    /**
     * Set verKey value
     * @param long $_verKey the verKey
     * @return long
     */
    public function setVerKey($_verKey)
    {
        return ($this->verKey = $_verKey);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoQuerySysStatusResponse
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
