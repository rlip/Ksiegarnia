<?php
/**
 * File for class AllegroStructMessageToBuyerStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructMessageToBuyerStruct originally named MessageToBuyerStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructMessageToBuyerStruct extends AllegroWsdlClass
{
    /**
     * The messageSellerId
     * @var int
     */
    public $messageSellerId;
    /**
     * The messageContent
     * @var string
     */
    public $messageContent;
    /**
     * Constructor method for MessageToBuyerStruct
     * @see parent::__construct()
     * @param int $_messageSellerId
     * @param string $_messageContent
     * @return AllegroStructMessageToBuyerStruct
     */
    public function __construct($_messageSellerId = NULL,$_messageContent = NULL)
    {
        parent::__construct(array('messageSellerId'=>$_messageSellerId,'messageContent'=>$_messageContent),false);
    }
    /**
     * Get messageSellerId value
     * @return int|null
     */
    public function getMessageSellerId()
    {
        return $this->messageSellerId;
    }
    /**
     * Set messageSellerId value
     * @param int $_messageSellerId the messageSellerId
     * @return int
     */
    public function setMessageSellerId($_messageSellerId)
    {
        return ($this->messageSellerId = $_messageSellerId);
    }
    /**
     * Get messageContent value
     * @return string|null
     */
    public function getMessageContent()
    {
        return $this->messageContent;
    }
    /**
     * Set messageContent value
     * @param string $_messageContent the messageContent
     * @return string
     */
    public function setMessageContent($_messageContent)
    {
        return ($this->messageContent = $_messageContent);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructMessageToBuyerStruct
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
