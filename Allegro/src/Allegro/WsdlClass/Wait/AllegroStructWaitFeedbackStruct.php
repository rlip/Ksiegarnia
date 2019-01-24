<?php
/**
 * File for class AllegroStructWaitFeedbackStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructWaitFeedbackStruct originally named WaitFeedbackStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructWaitFeedbackStruct extends AllegroWsdlClass
{
    /**
     * The feItemId
     * @var long
     */
    public $feItemId;
    /**
     * The feItemName
     * @var string
     */
    public $feItemName;
    /**
     * The feToUserId
     * @var int
     */
    public $feToUserId;
    /**
     * The feOp
     * @var int
     */
    public $feOp;
    /**
     * The feAnsCommentType
     * @var string
     */
    public $feAnsCommentType;
    /**
     * The fePossibilityToAdd
     * @var int
     */
    public $fePossibilityToAdd;
    /**
     * Constructor method for WaitFeedbackStruct
     * @see parent::__construct()
     * @param long $_feItemId
     * @param string $_feItemName
     * @param int $_feToUserId
     * @param int $_feOp
     * @param string $_feAnsCommentType
     * @param int $_fePossibilityToAdd
     * @return AllegroStructWaitFeedbackStruct
     */
    public function __construct($_feItemId = NULL,$_feItemName = NULL,$_feToUserId = NULL,$_feOp = NULL,$_feAnsCommentType = NULL,$_fePossibilityToAdd = NULL)
    {
        parent::__construct(array('feItemId'=>$_feItemId,'feItemName'=>$_feItemName,'feToUserId'=>$_feToUserId,'feOp'=>$_feOp,'feAnsCommentType'=>$_feAnsCommentType,'fePossibilityToAdd'=>$_fePossibilityToAdd),false);
    }
    /**
     * Get feItemId value
     * @return long|null
     */
    public function getFeItemId()
    {
        return $this->feItemId;
    }
    /**
     * Set feItemId value
     * @param long $_feItemId the feItemId
     * @return long
     */
    public function setFeItemId($_feItemId)
    {
        return ($this->feItemId = $_feItemId);
    }
    /**
     * Get feItemName value
     * @return string|null
     */
    public function getFeItemName()
    {
        return $this->feItemName;
    }
    /**
     * Set feItemName value
     * @param string $_feItemName the feItemName
     * @return string
     */
    public function setFeItemName($_feItemName)
    {
        return ($this->feItemName = $_feItemName);
    }
    /**
     * Get feToUserId value
     * @return int|null
     */
    public function getFeToUserId()
    {
        return $this->feToUserId;
    }
    /**
     * Set feToUserId value
     * @param int $_feToUserId the feToUserId
     * @return int
     */
    public function setFeToUserId($_feToUserId)
    {
        return ($this->feToUserId = $_feToUserId);
    }
    /**
     * Get feOp value
     * @return int|null
     */
    public function getFeOp()
    {
        return $this->feOp;
    }
    /**
     * Set feOp value
     * @param int $_feOp the feOp
     * @return int
     */
    public function setFeOp($_feOp)
    {
        return ($this->feOp = $_feOp);
    }
    /**
     * Get feAnsCommentType value
     * @return string|null
     */
    public function getFeAnsCommentType()
    {
        return $this->feAnsCommentType;
    }
    /**
     * Set feAnsCommentType value
     * @param string $_feAnsCommentType the feAnsCommentType
     * @return string
     */
    public function setFeAnsCommentType($_feAnsCommentType)
    {
        return ($this->feAnsCommentType = $_feAnsCommentType);
    }
    /**
     * Get fePossibilityToAdd value
     * @return int|null
     */
    public function getFePossibilityToAdd()
    {
        return $this->fePossibilityToAdd;
    }
    /**
     * Set fePossibilityToAdd value
     * @param int $_fePossibilityToAdd the fePossibilityToAdd
     * @return int
     */
    public function setFePossibilityToAdd($_fePossibilityToAdd)
    {
        return ($this->fePossibilityToAdd = $_fePossibilityToAdd);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructWaitFeedbackStruct
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
