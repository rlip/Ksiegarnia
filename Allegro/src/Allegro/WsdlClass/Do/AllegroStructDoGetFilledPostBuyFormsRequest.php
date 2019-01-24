<?php
/**
 * File for class AllegroStructDoGetFilledPostBuyFormsRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetFilledPostBuyFormsRequest originally named DoGetFilledPostBuyFormsRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetFilledPostBuyFormsRequest extends AllegroWsdlClass
{
    /**
     * The sessionId
     * @var string
     */
    public $sessionId;
    /**
     * The paymentType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $paymentType;
    /**
     * The userRole
     * @var int
     */
    public $userRole;
    /**
     * The fillingTimeFrom
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $fillingTimeFrom;
    /**
     * The fillingTimeTo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $fillingTimeTo;
    /**
     * Constructor method for DoGetFilledPostBuyFormsRequest
     * @see parent::__construct()
     * @param string $_sessionId
     * @param int $_paymentType
     * @param int $_userRole
     * @param long $_fillingTimeFrom
     * @param long $_fillingTimeTo
     * @return AllegroStructDoGetFilledPostBuyFormsRequest
     */
    public function __construct($_sessionId = NULL,$_paymentType = NULL,$_userRole = NULL,$_fillingTimeFrom = NULL,$_fillingTimeTo = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'paymentType'=>$_paymentType,'userRole'=>$_userRole,'fillingTimeFrom'=>$_fillingTimeFrom,'fillingTimeTo'=>$_fillingTimeTo),false);
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
     * Get paymentType value
     * @return int|null
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param int $_paymentType the paymentType
     * @return int
     */
    public function setPaymentType($_paymentType)
    {
        return ($this->paymentType = $_paymentType);
    }
    /**
     * Get userRole value
     * @return int|null
     */
    public function getUserRole()
    {
        return $this->userRole;
    }
    /**
     * Set userRole value
     * @param int $_userRole the userRole
     * @return int
     */
    public function setUserRole($_userRole)
    {
        return ($this->userRole = $_userRole);
    }
    /**
     * Get fillingTimeFrom value
     * @return long|null
     */
    public function getFillingTimeFrom()
    {
        return $this->fillingTimeFrom;
    }
    /**
     * Set fillingTimeFrom value
     * @param long $_fillingTimeFrom the fillingTimeFrom
     * @return long
     */
    public function setFillingTimeFrom($_fillingTimeFrom)
    {
        return ($this->fillingTimeFrom = $_fillingTimeFrom);
    }
    /**
     * Get fillingTimeTo value
     * @return long|null
     */
    public function getFillingTimeTo()
    {
        return $this->fillingTimeTo;
    }
    /**
     * Set fillingTimeTo value
     * @param long $_fillingTimeTo the fillingTimeTo
     * @return long
     */
    public function setFillingTimeTo($_fillingTimeTo)
    {
        return ($this->fillingTimeTo = $_fillingTimeTo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetFilledPostBuyFormsRequest
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
