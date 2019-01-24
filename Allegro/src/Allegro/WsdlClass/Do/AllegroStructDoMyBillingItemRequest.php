<?php
/**
 * File for class AllegroStructDoMyBillingItemRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoMyBillingItemRequest originally named DoMyBillingItemRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoMyBillingItemRequest extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The itemId
     * @var long
     */
    public $itemId;
    /**
     * The option
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $option;
    /**
     * Constructor method for DoMyBillingItemRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param long $_itemId
     * @param string $_option
     * @return AllegroStructDoMyBillingItemRequest
     */
    public function __construct($_sessionHandle = NULL,$_itemId = NULL,$_option = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'itemId'=>$_itemId,'option'=>$_option),false);
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
     * Get option value
     * @return string|null
     */
    public function getOption()
    {
        return $this->option;
    }
    /**
     * Set option value
     * @param string $_option the option
     * @return string
     */
    public function setOption($_option)
    {
        return ($this->option = $_option);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoMyBillingItemRequest
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
