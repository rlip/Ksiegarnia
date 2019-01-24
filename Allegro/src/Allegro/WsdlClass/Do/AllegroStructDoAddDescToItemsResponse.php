<?php
/**
 * File for class AllegroStructDoAddDescToItemsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoAddDescToItemsResponse originally named doAddDescToItemsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoAddDescToItemsResponse extends AllegroWsdlClass
{
    /**
     * The arrayItemsAddId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $arrayItemsAddId;
    /**
     * The arrayItemsDescToLong
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $arrayItemsDescToLong;
    /**
     * The arrayItemsNotFound
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $arrayItemsNotFound;
    /**
     * Constructor method for doAddDescToItemsResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfLong $_arrayItemsAddId
     * @param AllegroStructArrayOfLong $_arrayItemsDescToLong
     * @param AllegroStructArrayOfLong $_arrayItemsNotFound
     * @return AllegroStructDoAddDescToItemsResponse
     */
    public function __construct($_arrayItemsAddId = NULL,$_arrayItemsDescToLong = NULL,$_arrayItemsNotFound = NULL)
    {
        parent::__construct(array('arrayItemsAddId'=>($_arrayItemsAddId instanceof AllegroStructArrayOfLong)?$_arrayItemsAddId:new AllegroStructArrayOfLong($_arrayItemsAddId),'arrayItemsDescToLong'=>($_arrayItemsDescToLong instanceof AllegroStructArrayOfLong)?$_arrayItemsDescToLong:new AllegroStructArrayOfLong($_arrayItemsDescToLong),'arrayItemsNotFound'=>($_arrayItemsNotFound instanceof AllegroStructArrayOfLong)?$_arrayItemsNotFound:new AllegroStructArrayOfLong($_arrayItemsNotFound)),false);
    }
    /**
     * Get arrayItemsAddId value
     * @return AllegroStructArrayOfLong|null
     */
    public function getArrayItemsAddId()
    {
        return $this->arrayItemsAddId;
    }
    /**
     * Set arrayItemsAddId value
     * @param AllegroStructArrayOfLong $_arrayItemsAddId the arrayItemsAddId
     * @return AllegroStructArrayOfLong
     */
    public function setArrayItemsAddId($_arrayItemsAddId)
    {
        return ($this->arrayItemsAddId = $_arrayItemsAddId);
    }
    /**
     * Get arrayItemsDescToLong value
     * @return AllegroStructArrayOfLong|null
     */
    public function getArrayItemsDescToLong()
    {
        return $this->arrayItemsDescToLong;
    }
    /**
     * Set arrayItemsDescToLong value
     * @param AllegroStructArrayOfLong $_arrayItemsDescToLong the arrayItemsDescToLong
     * @return AllegroStructArrayOfLong
     */
    public function setArrayItemsDescToLong($_arrayItemsDescToLong)
    {
        return ($this->arrayItemsDescToLong = $_arrayItemsDescToLong);
    }
    /**
     * Get arrayItemsNotFound value
     * @return AllegroStructArrayOfLong|null
     */
    public function getArrayItemsNotFound()
    {
        return $this->arrayItemsNotFound;
    }
    /**
     * Set arrayItemsNotFound value
     * @param AllegroStructArrayOfLong $_arrayItemsNotFound the arrayItemsNotFound
     * @return AllegroStructArrayOfLong
     */
    public function setArrayItemsNotFound($_arrayItemsNotFound)
    {
        return ($this->arrayItemsNotFound = $_arrayItemsNotFound);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoAddDescToItemsResponse
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
