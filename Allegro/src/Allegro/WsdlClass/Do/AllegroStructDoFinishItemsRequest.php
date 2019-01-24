<?php
/**
 * File for class AllegroStructDoFinishItemsRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoFinishItemsRequest originally named DoFinishItemsRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoFinishItemsRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The finishItemsList
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfFinishitemsstruct
     */
    public $finishItemsList;
    /**
     * Constructor method for DoFinishItemsRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param AllegroStructArrayOfFinishitemsstruct $_finishItemsList
     * @return AllegroStructDoFinishItemsRequest
     */
    public function __construct($_sessionHandle = NULL,$_finishItemsList = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'finishItemsList'=>($_finishItemsList instanceof AllegroStructArrayOfFinishitemsstruct)?$_finishItemsList:new AllegroStructArrayOfFinishitemsstruct($_finishItemsList)),false);
    }
    /**
     * Get sessionHandle value
     * @return string|null
     */
    public function getSessionHandle()
    {
        return $this->sessionHandle;
    }
    /**
     * Set sessionHandle value
     * @param string $_sessionHandle the sessionHandle
     * @return string
     */
    public function setSessionHandle($_sessionHandle)
    {
        return ($this->sessionHandle = $_sessionHandle);
    }
    /**
     * Get finishItemsList value
     * @return AllegroStructArrayOfFinishitemsstruct|null
     */
    public function getFinishItemsList()
    {
        return $this->finishItemsList;
    }
    /**
     * Set finishItemsList value
     * @param AllegroStructArrayOfFinishitemsstruct $_finishItemsList the finishItemsList
     * @return AllegroStructArrayOfFinishitemsstruct
     */
    public function setFinishItemsList($_finishItemsList)
    {
        return ($this->finishItemsList = $_finishItemsList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoFinishItemsRequest
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
