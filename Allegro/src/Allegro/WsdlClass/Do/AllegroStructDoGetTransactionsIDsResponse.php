<?php
/**
 * File for class AllegroStructDoGetTransactionsIDsResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetTransactionsIDsResponse originally named doGetTransactionsIDsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetTransactionsIDsResponse extends AllegroWsdlClass
{
    /**
     * The transactionsIdsArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $transactionsIdsArray;
    /**
     * Constructor method for doGetTransactionsIDsResponse
     * @see parent::__construct()
     * @param AllegroStructArrayOfLong $_transactionsIdsArray
     * @return AllegroStructDoGetTransactionsIDsResponse
     */
    public function __construct($_transactionsIdsArray = NULL)
    {
        parent::__construct(array('transactionsIdsArray'=>($_transactionsIdsArray instanceof AllegroStructArrayOfLong)?$_transactionsIdsArray:new AllegroStructArrayOfLong($_transactionsIdsArray)),false);
    }
    /**
     * Get transactionsIdsArray value
     * @return AllegroStructArrayOfLong|null
     */
    public function getTransactionsIdsArray()
    {
        return $this->transactionsIdsArray;
    }
    /**
     * Set transactionsIdsArray value
     * @param AllegroStructArrayOfLong $_transactionsIdsArray the transactionsIdsArray
     * @return AllegroStructArrayOfLong
     */
    public function setTransactionsIdsArray($_transactionsIdsArray)
    {
        return ($this->transactionsIdsArray = $_transactionsIdsArray);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetTransactionsIDsResponse
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
