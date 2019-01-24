<?php
/**
 * File for class AllegroStructDoInternalIStoreChangeRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoInternalIStoreChangeRequest originally named DoInternalIStoreChangeRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoInternalIStoreChangeRequest extends AllegroWsdlClass
{
    /**
     * The webapiKey
     * @var string
     */
    public $webapiKey;
    /**
     * The userId
     * @var long
     */
    public $userId;
    /**
     * The istoreId
     * @var long
     */
    public $istoreId;
    /**
     * The actionType
     * @var string
     */
    public $actionType;
    /**
     * The actionDate
     * @var long
     */
    public $actionDate;
    /**
     * The validDate
     * @var long
     */
    public $validDate;
    /**
     * Constructor method for DoInternalIStoreChangeRequest
     * @see parent::__construct()
     * @param string $_webapiKey
     * @param long $_userId
     * @param long $_istoreId
     * @param string $_actionType
     * @param long $_actionDate
     * @param long $_validDate
     * @return AllegroStructDoInternalIStoreChangeRequest
     */
    public function __construct($_webapiKey = NULL,$_userId = NULL,$_istoreId = NULL,$_actionType = NULL,$_actionDate = NULL,$_validDate = NULL)
    {
        parent::__construct(array('webapiKey'=>$_webapiKey,'userId'=>$_userId,'istoreId'=>$_istoreId,'actionType'=>$_actionType,'actionDate'=>$_actionDate,'validDate'=>$_validDate),false);
    }
    /**
     * Get webapiKey value
     * @return string|null
     */
    public function getWebapiKey()
    {
        return $this->webapiKey;
    }
    /**
     * Set webapiKey value
     * @param string $_webapiKey the webapiKey
     * @return string
     */
    public function setWebapiKey($_webapiKey)
    {
        return ($this->webapiKey = $_webapiKey);
    }
    /**
     * Get userId value
     * @return long|null
     */
    public function getUserId()
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param long $_userId the userId
     * @return long
     */
    public function setUserId($_userId)
    {
        return ($this->userId = $_userId);
    }
    /**
     * Get istoreId value
     * @return long|null
     */
    public function getIstoreId()
    {
        return $this->istoreId;
    }
    /**
     * Set istoreId value
     * @param long $_istoreId the istoreId
     * @return long
     */
    public function setIstoreId($_istoreId)
    {
        return ($this->istoreId = $_istoreId);
    }
    /**
     * Get actionType value
     * @return string|null
     */
    public function getActionType()
    {
        return $this->actionType;
    }
    /**
     * Set actionType value
     * @param string $_actionType the actionType
     * @return string
     */
    public function setActionType($_actionType)
    {
        return ($this->actionType = $_actionType);
    }
    /**
     * Get actionDate value
     * @return long|null
     */
    public function getActionDate()
    {
        return $this->actionDate;
    }
    /**
     * Set actionDate value
     * @param long $_actionDate the actionDate
     * @return long
     */
    public function setActionDate($_actionDate)
    {
        return ($this->actionDate = $_actionDate);
    }
    /**
     * Get validDate value
     * @return long|null
     */
    public function getValidDate()
    {
        return $this->validDate;
    }
    /**
     * Set validDate value
     * @param long $_validDate the validDate
     * @return long
     */
    public function setValidDate($_validDate)
    {
        return ($this->validDate = $_validDate);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoInternalIStoreChangeRequest
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
