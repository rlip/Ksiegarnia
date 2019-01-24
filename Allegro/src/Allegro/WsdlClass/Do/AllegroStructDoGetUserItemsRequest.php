<?php
/**
 * File for class AllegroStructDoGetUserItemsRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetUserItemsRequest originally named DoGetUserItemsRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetUserItemsRequest extends AllegroWsdlClass
{
    /**
     * The userId
     * @var int
     */
    public $userId;
    /**
     * The webapiKey
     * @var string
     */
    public $webapiKey;
    /**
     * The countryId
     * @var int
     */
    public $countryId;
    /**
     * The offset
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $offset;
    /**
     * The limit
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $limit;
    /**
     * Constructor method for DoGetUserItemsRequest
     * @see parent::__construct()
     * @param int $_userId
     * @param string $_webapiKey
     * @param int $_countryId
     * @param int $_offset
     * @param int $_limit
     * @return AllegroStructDoGetUserItemsRequest
     */
    public function __construct($_userId = NULL,$_webapiKey = NULL,$_countryId = NULL,$_offset = NULL,$_limit = NULL)
    {
        parent::__construct(array('userId'=>$_userId,'webapiKey'=>$_webapiKey,'countryId'=>$_countryId,'offset'=>$_offset,'limit'=>$_limit),false);
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId()
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $_userId the userId
     * @return int
     */
    public function setUserId($_userId)
    {
        return ($this->userId = $_userId);
    }
    /**
     * Get webapiKey value
     * @return string|null
     */
    public function getWebapiKey()
    {
        return $this->webapiKey;
    }
    /**
     * Set webapiKey value
     * @param string $_webapiKey the webapiKey
     * @return string
     */
    public function setWebapiKey($_webapiKey)
    {
        return ($this->webapiKey = $_webapiKey);
    }
    /**
     * Get countryId value
     * @return int|null
     */
    public function getCountryId()
    {
        return $this->countryId;
    }
    /**
     * Set countryId value
     * @param int $_countryId the countryId
     * @return int
     */
    public function setCountryId($_countryId)
    {
        return ($this->countryId = $_countryId);
    }
    /**
     * Get offset value
     * @return int|null
     */
    public function getOffset()
    {
        return $this->offset;
    }
    /**
     * Set offset value
     * @param int $_offset the offset
     * @return int
     */
    public function setOffset($_offset)
    {
        return ($this->offset = $_offset);
    }
    /**
     * Get limit value
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }
    /**
     * Set limit value
     * @param int $_limit the limit
     * @return int
     */
    public function setLimit($_limit)
    {
        return ($this->limit = $_limit);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetUserItemsRequest
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
