<?php
/**
 * File for class AllegroStructTransactionPayByLinkStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructTransactionPayByLinkStruct originally named TransactionPayByLinkStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructTransactionPayByLinkStruct extends AllegroWsdlClass
{
    /**
     * The actionHttpMethod
     * @var string
     */
    public $actionHttpMethod;
    /**
     * The actionUrl
     * @var string
     */
    public $actionUrl;
    /**
     * The actionData
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfActiondatastruct
     */
    public $actionData;
    /**
     * Constructor method for TransactionPayByLinkStruct
     * @see parent::__construct()
     * @param string $_actionHttpMethod
     * @param string $_actionUrl
     * @param AllegroStructArrayOfActiondatastruct $_actionData
     * @return AllegroStructTransactionPayByLinkStruct
     */
    public function __construct($_actionHttpMethod = NULL,$_actionUrl = NULL,$_actionData = NULL)
    {
        parent::__construct(array('actionHttpMethod'=>$_actionHttpMethod,'actionUrl'=>$_actionUrl,'actionData'=>($_actionData instanceof AllegroStructArrayOfActiondatastruct)?$_actionData:new AllegroStructArrayOfActiondatastruct($_actionData)),false);
    }
    /**
     * Get actionHttpMethod value
     * @return string|null
     */
    public function getActionHttpMethod()
    {
        return $this->actionHttpMethod;
    }
    /**
     * Set actionHttpMethod value
     * @param string $_actionHttpMethod the actionHttpMethod
     * @return string
     */
    public function setActionHttpMethod($_actionHttpMethod)
    {
        return ($this->actionHttpMethod = $_actionHttpMethod);
    }
    /**
     * Get actionUrl value
     * @return string|null
     */
    public function getActionUrl()
    {
        return $this->actionUrl;
    }
    /**
     * Set actionUrl value
     * @param string $_actionUrl the actionUrl
     * @return string
     */
    public function setActionUrl($_actionUrl)
    {
        return ($this->actionUrl = $_actionUrl);
    }
    /**
     * Get actionData value
     * @return AllegroStructArrayOfActiondatastruct|null
     */
    public function getActionData()
    {
        return $this->actionData;
    }
    /**
     * Set actionData value
     * @param AllegroStructArrayOfActiondatastruct $_actionData the actionData
     * @return AllegroStructArrayOfActiondatastruct
     */
    public function setActionData($_actionData)
    {
        return ($this->actionData = $_actionData);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructTransactionPayByLinkStruct
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
