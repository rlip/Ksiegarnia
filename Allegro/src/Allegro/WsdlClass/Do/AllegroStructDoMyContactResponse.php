<?php
/**
 * File for class AllegroStructDoMyContactResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoMyContactResponse originally named doMyContactResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoMyContactResponse extends AllegroWsdlClass
{
    /**
     * The mycontactList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfMycontactlist
     */
    public $mycontactList;
    /**
     * Constructor method for doMyContactResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfMycontactlist $_mycontactList
     * @return AllegroStructDoMyContactResponse
     */
    public function __construct($_mycontactList = NULL)
    {
        parent::__construct(array('mycontactList'=>($_mycontactList instanceof AllegroStructArrayOfMycontactlist)?$_mycontactList:new AllegroStructArrayOfMycontactlist($_mycontactList)),false);
    }
    /**
     * Get mycontactList value
     * @return AllegroStructArrayOfMycontactlist|null
     */
    public function getMycontactList()
    {
        return $this->mycontactList;
    }
    /**
     * Set mycontactList value
     * @param AllegroStructArrayOfMycontactlist $_mycontactList the mycontactList
     * @return AllegroStructArrayOfMycontactlist
     */
    public function setMycontactList($_mycontactList)
    {
        return ($this->mycontactList = $_mycontactList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoMyContactResponse
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
