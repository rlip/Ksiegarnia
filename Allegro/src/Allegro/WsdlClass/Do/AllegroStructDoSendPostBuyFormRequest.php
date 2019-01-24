<?php
/**
 * File for class AllegroStructDoSendPostBuyFormRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoSendPostBuyFormRequest originally named DoSendPostBuyFormRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoSendPostBuyFormRequest extends AllegroWsdlClass
{
    /**
     * The sessionId
     * @var string
     */
    public $sessionId;
    /**
     * The newPostBuyFormSeller
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfNewpostbuyformsellerstruct
     */
    public $newPostBuyFormSeller;
    /**
     * The newPostBuyFormCommon
     * @var AllegroStructNewPostBuyFormCommonStruct
     */
    public $newPostBuyFormCommon;
    /**
     * Constructor method for DoSendPostBuyFormRequest
     * @see parent::__construct()
     * @param string $_sessionId
     * @param AllegroStructArrayOfNewpostbuyformsellerstruct $_newPostBuyFormSeller
     * @param AllegroStructNewPostBuyFormCommonStruct $_newPostBuyFormCommon
     * @return AllegroStructDoSendPostBuyFormRequest
     */
    public function __construct($_sessionId = NULL,$_newPostBuyFormSeller = NULL,$_newPostBuyFormCommon = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'newPostBuyFormSeller'=>($_newPostBuyFormSeller instanceof AllegroStructArrayOfNewpostbuyformsellerstruct)?$_newPostBuyFormSeller:new AllegroStructArrayOfNewpostbuyformsellerstruct($_newPostBuyFormSeller),'newPostBuyFormCommon'=>$_newPostBuyFormCommon),false);
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
     * Get newPostBuyFormSeller value
     * @return AllegroStructArrayOfNewpostbuyformsellerstruct|null
     */
    public function getNewPostBuyFormSeller()
    {
        return $this->newPostBuyFormSeller;
    }
    /**
     * Set newPostBuyFormSeller value
     * @param AllegroStructArrayOfNewpostbuyformsellerstruct $_newPostBuyFormSeller the newPostBuyFormSeller
     * @return AllegroStructArrayOfNewpostbuyformsellerstruct
     */
    public function setNewPostBuyFormSeller($_newPostBuyFormSeller)
    {
        return ($this->newPostBuyFormSeller = $_newPostBuyFormSeller);
    }
    /**
     * Get newPostBuyFormCommon value
     * @return AllegroStructNewPostBuyFormCommonStruct|null
     */
    public function getNewPostBuyFormCommon()
    {
        return $this->newPostBuyFormCommon;
    }
    /**
     * Set newPostBuyFormCommon value
     * @param AllegroStructNewPostBuyFormCommonStruct $_newPostBuyFormCommon the newPostBuyFormCommon
     * @return AllegroStructNewPostBuyFormCommonStruct
     */
    public function setNewPostBuyFormCommon($_newPostBuyFormCommon)
    {
        return ($this->newPostBuyFormCommon = $_newPostBuyFormCommon);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoSendPostBuyFormRequest
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
