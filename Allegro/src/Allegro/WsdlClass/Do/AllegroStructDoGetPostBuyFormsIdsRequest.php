<?php
/**
 * File for class AllegroStructDoGetPostBuyFormsIdsRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetPostBuyFormsIdsRequest originally named DoGetPostBuyFormsIdsRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetPostBuyFormsIdsRequest extends AllegroWsdlClass
{
    /**
     * The sessionId
     * @var string
     */
    public $sessionId;
    /**
     * The filterOptions
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFilteroptionstype
     */
    public $filterOptions;
    /**
     * The resultSize
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $resultSize;
    /**
     * The resultOffset
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $resultOffset;
    /**
     * Constructor method for DoGetPostBuyFormsIdsRequest
     * @see parent::__construct()
     * @param string $_sessionId
     * @param AllegroStructArrayOfFilteroptionstype $_filterOptions
     * @param int $_resultSize
     * @param int $_resultOffset
     * @return AllegroStructDoGetPostBuyFormsIdsRequest
     */
    public function __construct($_sessionId = NULL,$_filterOptions = NULL,$_resultSize = NULL,$_resultOffset = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'filterOptions'=>($_filterOptions instanceof AllegroStructArrayOfFilteroptionstype)?$_filterOptions:new AllegroStructArrayOfFilteroptionstype($_filterOptions),'resultSize'=>$_resultSize,'resultOffset'=>$_resultOffset),false);
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
     * Get filterOptions value
     * @return AllegroStructArrayOfFilteroptionstype|null
     */
    public function getFilterOptions()
    {
        return $this->filterOptions;
    }
    /**
     * Set filterOptions value
     * @param AllegroStructArrayOfFilteroptionstype $_filterOptions the filterOptions
     * @return AllegroStructArrayOfFilteroptionstype
     */
    public function setFilterOptions($_filterOptions)
    {
        return ($this->filterOptions = $_filterOptions);
    }
    /**
     * Get resultSize value
     * @return int|null
     */
    public function getResultSize()
    {
        return $this->resultSize;
    }
    /**
     * Set resultSize value
     * @param int $_resultSize the resultSize
     * @return int
     */
    public function setResultSize($_resultSize)
    {
        return ($this->resultSize = $_resultSize);
    }
    /**
     * Get resultOffset value
     * @return int|null
     */
    public function getResultOffset()
    {
        return $this->resultOffset;
    }
    /**
     * Set resultOffset value
     * @param int $_resultOffset the resultOffset
     * @return int
     */
    public function setResultOffset($_resultOffset)
    {
        return ($this->resultOffset = $_resultOffset);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetPostBuyFormsIdsRequest
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
