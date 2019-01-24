<?php
/**
 * File for class AllegroStructUserBlackListStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructUserBlackListStruct originally named UserBlackListStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructUserBlackListStruct extends AllegroWsdlClass
{
    /**
     * The userId
     * @var int
     */
    public $userId;
    /**
     * The userBlackListNote
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $userBlackListNote;
    /**
     * Constructor method for UserBlackListStruct
     * @see parent::__construct()
     * @param int $_userId
     * @param string $_userBlackListNote
     * @return AllegroStructUserBlackListStruct
     */
    public function __construct($_userId = NULL,$_userBlackListNote = NULL)
    {
        parent::__construct(array('userId'=>$_userId,'userBlackListNote'=>$_userBlackListNote),false);
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
     * Get userBlackListNote value
     * @return string|null
     */
    public function getUserBlackListNote()
    {
        return $this->userBlackListNote;
    }
    /**
     * Set userBlackListNote value
     * @param string $_userBlackListNote the userBlackListNote
     * @return string
     */
    public function setUserBlackListNote($_userBlackListNote)
    {
        return ($this->userBlackListNote = $_userBlackListNote);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructUserBlackListStruct
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
