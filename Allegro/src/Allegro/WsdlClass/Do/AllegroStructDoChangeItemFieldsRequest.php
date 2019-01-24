<?php
/**
 * File for class AllegroStructDoChangeItemFieldsRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoChangeItemFieldsRequest originally named DoChangeItemFieldsRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoChangeItemFieldsRequest extends AllegroWsdlClass
{
    /**
     * The sessionId
     * @var string
     */
    public $sessionId;
    /**
     * The itemId
     * @var long
     */
    public $itemId;
    /**
     * The fieldsToModify
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFieldsvalue
     */
    public $fieldsToModify;
    /**
     * The fieldsToRemove
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfInt
     */
    public $fieldsToRemove;
    /**
     * The previewOnly
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $previewOnly;
    /**
     * The variants
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfVariantstruct
     */
    public $variants;
    /**
     * The tags
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfTagnamestruct
     */
    public $tags;
    /**
     * Constructor method for DoChangeItemFieldsRequest
     * @see parent::__construct()
     * @param string $_sessionId
     * @param long $_itemId
     * @param AllegroStructArrayOfFieldsvalue $_fieldsToModify
     * @param AllegroStructArrayOfInt $_fieldsToRemove
     * @param int $_previewOnly
     * @param AllegroStructArrayOfVariantstruct $_variants
     * @param AllegroStructArrayOfTagnamestruct $_tags
     * @return AllegroStructDoChangeItemFieldsRequest
     */
    public function __construct($_sessionId = NULL,$_itemId = NULL,$_fieldsToModify = NULL,$_fieldsToRemove = NULL,$_previewOnly = NULL,$_variants = NULL,$_tags = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'itemId'=>$_itemId,'fieldsToModify'=>($_fieldsToModify instanceof AllegroStructArrayOfFieldsvalue)?$_fieldsToModify:new AllegroStructArrayOfFieldsvalue($_fieldsToModify),'fieldsToRemove'=>($_fieldsToRemove instanceof AllegroStructArrayOfInt)?$_fieldsToRemove:new AllegroStructArrayOfInt($_fieldsToRemove),'previewOnly'=>$_previewOnly,'variants'=>($_variants instanceof AllegroStructArrayOfVariantstruct)?$_variants:new AllegroStructArrayOfVariantstruct($_variants),'tags'=>($_tags instanceof AllegroStructArrayOfTagnamestruct)?$_tags:new AllegroStructArrayOfTagnamestruct($_tags)),false);
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
     * Get itemId value
     * @return long|null
     */
    public function getItemId()
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param long $_itemId the itemId
     * @return long
     */
    public function setItemId($_itemId)
    {
        return ($this->itemId = $_itemId);
    }
    /**
     * Get fieldsToModify value
     * @return AllegroStructArrayOfFieldsvalue|null
     */
    public function getFieldsToModify()
    {
        return $this->fieldsToModify;
    }
    /**
     * Set fieldsToModify value
     * @param AllegroStructArrayOfFieldsvalue $_fieldsToModify the fieldsToModify
     * @return AllegroStructArrayOfFieldsvalue
     */
    public function setFieldsToModify($_fieldsToModify)
    {
        return ($this->fieldsToModify = $_fieldsToModify);
    }
    /**
     * Get fieldsToRemove value
     * @return AllegroStructArrayOfInt|null
     */
    public function getFieldsToRemove()
    {
        return $this->fieldsToRemove;
    }
    /**
     * Set fieldsToRemove value
     * @param AllegroStructArrayOfInt $_fieldsToRemove the fieldsToRemove
     * @return AllegroStructArrayOfInt
     */
    public function setFieldsToRemove($_fieldsToRemove)
    {
        return ($this->fieldsToRemove = $_fieldsToRemove);
    }
    /**
     * Get previewOnly value
     * @return int|null
     */
    public function getPreviewOnly()
    {
        return $this->previewOnly;
    }
    /**
     * Set previewOnly value
     * @param int $_previewOnly the previewOnly
     * @return int
     */
    public function setPreviewOnly($_previewOnly)
    {
        return ($this->previewOnly = $_previewOnly);
    }
    /**
     * Get variants value
     * @return AllegroStructArrayOfVariantstruct|null
     */
    public function getVariants()
    {
        return $this->variants;
    }
    /**
     * Set variants value
     * @param AllegroStructArrayOfVariantstruct $_variants the variants
     * @return AllegroStructArrayOfVariantstruct
     */
    public function setVariants($_variants)
    {
        return ($this->variants = $_variants);
    }
    /**
     * Get tags value
     * @return AllegroStructArrayOfTagnamestruct|null
     */
    public function getTags()
    {
        return $this->tags;
    }
    /**
     * Set tags value
     * @param AllegroStructArrayOfTagnamestruct $_tags the tags
     * @return AllegroStructArrayOfTagnamestruct
     */
    public function setTags($_tags)
    {
        return ($this->tags = $_tags);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoChangeItemFieldsRequest
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
