<?php
/**
 * File for class AllegroStructFeedbackManyStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructFeedbackManyStruct originally named FeedbackManyStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructFeedbackManyStruct extends AllegroWsdlClass
{
    /**
     * The feItemId
     * @var long
     */
    public $feItemId;
    /**
     * The feUseCommentTemplate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $feUseCommentTemplate;
    /**
     * The feToUserId
     * @var int
     */
    public $feToUserId;
    /**
     * The feComment
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $feComment;
    /**
     * The feCommentType
     * @var string
     */
    public $feCommentType;
    /**
     * The feOp
     * @var int
     */
    public $feOp;
    /**
     * The feRating
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfSellratingestimationstruct
     */
    public $feRating;
    /**
     * Constructor method for FeedbackManyStruct
     * @see parent::__construct()
     * @param long $_feItemId
     * @param int $_feUseCommentTemplate
     * @param int $_feToUserId
     * @param string $_feComment
     * @param string $_feCommentType
     * @param int $_feOp
     * @param AllegroStructArrayOfSellratingestimationstruct $_feRating
     * @return AllegroStructFeedbackManyStruct
     */
    public function __construct($_feItemId = NULL,$_feUseCommentTemplate = NULL,$_feToUserId = NULL,$_feComment = NULL,$_feCommentType = NULL,$_feOp = NULL,$_feRating = NULL)
    {
        parent::__construct(array('feItemId'=>$_feItemId,'feUseCommentTemplate'=>$_feUseCommentTemplate,'feToUserId'=>$_feToUserId,'feComment'=>$_feComment,'feCommentType'=>$_feCommentType,'feOp'=>$_feOp,'feRating'=>($_feRating instanceof AllegroStructArrayOfSellratingestimationstruct)?$_feRating:new AllegroStructArrayOfSellratingestimationstruct($_feRating)),false);
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
     * Get feUseCommentTemplate value
     * @return int|null
     */
    public function getFeUseCommentTemplate()
    {
        return $this->feUseCommentTemplate;
    }
    /**
     * Set feUseCommentTemplate value
     * @param int $_feUseCommentTemplate the feUseCommentTemplate
     * @return int
     */
    public function setFeUseCommentTemplate($_feUseCommentTemplate)
    {
        return ($this->feUseCommentTemplate = $_feUseCommentTemplate);
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
     * Get feComment value
     * @return string|null
     */
    public function getFeComment()
    {
        return $this->feComment;
    }
    /**
     * Set feComment value
     * @param string $_feComment the feComment
     * @return string
     */
    public function setFeComment($_feComment)
    {
        return ($this->feComment = $_feComment);
    }
    /**
     * Get feCommentType value
     * @return string|null
     */
    public function getFeCommentType()
    {
        return $this->feCommentType;
    }
    /**
     * Set feCommentType value
     * @param string $_feCommentType the feCommentType
     * @return string
     */
    public function setFeCommentType($_feCommentType)
    {
        return ($this->feCommentType = $_feCommentType);
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
     * Get feRating value
     * @return AllegroStructArrayOfSellratingestimationstruct|null
     */
    public function getFeRating()
    {
        return $this->feRating;
    }
    /**
     * Set feRating value
     * @param AllegroStructArrayOfSellratingestimationstruct $_feRating the feRating
     * @return AllegroStructArrayOfSellratingestimationstruct
     */
    public function setFeRating($_feRating)
    {
        return ($this->feRating = $_feRating);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructFeedbackManyStruct
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
