<?php
/**
 * File for class AllegroStructItemImageList
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructItemImageList originally named ItemImageList
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructItemImageList extends AllegroWsdlClass
{
    /**
     * The imageType
     * @var int
     */
    public $imageType;
    /**
     * The imageUrl
     * @var string
     */
    public $imageUrl;
    /**
     * Constructor method for ItemImageList
     * @see parent::__construct()
     * @param int $_imageType
     * @param string $_imageUrl
     * @return AllegroStructItemImageList
     */
    public function __construct($_imageType = NULL,$_imageUrl = NULL)
    {
        parent::__construct(array('imageType'=>$_imageType,'imageUrl'=>$_imageUrl),false);
    }
    /**
     * Get imageType value
     * @return int|null
     */
    public function getImageType()
    {
        return $this->imageType;
    }
    /**
     * Set imageType value
     * @param int $_imageType the imageType
     * @return int
     */
    public function setImageType($_imageType)
    {
        return ($this->imageType = $_imageType);
    }
    /**
     * Get imageUrl value
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }
    /**
     * Set imageUrl value
     * @param string $_imageUrl the imageUrl
     * @return string
     */
    public function setImageUrl($_imageUrl)
    {
        return ($this->imageUrl = $_imageUrl);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructItemImageList
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
