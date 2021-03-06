<?php
/**
 * File for class AllegroStructDoCheckItemDescriptionRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoCheckItemDescriptionRequest originally named DoCheckItemDescriptionRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoCheckItemDescriptionRequest extends AllegroWsdlClass
{
    /**
     * The sessionId
     * @var string
     */
    public $sessionId;
    /**
     * The descriptionContent
     * @var string
     */
    public $descriptionContent;
    /**
     * Constructor method for DoCheckItemDescriptionRequest
     * @see parent::__construct()
     * @param string $_sessionId
     * @param string $_descriptionContent
     * @return AllegroStructDoCheckItemDescriptionRequest
     */
    public function __construct($_sessionId = NULL,$_descriptionContent = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'descriptionContent'=>$_descriptionContent),false);
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
     * Get descriptionContent value
     * @return string|null
     */
    public function getDescriptionContent()
    {
        return $this->descriptionContent;
    }
    /**
     * Set descriptionContent value
     * @param string $_descriptionContent the descriptionContent
     * @return string
     */
    public function setDescriptionContent($_descriptionContent)
    {
        return ($this->descriptionContent = $_descriptionContent);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoCheckItemDescriptionRequest
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
