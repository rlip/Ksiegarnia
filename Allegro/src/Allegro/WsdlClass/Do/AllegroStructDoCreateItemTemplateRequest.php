<?php
/**
 * File for class AllegroStructDoCreateItemTemplateRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoCreateItemTemplateRequest originally named DoCreateItemTemplateRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoCreateItemTemplateRequest extends AllegroWsdlClass
{
    /**
     * The sessionId
     * @var string
     */
    public $sessionId;
    /**
     * The itemTemplateName
     * @var string
     */
    public $itemTemplateName;
    /**
     * The itemTemplateFields
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFieldsvalue
     */
    public $itemTemplateFields;
    /**
     * Constructor method for DoCreateItemTemplateRequest
     * @see parent::__construct()
     * @param string $_sessionId
     * @param string $_itemTemplateName
     * @param AllegroStructArrayOfFieldsvalue $_itemTemplateFields
     * @return AllegroStructDoCreateItemTemplateRequest
     */
    public function __construct($_sessionId = NULL,$_itemTemplateName = NULL,$_itemTemplateFields = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'itemTemplateName'=>$_itemTemplateName,'itemTemplateFields'=>($_itemTemplateFields instanceof AllegroStructArrayOfFieldsvalue)?$_itemTemplateFields:new AllegroStructArrayOfFieldsvalue($_itemTemplateFields)),false);
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
     * Get itemTemplateName value
     * @return string|null
     */
    public function getItemTemplateName()
    {
        return $this->itemTemplateName;
    }
    /**
     * Set itemTemplateName value
     * @param string $_itemTemplateName the itemTemplateName
     * @return string
     */
    public function setItemTemplateName($_itemTemplateName)
    {
        return ($this->itemTemplateName = $_itemTemplateName);
    }
    /**
     * Get itemTemplateFields value
     * @return AllegroStructArrayOfFieldsvalue|null
     */
    public function getItemTemplateFields()
    {
        return $this->itemTemplateFields;
    }
    /**
     * Set itemTemplateFields value
     * @param AllegroStructArrayOfFieldsvalue $_itemTemplateFields the itemTemplateFields
     * @return AllegroStructArrayOfFieldsvalue
     */
    public function setItemTemplateFields($_itemTemplateFields)
    {
        return ($this->itemTemplateFields = $_itemTemplateFields);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoCreateItemTemplateRequest
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
