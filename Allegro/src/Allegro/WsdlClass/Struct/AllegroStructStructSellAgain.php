<?php
/**
 * File for class AllegroStructStructSellAgain
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructStructSellAgain originally named StructSellAgain
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructStructSellAgain extends AllegroWsdlClass
{
    /**
     * The sellItemId
     * @var long
     */
    public $sellItemId;
    /**
     * The sellItemInfo
     * @var string
     */
    public $sellItemInfo;
    /**
     * The sellItemLocalId
     * @var int
     */
    public $sellItemLocalId;
    /**
     * Constructor method for StructSellAgain
     * @see parent::__construct()
     * @param long $_sellItemId
     * @param string $_sellItemInfo
     * @param int $_sellItemLocalId
     * @return AllegroStructStructSellAgain
     */
    public function __construct($_sellItemId = NULL,$_sellItemInfo = NULL,$_sellItemLocalId = NULL)
    {
        parent::__construct(array('sellItemId'=>$_sellItemId,'sellItemInfo'=>$_sellItemInfo,'sellItemLocalId'=>$_sellItemLocalId),false);
    }
    /**
     * Get sellItemId value
     * @return long|null
     */
    public function getSellItemId()
    {
        return $this->sellItemId;
    }
    /**
     * Set sellItemId value
     * @param long $_sellItemId the sellItemId
     * @return long
     */
    public function setSellItemId($_sellItemId)
    {
        return ($this->sellItemId = $_sellItemId);
    }
    /**
     * Get sellItemInfo value
     * @return string|null
     */
    public function getSellItemInfo()
    {
        return $this->sellItemInfo;
    }
    /**
     * Set sellItemInfo value
     * @param string $_sellItemInfo the sellItemInfo
     * @return string
     */
    public function setSellItemInfo($_sellItemInfo)
    {
        return ($this->sellItemInfo = $_sellItemInfo);
    }
    /**
     * Get sellItemLocalId value
     * @return int|null
     */
    public function getSellItemLocalId()
    {
        return $this->sellItemLocalId;
    }
    /**
     * Set sellItemLocalId value
     * @param int $_sellItemLocalId the sellItemLocalId
     * @return int
     */
    public function setSellItemLocalId($_sellItemLocalId)
    {
        return ($this->sellItemLocalId = $_sellItemLocalId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructStructSellAgain
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
