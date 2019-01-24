<?php
/**
 * File for class AllegroStructDoQuerySysStatusRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoQuerySysStatusRequest originally named DoQuerySysStatusRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoQuerySysStatusRequest extends AllegroWsdlClass
{
    /**
     * The sysvar
     * @var int
     */
    public $sysvar;
    /**
     * The countryId
     * @var int
     */
    public $countryId;
    /**
     * The webapiKey
     * @var string
     */
    public $webapiKey;
    /**
     * Constructor method for DoQuerySysStatusRequest
     * @see parent::__construct()
     * @param int $_sysvar
     * @param int $_countryId
     * @param string $_webapiKey
     * @return AllegroStructDoQuerySysStatusRequest
     */
    public function __construct($_sysvar = NULL,$_countryId = NULL,$_webapiKey = NULL)
    {
        parent::__construct(array('sysvar'=>$_sysvar,'countryId'=>$_countryId,'webapiKey'=>$_webapiKey),false);
    }
    /**
     * Get sysvar value
     * @return int|null
     */
    public function getSysvar()
    {
        return $this->sysvar;
    }
    /**
     * Set sysvar value
     * @param int $_sysvar the sysvar
     * @return int
     */
    public function setSysvar($_sysvar)
    {
        return ($this->sysvar = $_sysvar);
    }
    /**
     * Get countryId value
     * @return int|null
     */
    public function getCountryId()
    {
        return $this->countryId;
    }
    /**
     * Set countryId value
     * @param int $_countryId the countryId
     * @return int
     */
    public function setCountryId($_countryId)
    {
        return ($this->countryId = $_countryId);
    }
    /**
     * Get webapiKey value
     * @return string|null
     */
    public function getWebapiKey()
    {
        return $this->webapiKey;
    }
    /**
     * Set webapiKey value
     * @param string $_webapiKey the webapiKey
     * @return string
     */
    public function setWebapiKey($_webapiKey)
    {
        return ($this->webapiKey = $_webapiKey);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoQuerySysStatusRequest
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
