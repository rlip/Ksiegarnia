<?php
/**
 * File for class AllegroStructServiceInfoStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructServiceInfoStruct originally named ServiceInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructServiceInfoStruct extends AllegroWsdlClass
{
    /**
     * The anItId
     * @var int
     */
    public $anItId;
    /**
     * The anCatId
     * @var int
     */
    public $anCatId;
    /**
     * The anItTitle
     * @var string
     */
    public $anItTitle;
    /**
     * The anItBody
     * @var base64Binary
     */
    public $anItBody;
    /**
     * The countryId
     * @var int
     */
    public $countryId;
    /**
     * The anItDate
     * @var long
     */
    public $anItDate;
    /**
     * Constructor method for ServiceInfoStruct
     * @see parent::__construct()
     * @param int $_anItId
     * @param int $_anCatId
     * @param string $_anItTitle
     * @param base64Binary $_anItBody
     * @param int $_countryId
     * @param long $_anItDate
     * @return AllegroStructServiceInfoStruct
     */
    public function __construct($_anItId = NULL,$_anCatId = NULL,$_anItTitle = NULL,$_anItBody = NULL,$_countryId = NULL,$_anItDate = NULL)
    {
        parent::__construct(array('anItId'=>$_anItId,'anCatId'=>$_anCatId,'anItTitle'=>$_anItTitle,'anItBody'=>$_anItBody,'countryId'=>$_countryId,'anItDate'=>$_anItDate),false);
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
     * Get anItTitle value
     * @return string|null
     */
    public function getAnItTitle()
    {
        return $this->anItTitle;
    }
    /**
     * Set anItTitle value
     * @param string $_anItTitle the anItTitle
     * @return string
     */
    public function setAnItTitle($_anItTitle)
    {
        return ($this->anItTitle = $_anItTitle);
    }
    /**
     * Get anItBody value
     * @return base64Binary|null
     */
    public function getAnItBody()
    {
        return $this->anItBody;
    }
    /**
     * Set anItBody value
     * @param base64Binary $_anItBody the anItBody
     * @return base64Binary
     */
    public function setAnItBody($_anItBody)
    {
        return ($this->anItBody = $_anItBody);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructServiceInfoStruct
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
