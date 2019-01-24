<?php
/**
 * File for class AllegroStructBlackListResStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructBlackListResStruct originally named BlackListResStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructBlackListResStruct extends AllegroWsdlClass
{
    /**
     * The userId
     * @var long
     */
    public $userId;
    /**
     * The result
     * @var int
     */
    public $result;
    /**
     * Constructor method for BlackListResStruct
     * @see parent::__construct()
     * @param long $_userId
     * @param int $_result
     * @return AllegroStructBlackListResStruct
     */
    public function __construct($_userId = NULL,$_result = NULL)
    {
        parent::__construct(array('userId'=>$_userId,'result'=>$_result),false);
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
     * Get result value
     * @return int|null
     */
    public function getResult()
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param int $_result the result
     * @return int
     */
    public function setResult($_result)
    {
        return ($this->result = $_result);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructBlackListResStruct
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
