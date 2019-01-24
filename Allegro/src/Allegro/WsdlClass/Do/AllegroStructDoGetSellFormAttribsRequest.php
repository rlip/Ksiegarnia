<?php
/**
 * File for class AllegroStructDoGetSellFormAttribsRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetSellFormAttribsRequest originally named DoGetSellFormAttribsRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetSellFormAttribsRequest extends AllegroWsdlClass
{
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
     * The localVersion
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $localVersion;
    /**
     * The catId
     * @var int
     */
    public $catId;
    /**
     * Constructor method for DoGetSellFormAttribsRequest
     * @see parent::__construct()
     * @param int $_countryId
     * @param string $_webapiKey
     * @param long $_localVersion
     * @param int $_catId
     * @return AllegroStructDoGetSellFormAttribsRequest
     */
    public function __construct($_countryId = NULL,$_webapiKey = NULL,$_localVersion = NULL,$_catId = NULL)
    {
        parent::__construct(array('countryId'=>$_countryId,'webapiKey'=>$_webapiKey,'localVersion'=>$_localVersion,'catId'=>$_catId),false);
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
     * Get localVersion value
     * @return long|null
     */
    public function getLocalVersion()
    {
        return $this->localVersion;
    }
    /**
     * Set localVersion value
     * @param long $_localVersion the localVersion
     * @return long
     */
    public function setLocalVersion($_localVersion)
    {
        return ($this->localVersion = $_localVersion);
    }
    /**
     * Get catId value
     * @return int|null
     */
    public function getCatId()
    {
        return $this->catId;
    }
    /**
     * Set catId value
     * @param int $_catId the catId
     * @return int
     */
    public function setCatId($_catId)
    {
        return ($this->catId = $_catId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetSellFormAttribsRequest
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
