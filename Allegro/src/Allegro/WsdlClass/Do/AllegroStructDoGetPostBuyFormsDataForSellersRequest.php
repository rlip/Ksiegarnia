<?php
/**
 * File for class AllegroStructDoGetPostBuyFormsDataForSellersRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetPostBuyFormsDataForSellersRequest originally named DoGetPostBuyFormsDataForSellersRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetPostBuyFormsDataForSellersRequest extends AllegroWsdlClass
{
    /**
     * The sessionId
     * @var string
     */
    public $sessionId;
    /**
     * The transactionsIdsArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $transactionsIdsArray;
    /**
     * Constructor method for DoGetPostBuyFormsDataForSellersRequest
     * @see parent::__construct()
     * @param string $_sessionId
     * @param AllegroStructArrayOfLong $_transactionsIdsArray
     * @return AllegroStructDoGetPostBuyFormsDataForSellersRequest
     */
    public function __construct($_sessionId = NULL,$_transactionsIdsArray = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'transactionsIdsArray'=>($_transactionsIdsArray instanceof AllegroStructArrayOfLong)?$_transactionsIdsArray:new AllegroStructArrayOfLong($_transactionsIdsArray)),false);
    }
    /**
     * Get sessionId value
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param string $_sessionId the sessionId
     * @return string
     */
    public function setSessionId($_sessionId)
    {
        return ($this->sessionId = $_sessionId);
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
     * @return AllegroStructDoGetPostBuyFormsDataForSellersRequest
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
