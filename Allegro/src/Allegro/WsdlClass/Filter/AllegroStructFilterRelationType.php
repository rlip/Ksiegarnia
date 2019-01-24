<?php
/**
 * File for class AllegroStructFilterRelationType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructFilterRelationType originally named FilterRelationType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructFilterRelationType extends AllegroWsdlClass
{
    /**
     * The relationAnd
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfString
     */
    public $relationAnd;
    /**
     * The relationOr
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfString
     */
    public $relationOr;
    /**
     * The relationExclude
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfString
     */
    public $relationExclude;
    /**
     * Constructor method for FilterRelationType
     * @see parent::__construct()
     * @param AllegroStructArrayOfString $_relationAnd
     * @param AllegroStructArrayOfString $_relationOr
     * @param AllegroStructArrayOfString $_relationExclude
     * @return AllegroStructFilterRelationType
     */
    public function __construct($_relationAnd = NULL,$_relationOr = NULL,$_relationExclude = NULL)
    {
        parent::__construct(array('relationAnd'=>($_relationAnd instanceof AllegroStructArrayOfString)?$_relationAnd:new AllegroStructArrayOfString($_relationAnd),'relationOr'=>($_relationOr instanceof AllegroStructArrayOfString)?$_relationOr:new AllegroStructArrayOfString($_relationOr),'relationExclude'=>($_relationExclude instanceof AllegroStructArrayOfString)?$_relationExclude:new AllegroStructArrayOfString($_relationExclude)),false);
    }
    /**
     * Get relationAnd value
     * @return AllegroStructArrayOfString|null
     */
    public function getRelationAnd()
    {
        return $this->relationAnd;
    }
    /**
     * Set relationAnd value
     * @param AllegroStructArrayOfString $_relationAnd the relationAnd
     * @return AllegroStructArrayOfString
     */
    public function setRelationAnd($_relationAnd)
    {
        return ($this->relationAnd = $_relationAnd);
    }
    /**
     * Get relationOr value
     * @return AllegroStructArrayOfString|null
     */
    public function getRelationOr()
    {
        return $this->relationOr;
    }
    /**
     * Set relationOr value
     * @param AllegroStructArrayOfString $_relationOr the relationOr
     * @return AllegroStructArrayOfString
     */
    public function setRelationOr($_relationOr)
    {
        return ($this->relationOr = $_relationOr);
    }
    /**
     * Get relationExclude value
     * @return AllegroStructArrayOfString|null
     */
    public function getRelationExclude()
    {
        return $this->relationExclude;
    }
    /**
     * Set relationExclude value
     * @param AllegroStructArrayOfString $_relationExclude the relationExclude
     * @return AllegroStructArrayOfString
     */
    public function setRelationExclude($_relationExclude)
    {
        return ($this->relationExclude = $_relationExclude);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructFilterRelationType
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
