<?php
/**
 * File for class AllegroStructUserBlackListAddResultStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructUserBlackListAddResultStruct originally named UserBlackListAddResultStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructUserBlackListAddResultStruct extends AllegroWsdlClass
{
    /**
     * The userId
     * @var int
     */
    public $userId;
    /**
     * The addToBlackListResult
     * @var int
     */
    public $addToBlackListResult;
    /**
     * The addToBlackListErrCode
     * @var string
     */
    public $addToBlackListErrCode;
    /**
     * The addToBlackListErrMsg
     * @var string
     */
    public $addToBlackListErrMsg;
    /**
     * Constructor method for UserBlackListAddResultStruct
     * @see parent::__construct()
     * @param int $_userId
     * @param int $_addToBlackListResult
     * @param string $_addToBlackListErrCode
     * @param string $_addToBlackListErrMsg
     * @return AllegroStructUserBlackListAddResultStruct
     */
    public function __construct($_userId = NULL,$_addToBlackListResult = NULL,$_addToBlackListErrCode = NULL,$_addToBlackListErrMsg = NULL)
    {
        parent::__construct(array('userId'=>$_userId,'addToBlackListResult'=>$_addToBlackListResult,'addToBlackListErrCode'=>$_addToBlackListErrCode,'addToBlackListErrMsg'=>$_addToBlackListErrMsg),false);
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId()
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $_userId the userId
     * @return int
     */
    public function setUserId($_userId)
    {
        return ($this->userId = $_userId);
    }
    /**
     * Get addToBlackListResult value
     * @return int|null
     */
    public function getAddToBlackListResult()
    {
        return $this->addToBlackListResult;
    }
    /**
     * Set addToBlackListResult value
     * @param int $_addToBlackListResult the addToBlackListResult
     * @return int
     */
    public function setAddToBlackListResult($_addToBlackListResult)
    {
        return ($this->addToBlackListResult = $_addToBlackListResult);
    }
    /**
     * Get addToBlackListErrCode value
     * @return string|null
     */
    public function getAddToBlackListErrCode()
    {
        return $this->addToBlackListErrCode;
    }
    /**
     * Set addToBlackListErrCode value
     * @param string $_addToBlackListErrCode the addToBlackListErrCode
     * @return string
     */
    public function setAddToBlackListErrCode($_addToBlackListErrCode)
    {
        return ($this->addToBlackListErrCode = $_addToBlackListErrCode);
    }
    /**
     * Get addToBlackListErrMsg value
     * @return string|null
     */
    public function getAddToBlackListErrMsg()
    {
        return $this->addToBlackListErrMsg;
    }
    /**
     * Set addToBlackListErrMsg value
     * @param string $_addToBlackListErrMsg the addToBlackListErrMsg
     * @return string
     */
    public function setAddToBlackListErrMsg($_addToBlackListErrMsg)
    {
        return ($this->addToBlackListErrMsg = $_addToBlackListErrMsg);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructUserBlackListAddResultStruct
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
