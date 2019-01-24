<?php
/**
 * File for class AllegroStructTemplateInfoType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructTemplateInfoType originally named TemplateInfoType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructTemplateInfoType extends AllegroWsdlClass
{
    /**
     * The templateId
     * @var int
     */
    public $templateId;
    /**
     * The templateName
     * @var string
     */
    public $templateName;
    /**
     * The templateThumb
     * @var base64Binary
     */
    public $templateThumb;
    /**
     * The templateDescImages
     * @var base64Binary
     */
    public $templateDescImages;
    /**
     * Constructor method for TemplateInfoType
     * @see parent::__construct()
     * @param int $_templateId
     * @param string $_templateName
     * @param base64Binary $_templateThumb
     * @param base64Binary $_templateDescImages
     * @return AllegroStructTemplateInfoType
     */
    public function __construct($_templateId = NULL,$_templateName = NULL,$_templateThumb = NULL,$_templateDescImages = NULL)
    {
        parent::__construct(array('templateId'=>$_templateId,'templateName'=>$_templateName,'templateThumb'=>$_templateThumb,'templateDescImages'=>$_templateDescImages),false);
    }
    /**
     * Get templateId value
     * @return int|null
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }
    /**
     * Set templateId value
     * @param int $_templateId the templateId
     * @return int
     */
    public function setTemplateId($_templateId)
    {
        return ($this->templateId = $_templateId);
    }
    /**
     * Get templateName value
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }
    /**
     * Set templateName value
     * @param string $_templateName the templateName
     * @return string
     */
    public function setTemplateName($_templateName)
    {
        return ($this->templateName = $_templateName);
    }
    /**
     * Get templateThumb value
     * @return base64Binary|null
     */
    public function getTemplateThumb()
    {
        return $this->templateThumb;
    }
    /**
     * Set templateThumb value
     * @param base64Binary $_templateThumb the templateThumb
     * @return base64Binary
     */
    public function setTemplateThumb($_templateThumb)
    {
        return ($this->templateThumb = $_templateThumb);
    }
    /**
     * Get templateDescImages value
     * @return base64Binary|null
     */
    public function getTemplateDescImages()
    {
        return $this->templateDescImages;
    }
    /**
     * Set templateDescImages value
     * @param base64Binary $_templateDescImages the templateDescImages
     * @return base64Binary
     */
    public function setTemplateDescImages($_templateDescImages)
    {
        return ($this->templateDescImages = $_templateDescImages);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructTemplateInfoType
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
