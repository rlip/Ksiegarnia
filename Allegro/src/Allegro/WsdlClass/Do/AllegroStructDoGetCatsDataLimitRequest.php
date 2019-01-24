<?php
/**
 * File for class AllegroStructDoGetCatsDataLimitRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetCatsDataLimitRequest originally named DoGetCatsDataLimitRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetCatsDataLimitRequest extends AllegroWsdlClass
{
    /**
     * The countryId
     * @var int
     */
    public $countryId;
    /**
     * The localVersion
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $localVersion;
    /**
     * The webapiKey
     * @var string
     */
    public $webapiKey;
    /**
     * The offset
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $offset;
    /**
     * The packageElement
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $packageElement;
    /**
     * Constructor method for DoGetCatsDataLimitRequest
     * @see parent::__construct()
     * @param int $_countryId
     * @param long $_localVersion
     * @param string $_webapiKey
     * @param int $_offset
     * @param int $_packageElement
     * @return AllegroStructDoGetCatsDataLimitRequest
     */
    public function __construct($_countryId = NULL,$_localVersion = NULL,$_webapiKey = NULL,$_offset = NULL,$_packageElement = NULL)
    {
        parent::__construct(array('countryId'=>$_countryId,'localVersion'=>$_localVersion,'webapiKey'=>$_webapiKey,'offset'=>$_offset,'packageElement'=>$_packageElement),false);
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
     * Get offset value
     * @return int|null
     */
    public function getOffset()
    {
        return $this->offset;
    }
    /**
     * Set offset value
     * @param int $_offset the offset
     * @return int
     */
    public function setOffset($_offset)
    {
        return ($this->offset = $_offset);
    }
    /**
     * Get packageElement value
     * @return int|null
     */
    public function getPackageElement()
    {
        return $this->packageElement;
    }
    /**
     * Set packageElement value
     * @param int $_packageElement the packageElement
     * @return int
     */
    public function setPackageElement($_packageElement)
    {
        return ($this->packageElement = $_packageElement);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetCatsDataLimitRequest
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
