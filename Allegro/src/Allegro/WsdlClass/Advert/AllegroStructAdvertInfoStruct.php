<?php
/**
 * File for class AllegroStructAdvertInfoStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructAdvertInfoStruct originally named AdvertInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructAdvertInfoStruct extends AllegroWsdlClass
{
    /**
     * The itemIsAdvert
     * @var int
     */
    public $itemIsAdvert;
    /**
     * The itemAdvertId
     * @var string
     */
    public $itemAdvertId;
    /**
     * Constructor method for AdvertInfoStruct
     * @see parent::__construct()
     * @param int $_itemIsAdvert
     * @param string $_itemAdvertId
     * @return AllegroStructAdvertInfoStruct
     */
    public function __construct($_itemIsAdvert = NULL,$_itemAdvertId = NULL)
    {
        parent::__construct(array('itemIsAdvert'=>$_itemIsAdvert,'itemAdvertId'=>$_itemAdvertId),false);
    }
    /**
     * Get itemIsAdvert value
     * @return int|null
     */
    public function getItemIsAdvert()
    {
        return $this->itemIsAdvert;
    }
    /**
     * Set itemIsAdvert value
     * @param int $_itemIsAdvert the itemIsAdvert
     * @return int
     */
    public function setItemIsAdvert($_itemIsAdvert)
    {
        return ($this->itemIsAdvert = $_itemIsAdvert);
    }
    /**
     * Get itemAdvertId value
     * @return string|null
     */
    public function getItemAdvertId()
    {
        return $this->itemAdvertId;
    }
    /**
     * Set itemAdvertId value
     * @param string $_itemAdvertId the itemAdvertId
     * @return string
     */
    public function setItemAdvertId($_itemAdvertId)
    {
        return ($this->itemAdvertId = $_itemAdvertId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructAdvertInfoStruct
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
