<?php
/**
 * File for class AllegroStructDoSendPostBuyFormResponse
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoSendPostBuyFormResponse originally named doSendPostBuyFormResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoSendPostBuyFormResponse extends AllegroWsdlClass
{
    /**
     * The postBuyForm
     * @var AllegroStructPostBuyFormStruct
     */
    public $postBuyForm;
    /**
     * Constructor method for doSendPostBuyFormResponse
     * @see parent::__construct()
     * @param AllegroStructPostBuyFormStruct $_postBuyForm
     * @return AllegroStructDoSendPostBuyFormResponse
     */
    public function __construct($_postBuyForm = NULL)
    {
        parent::__construct(array('postBuyForm'=>$_postBuyForm),false);
    }
    /**
     * Get postBuyForm value
     * @return AllegroStructPostBuyFormStruct|null
     */
    public function getPostBuyForm()
    {
        return $this->postBuyForm;
    }
    /**
     * Set postBuyForm value
     * @param AllegroStructPostBuyFormStruct $_postBuyForm the postBuyForm
     * @return AllegroStructPostBuyFormStruct
     */
    public function setPostBuyForm($_postBuyForm)
    {
        return ($this->postBuyForm = $_postBuyForm);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoSendPostBuyFormResponse
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
