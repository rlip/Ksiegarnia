<?php
/**
 * File for class AllegroStructDoMyAccount2Response
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoMyAccount2Response originally named doMyAccount2Response
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoMyAccount2Response extends AllegroWsdlClass
{
    /**
     * The myaccountList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfMyaccountstruct2
     */
    public $myaccountList;
    /**
     * Constructor method for doMyAccount2Response
     * @see parent::__construct()
     * @param AllegroStructArrayOfMyaccountstruct2 $_myaccountList
     * @return AllegroStructDoMyAccount2Response
     */
    public function __construct($_myaccountList = NULL)
    {
        parent::__construct(array('myaccountList'=>($_myaccountList instanceof AllegroStructArrayOfMyaccountstruct2)?$_myaccountList:new AllegroStructArrayOfMyaccountstruct2($_myaccountList)),false);
    }
    /**
     * Get myaccountList value
     * @return AllegroStructArrayOfMyaccountstruct2|null
     */
    public function getMyaccountList()
    {
        return $this->myaccountList;
    }
    /**
     * Set myaccountList value
     * @param AllegroStructArrayOfMyaccountstruct2 $_myaccountList the myaccountList
     * @return AllegroStructArrayOfMyaccountstruct2
     */
    public function setMyaccountList($_myaccountList)
    {
        return ($this->myaccountList = $_myaccountList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoMyAccount2Response
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
