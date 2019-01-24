<?php
/**
 * File for class AllegroStructFinishFailureStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructFinishFailureStruct originally named FinishFailureStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructFinishFailureStruct extends AllegroWsdlClass
{
    /**
     * The finishItemId
     * @var long
     */
    public $finishItemId;
    /**
     * The finishErrorCode
     * @var string
     */
    public $finishErrorCode;
    /**
     * The finishErrorMessage
     * @var string
     */
    public $finishErrorMessage;
    /**
     * Constructor method for FinishFailureStruct
     * @see parent::__construct()
     * @param long $_finishItemId
     * @param string $_finishErrorCode
     * @param string $_finishErrorMessage
     * @return AllegroStructFinishFailureStruct
     */
    public function __construct($_finishItemId = NULL,$_finishErrorCode = NULL,$_finishErrorMessage = NULL)
    {
        parent::__construct(array('finishItemId'=>$_finishItemId,'finishErrorCode'=>$_finishErrorCode,'finishErrorMessage'=>$_finishErrorMessage),false);
    }
    /**
     * Get finishItemId value
     * @return long|null
     */
    public function getFinishItemId()
    {
        return $this->finishItemId;
    }
    /**
     * Set finishItemId value
     * @param long $_finishItemId the finishItemId
     * @return long
     */
    public function setFinishItemId($_finishItemId)
    {
        return ($this->finishItemId = $_finishItemId);
    }
    /**
     * Get finishErrorCode value
     * @return string|null
     */
    public function getFinishErrorCode()
    {
        return $this->finishErrorCode;
    }
    /**
     * Set finishErrorCode value
     * @param string $_finishErrorCode the finishErrorCode
     * @return string
     */
    public function setFinishErrorCode($_finishErrorCode)
    {
        return ($this->finishErrorCode = $_finishErrorCode);
    }
    /**
     * Get finishErrorMessage value
     * @return string|null
     */
    public function getFinishErrorMessage()
    {
        return $this->finishErrorMessage;
    }
    /**
     * Set finishErrorMessage value
     * @param string $_finishErrorMessage the finishErrorMessage
     * @return string
     */
    public function setFinishErrorMessage($_finishErrorMessage)
    {
        return ($this->finishErrorMessage = $_finishErrorMessage);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructFinishFailureStruct
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
