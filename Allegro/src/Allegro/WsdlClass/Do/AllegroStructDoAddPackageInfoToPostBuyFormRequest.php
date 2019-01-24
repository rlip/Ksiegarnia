<?php
/**
 * File for class AllegroStructDoAddPackageInfoToPostBuyFormRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoAddPackageInfoToPostBuyFormRequest originally named DoAddPackageInfoToPostBuyFormRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoAddPackageInfoToPostBuyFormRequest extends AllegroWsdlClass
{
    /**
     * The sessionId
     * @var string
     */
    public $sessionId;
    /**
     * The transactionId
     * @var long
     */
    public $transactionId;
    /**
     * The packageInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfPackageinfostruct
     */
    public $packageInfo;
    /**
     * Constructor method for DoAddPackageInfoToPostBuyFormRequest
     * @see parent::__construct()
     * @param string $_sessionId
     * @param long $_transactionId
     * @param AllegroStructArrayOfPackageinfostruct $_packageInfo
     * @return AllegroStructDoAddPackageInfoToPostBuyFormRequest
     */
    public function __construct($_sessionId = NULL,$_transactionId = NULL,$_packageInfo = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'transactionId'=>$_transactionId,'packageInfo'=>($_packageInfo instanceof AllegroStructArrayOfPackageinfostruct)?$_packageInfo:new AllegroStructArrayOfPackageinfostruct($_packageInfo)),false);
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
     * Get transactionId value
     * @return long|null
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param long $_transactionId the transactionId
     * @return long
     */
    public function setTransactionId($_transactionId)
    {
        return ($this->transactionId = $_transactionId);
    }
    /**
     * Get packageInfo value
     * @return AllegroStructArrayOfPackageinfostruct|null
     */
    public function getPackageInfo()
    {
        return $this->packageInfo;
    }
    /**
     * Set packageInfo value
     * @param AllegroStructArrayOfPackageinfostruct $_packageInfo the packageInfo
     * @return AllegroStructArrayOfPackageinfostruct
     */
    public function setPackageInfo($_packageInfo)
    {
        return ($this->packageInfo = $_packageInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoAddPackageInfoToPostBuyFormRequest
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
