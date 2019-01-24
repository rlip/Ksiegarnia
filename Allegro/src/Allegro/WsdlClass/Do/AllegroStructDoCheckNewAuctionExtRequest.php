<?php
/**
 * File for class AllegroStructDoCheckNewAuctionExtRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoCheckNewAuctionExtRequest originally named DoCheckNewAuctionExtRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoCheckNewAuctionExtRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The fields
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFieldsvalue
     */
    public $fields;
    /**
     * The variants
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfVariantstruct
     */
    public $variants;
    /**
     * The tags
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfTagnamestruct
     */
    public $tags;
    /**
     * Constructor method for DoCheckNewAuctionExtRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param AllegroStructArrayOfFieldsvalue $_fields
     * @param AllegroStructArrayOfVariantstruct $_variants
     * @param AllegroStructArrayOfTagnamestruct $_tags
     * @return AllegroStructDoCheckNewAuctionExtRequest
     */
    public function __construct($_sessionHandle = NULL,$_fields = NULL,$_variants = NULL,$_tags = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'fields'=>($_fields instanceof AllegroStructArrayOfFieldsvalue)?$_fields:new AllegroStructArrayOfFieldsvalue($_fields),'variants'=>($_variants instanceof AllegroStructArrayOfVariantstruct)?$_variants:new AllegroStructArrayOfVariantstruct($_variants),'tags'=>($_tags instanceof AllegroStructArrayOfTagnamestruct)?$_tags:new AllegroStructArrayOfTagnamestruct($_tags)),false);
    }
    /**
     * Get sessionHandle value
     * @return string|null
     */
    public function getSessionHandle()
    {
        return $this->sessionHandle;
    }
    /**
     * Set sessionHandle value
     * @param string $_sessionHandle the sessionHandle
     * @return string
     */
    public function setSessionHandle($_sessionHandle)
    {
        return ($this->sessionHandle = $_sessionHandle);
    }
    /**
     * Get fields value
     * @return AllegroStructArrayOfFieldsvalue|null
     */
    public function getFields()
    {
        return $this->fields;
    }
    /**
     * Set fields value
     * @param AllegroStructArrayOfFieldsvalue $_fields the fields
     * @return AllegroStructArrayOfFieldsvalue
     */
    public function setFields($_fields)
    {
        return ($this->fields = $_fields);
    }
    /**
     * Get variants value
     * @return AllegroStructArrayOfVariantstruct|null
     */
    public function getVariants()
    {
        return $this->variants;
    }
    /**
     * Set variants value
     * @param AllegroStructArrayOfVariantstruct $_variants the variants
     * @return AllegroStructArrayOfVariantstruct
     */
    public function setVariants($_variants)
    {
        return ($this->variants = $_variants);
    }
    /**
     * Get tags value
     * @return AllegroStructArrayOfTagnamestruct|null
     */
    public function getTags()
    {
        return $this->tags;
    }
    /**
     * Set tags value
     * @param AllegroStructArrayOfTagnamestruct $_tags the tags
     * @return AllegroStructArrayOfTagnamestruct
     */
    public function setTags($_tags)
    {
        return ($this->tags = $_tags);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoCheckNewAuctionExtRequest
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
