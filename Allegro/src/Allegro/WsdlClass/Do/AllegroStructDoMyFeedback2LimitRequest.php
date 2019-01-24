<?php
/**
 * File for class AllegroStructDoMyFeedback2LimitRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoMyFeedback2LimitRequest originally named DoMyFeedback2LimitRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoMyFeedback2LimitRequest extends AllegroWsdlClass
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
     * The packageElement
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $packageElement;
    /**
     * Constructor method for DoMyFeedback2LimitRequest
     * @see parent::__construct()
     * @param string $_sessionHandle
     * @param string $_feedbackType
     * @param int $_offset
     * @param int $_desc
     * @param AllegroStructArrayOfLong $_itemsArray
     * @param int $_packageElement
     * @return AllegroStructDoMyFeedback2LimitRequest
     */
    public function __construct($_sessionHandle = NULL,$_feedbackType = NULL,$_offset = NULL,$_desc = NULL,$_itemsArray = NULL,$_packageElement = NULL)
    {
        parent::__construct(array('sessionHandle'=>$_sessionHandle,'feedbackType'=>$_feedbackType,'offset'=>$_offset,'desc'=>$_desc,'itemsArray'=>($_itemsArray instanceof AllegroStructArrayOfLong)?$_itemsArray:new AllegroStructArrayOfLong($_itemsArray),'packageElement'=>$_packageElement),false);
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
     * Get packageElement value
     * @return int|null
     */
    public function getPackageElement()
    {
        return $this->packageElement;
    }
    /**
     * Set packageElement value
     * @param int $_packageElement the packageElement
     * @return int
     */
    public function setPackageElement($_packageElement)
    {
        return ($this->packageElement = $_packageElement);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoMyFeedback2LimitRequest
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
