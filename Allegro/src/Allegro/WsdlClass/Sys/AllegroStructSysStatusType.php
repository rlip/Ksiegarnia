<?php
/**
 * File for class AllegroStructSysStatusType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructSysStatusType originally named SysStatusType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructSysStatusType extends AllegroWsdlClass
{
    /**
     * The countryId
     * @var int
     */
    public $countryId;
    /**
     * The programVersion
     * @var string
     */
    public $programVersion;
    /**
     * The catsVersion
     * @var string
     */
    public $catsVersion;
    /**
     * The apiVersion
     * @var string
     */
    public $apiVersion;
    /**
     * The attribVersion
     * @var string
     */
    public $attribVersion;
    /**
     * The formSellVersion
     * @var string
     */
    public $formSellVersion;
    /**
     * The siteVersion
     * @var string
     */
    public $siteVersion;
    /**
     * The verKey
     * @var long
     */
    public $verKey;
    /**
     * Constructor method for SysStatusType
     * @see parent::__construct()
     * @param int $_countryId
     * @param string $_programVersion
     * @param string $_catsVersion
     * @param string $_apiVersion
     * @param string $_attribVersion
     * @param string $_formSellVersion
     * @param string $_siteVersion
     * @param long $_verKey
     * @return AllegroStructSysStatusType
     */
    public function __construct($_countryId = NULL,$_programVersion = NULL,$_catsVersion = NULL,$_apiVersion = NULL,$_attribVersion = NULL,$_formSellVersion = NULL,$_siteVersion = NULL,$_verKey = NULL)
    {
        parent::__construct(array('countryId'=>$_countryId,'programVersion'=>$_programVersion,'catsVersion'=>$_catsVersion,'apiVersion'=>$_apiVersion,'attribVersion'=>$_attribVersion,'formSellVersion'=>$_formSellVersion,'siteVersion'=>$_siteVersion,'verKey'=>$_verKey),false);
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
     * Get programVersion value
     * @return string|null
     */
    public function getProgramVersion()
    {
        return $this->programVersion;
    }
    /**
     * Set programVersion value
     * @param string $_programVersion the programVersion
     * @return string
     */
    public function setProgramVersion($_programVersion)
    {
        return ($this->programVersion = $_programVersion);
    }
    /**
     * Get catsVersion value
     * @return string|null
     */
    public function getCatsVersion()
    {
        return $this->catsVersion;
    }
    /**
     * Set catsVersion value
     * @param string $_catsVersion the catsVersion
     * @return string
     */
    public function setCatsVersion($_catsVersion)
    {
        return ($this->catsVersion = $_catsVersion);
    }
    /**
     * Get apiVersion value
     * @return string|null
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }
    /**
     * Set apiVersion value
     * @param string $_apiVersion the apiVersion
     * @return string
     */
    public function setApiVersion($_apiVersion)
    {
        return ($this->apiVersion = $_apiVersion);
    }
    /**
     * Get attribVersion value
     * @return string|null
     */
    public function getAttribVersion()
    {
        return $this->attribVersion;
    }
    /**
     * Set attribVersion value
     * @param string $_attribVersion the attribVersion
     * @return string
     */
    public function setAttribVersion($_attribVersion)
    {
        return ($this->attribVersion = $_attribVersion);
    }
    /**
     * Get formSellVersion value
     * @return string|null
     */
    public function getFormSellVersion()
    {
        return $this->formSellVersion;
    }
    /**
     * Set formSellVersion value
     * @param string $_formSellVersion the formSellVersion
     * @return string
     */
    public function setFormSellVersion($_formSellVersion)
    {
        return ($this->formSellVersion = $_formSellVersion);
    }
    /**
     * Get siteVersion value
     * @return string|null
     */
    public function getSiteVersion()
    {
        return $this->siteVersion;
    }
    /**
     * Set siteVersion value
     * @param string $_siteVersion the siteVersion
     * @return string
     */
    public function setSiteVersion($_siteVersion)
    {
        return ($this->siteVersion = $_siteVersion);
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
     * @return AllegroStructSysStatusType
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
