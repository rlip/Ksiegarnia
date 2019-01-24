<?php
/**
 * File for class AllegroStructDoRemoveItemTemplatesRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoRemoveItemTemplatesRequest originally named DoRemoveItemTemplatesRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoRemoveItemTemplatesRequest extends AllegroWsdlClass
{
    /**
     * The sessionId
     * @var string
     */
    public $sessionId;
    /**
     * The itemTemplateIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfInt
     */
    public $itemTemplateIds;
    /**
     * Constructor method for DoRemoveItemTemplatesRequest
     * @see parent::__construct()
     * @param string $_sessionId
     * @param AllegroStructArrayOfInt $_itemTemplateIds
     * @return AllegroStructDoRemoveItemTemplatesRequest
     */
    public function __construct($_sessionId = NULL,$_itemTemplateIds = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'itemTemplateIds'=>($_itemTemplateIds instanceof AllegroStructArrayOfInt)?$_itemTemplateIds:new AllegroStructArrayOfInt($_itemTemplateIds)),false);
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
     * Get itemTemplateIds value
     * @return AllegroStructArrayOfInt|null
     */
    public function getItemTemplateIds()
    {
        return $this->itemTemplateIds;
    }
    /**
     * Set itemTemplateIds value
     * @param AllegroStructArrayOfInt $_itemTemplateIds the itemTemplateIds
     * @return AllegroStructArrayOfInt
     */
    public function setItemTemplateIds($_itemTemplateIds)
    {
        return ($this->itemTemplateIds = $_itemTemplateIds);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoRemoveItemTemplatesRequest
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
