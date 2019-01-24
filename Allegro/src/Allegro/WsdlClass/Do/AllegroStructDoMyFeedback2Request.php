<?php
/**
 * File for class AllegroStructDoMyFeedback2Request
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoMyFeedback2Request originally named DoMyFeedback2Request
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoMyFeedback2Request extends AllegroWsdlClass
{
    /**
     * The sessionHandle
     * @var string
     */
    public $sessionHandle;
    /**
     * The feedbackType
     * @var string
     */
    public $feedbackType;
    /**
     * The offset
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $offset;
    /**
     * The desc
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $desc;
    /**
     * The itemsArray
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AllegroStructArrayOfLong
     */
    public $itemsArray;
    /**
     * Constructor method for DoMyFeedback2Request
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param string $_feedbackType
     * @param int $_offset
     * @param int $_desc
     * @param AllegroStructArrayOfLong $_itemsArray
     * @return AllegroStructDoMyFeedback2Request
     */
    public function __construct($_sessionHandle = NULL,$_feedbackType = NULL,$_offset = NULL,$_desc = NULL,$_itemsArray = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'feedbackType'=>$_feedbackType,'offset'=>$_offset,'desc'=>$_desc,'itemsArray'=>($_itemsArray instanceof AllegroStructArrayOfLong)?$_itemsArray:new AllegroStructArrayOfLong($_itemsArray)),false);
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
     * Get feedbackType value
     * @return string|null
     */
    public function getFeedbackType()
    {
        return $this->feedbackType;
    }
    /**
     * Set feedbackType value
     * @param string $_feedbackType the feedbackType
     * @return string
     */
    public function setFeedbackType($_feedbackType)
    {
        return ($this->feedbackType = $_feedbackType);
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
     * Get desc value
     * @return int|null
     */
    public function getDesc()
    {
        return $this->desc;
    }
    /**
     * Set desc value
     * @param int $_desc the desc
     * @return int
     */
    public function setDesc($_desc)
    {
        return ($this->desc = $_desc);
    }
    /**
     * Get itemsArray value
     * @return AllegroStructArrayOfLong|null
     */
    public function getItemsArray()
    {
        return $this->itemsArray;
    }
    /**
     * Set itemsArray value
     * @param AllegroStructArrayOfLong $_itemsArray the itemsArray
     * @return AllegroStructArrayOfLong
     */
    public function setItemsArray($_itemsArray)
    {
        return ($this->itemsArray = $_itemsArray);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoMyFeedback2Request
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
