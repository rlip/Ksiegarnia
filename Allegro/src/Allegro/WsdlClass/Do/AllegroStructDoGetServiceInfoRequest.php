<?php
/**
 * File for class AllegroStructDoGetServiceInfoRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetServiceInfoRequest originally named DoGetServiceInfoRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetServiceInfoRequest extends AllegroWsdlClass
{
    /**
     * The countryCode
     * @var int
     */
    public $countryCode;
    /**
     * The anCatId
     * @var int
     */
    public $anCatId;
    /**
     * The anItDate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $anItDate;
    /**
     * The anItId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $anItId;
    /**
     * The webapiKey
     * @var string
     */
    public $webapiKey;
    /**
     * Constructor method for DoGetServiceInfoRequest
     * @see parent::__construct()
     * @param int $_countryCode
     * @param int $_anCatId
     * @param long $_anItDate
     * @param int $_anItId
     * @param string $_webapiKey
     * @return AllegroStructDoGetServiceInfoRequest
     */
    public function __construct($_countryCode = NULL,$_anCatId = NULL,$_anItDate = NULL,$_anItId = NULL,$_webapiKey = NULL)
    {
        parent::__construct(array('countryCode'=>$_countryCode,'anCatId'=>$_anCatId,'anItDate'=>$_anItDate,'anItId'=>$_anItId,'webapiKey'=>$_webapiKey),false);
    }
    /**
     * Get countryCode value
     * @return int|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param int $_countryCode the countryCode
     * @return int
     */
    public function setCountryCode($_countryCode)
    {
        return ($this->countryCode = $_countryCode);
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
     * Get anItDate value
     * @return long|null
     */
    public function getAnItDate()
    {
        return $this->anItDate;
    }
    /**
     * Set anItDate value
     * @param long $_anItDate the anItDate
     * @return long
     */
    public function setAnItDate($_anItDate)
    {
        return ($this->anItDate = $_anItDate);
    }
    /**
     * Get anItId value
     * @return int|null
     */
    public function getAnItId()
    {
        return $this->anItId;
    }
    /**
     * Set anItId value
     * @param int $_anItId the anItId
     * @return int
     */
    public function setAnItId($_anItId)
    {
        return ($this->anItId = $_anItId);
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
     * @return AllegroStructDoGetServiceInfoRequest
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
