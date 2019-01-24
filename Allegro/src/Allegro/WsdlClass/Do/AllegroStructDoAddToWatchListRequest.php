<?php
/**
 * File for class AllegroStructDoAddToWatchListRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoAddToWatchListRequest originally named DoAddToWatchListRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoAddToWatchListRequest extends AllegroWsdlClass
{
    /**
     * The sessionId
     * @var string
     */
    public $sessionId;
    /**
     * The itemIds
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $itemIds;
    /**
     * Constructor method for DoAddToWatchListRequest
     * @see parent::__construct()
     * @param string $_sessionId
     * @param AllegroStructArrayOfLong $_itemIds
     * @return AllegroStructDoAddToWatchListRequest
     */
    public function __construct($_sessionId = NULL,$_itemIds = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'itemIds'=>($_itemIds instanceof AllegroStructArrayOfLong)?$_itemIds:new AllegroStructArrayOfLong($_itemIds)),false);
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
     * Get itemIds value
     * @return AllegroStructArrayOfLong|null
     */
    public function getItemIds()
    {
        return $this->itemIds;
    }
    /**
     * Set itemIds value
     * @param AllegroStructArrayOfLong $_itemIds the itemIds
     * @return AllegroStructArrayOfLong
     */
    public function setItemIds($_itemIds)
    {
        return ($this->itemIds = $_itemIds);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoAddToWatchListRequest
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
