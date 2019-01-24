<?php
/**
 * File for class AllegroStructPhotoInfoType
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPhotoInfoType originally named PhotoInfoType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPhotoInfoType extends AllegroWsdlClass
{
    /**
     * The photoSize
     * @var string
     */
    public $photoSize;
    /**
     * The photoUrl
     * @var string
     */
    public $photoUrl;
    /**
     * The photoIsMain
     * @var boolean
     */
    public $photoIsMain;
    /**
     * Constructor method for PhotoInfoType
     * @see parent::__construct()
     * @param string $_photoSize
     * @param string $_photoUrl
     * @param boolean $_photoIsMain
     * @return AllegroStructPhotoInfoType
     */
    public function __construct($_photoSize = NULL,$_photoUrl = NULL,$_photoIsMain = NULL)
    {
        parent::__construct(array('photoSize'=>$_photoSize,'photoUrl'=>$_photoUrl,'photoIsMain'=>$_photoIsMain),false);
    }
    /**
     * Get photoSize value
     * @return string|null
     */
    public function getPhotoSize()
    {
        return $this->photoSize;
    }
    /**
     * Set photoSize value
     * @param string $_photoSize the photoSize
     * @return string
     */
    public function setPhotoSize($_photoSize)
    {
        return ($this->photoSize = $_photoSize);
    }
    /**
     * Get photoUrl value
     * @return string|null
     */
    public function getPhotoUrl()
    {
        return $this->photoUrl;
    }
    /**
     * Set photoUrl value
     * @param string $_photoUrl the photoUrl
     * @return string
     */
    public function setPhotoUrl($_photoUrl)
    {
        return ($this->photoUrl = $_photoUrl);
    }
    /**
     * Get photoIsMain value
     * @return boolean|null
     */
    public function getPhotoIsMain()
    {
        return $this->photoIsMain;
    }
    /**
     * Set photoIsMain value
     * @param boolean $_photoIsMain the photoIsMain
     * @return boolean
     */
    public function setPhotoIsMain($_photoIsMain)
    {
        return ($this->photoIsMain = $_photoIsMain);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPhotoInfoType
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
