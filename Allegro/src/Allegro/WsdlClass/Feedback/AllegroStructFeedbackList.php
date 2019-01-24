<?php
/**
 * File for class AllegroStructFeedbackList
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructFeedbackList originally named FeedbackList
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructFeedbackList extends AllegroWsdlClass
{
    /**
     * The fId
     * @var int
     */
    public $fId;
    /**
     * The fItemId
     * @var long
     */
    public $fItemId;
    /**
     * The fFromId
     * @var int
     */
    public $fFromId;
    /**
     * The fToId
     * @var int
     */
    public $fToId;
    /**
     * The fDate
     * @var long
     */
    public $fDate;
    /**
     * The fType
     * @var string
     */
    public $fType;
    /**
     * The fDesc
     * @var string
     */
    public $fDesc;
    /**
     * The fCorrectDate
     * @var long
     */
    public $fCorrectDate;
    /**
     * The fCorrectText
     * @var string
     */
    public $fCorrectText;
    /**
     * The fReceiverType
     * @var string
     */
    public $fReceiverType;
    /**
     * The fUserLogin
     * @var string
     */
    public $fUserLogin;
    /**
     * The fUserRating
     * @var string
     */
    public $fUserRating;
    /**
     * The fUserCountry
     * @var string
     */
    public $fUserCountry;
    /**
     * The fUserBlocked
     * @var int
     */
    public $fUserBlocked;
    /**
     * The fUserSseller
     * @var int
     */
    public $fUserSseller;
    /**
     * The fCancelled
     * @var long
     */
    public $fCancelled;
    /**
     * Constructor method for FeedbackList
     * @see parent::__construct()
     * @param int $_fId
     * @param long $_fItemId
     * @param int $_fFromId
     * @param int $_fToId
     * @param long $_fDate
     * @param string $_fType
     * @param string $_fDesc
     * @param long $_fCorrectDate
     * @param string $_fCorrectText
     * @param string $_fReceiverType
     * @param string $_fUserLogin
     * @param string $_fUserRating
     * @param string $_fUserCountry
     * @param int $_fUserBlocked
     * @param int $_fUserSseller
     * @param long $_fCancelled
     * @return AllegroStructFeedbackList
     */
    public function __construct($_fId = NULL,$_fItemId = NULL,$_fFromId = NULL,$_fToId = NULL,$_fDate = NULL,$_fType = NULL,$_fDesc = NULL,$_fCorrectDate = NULL,$_fCorrectText = NULL,$_fReceiverType = NULL,$_fUserLogin = NULL,$_fUserRating = NULL,$_fUserCountry = NULL,$_fUserBlocked = NULL,$_fUserSseller = NULL,$_fCancelled = NULL)
    {
        parent::__construct(array('fId'=>$_fId,'fItemId'=>$_fItemId,'fFromId'=>$_fFromId,'fToId'=>$_fToId,'fDate'=>$_fDate,'fType'=>$_fType,'fDesc'=>$_fDesc,'fCorrectDate'=>$_fCorrectDate,'fCorrectText'=>$_fCorrectText,'fReceiverType'=>$_fReceiverType,'fUserLogin'=>$_fUserLogin,'fUserRating'=>$_fUserRating,'fUserCountry'=>$_fUserCountry,'fUserBlocked'=>$_fUserBlocked,'fUserSseller'=>$_fUserSseller,'fCancelled'=>$_fCancelled),false);
    }
    /**
     * Get fId value
     * @return int|null
     */
    public function getFId()
    {
        return $this->fId;
    }
    /**
     * Set fId value
     * @param int $_fId the fId
     * @return int
     */
    public function setFId($_fId)
    {
        return ($this->fId = $_fId);
    }
    /**
     * Get fItemId value
     * @return long|null
     */
    public function getFItemId()
    {
        return $this->fItemId;
    }
    /**
     * Set fItemId value
     * @param long $_fItemId the fItemId
     * @return long
     */
    public function setFItemId($_fItemId)
    {
        return ($this->fItemId = $_fItemId);
    }
    /**
     * Get fFromId value
     * @return int|null
     */
    public function getFFromId()
    {
        return $this->fFromId;
    }
    /**
     * Set fFromId value
     * @param int $_fFromId the fFromId
     * @return int
     */
    public function setFFromId($_fFromId)
    {
        return ($this->fFromId = $_fFromId);
    }
    /**
     * Get fToId value
     * @return int|null
     */
    public function getFToId()
    {
        return $this->fToId;
    }
    /**
     * Set fToId value
     * @param int $_fToId the fToId
     * @return int
     */
    public function setFToId($_fToId)
    {
        return ($this->fToId = $_fToId);
    }
    /**
     * Get fDate value
     * @return long|null
     */
    public function getFDate()
    {
        return $this->fDate;
    }
    /**
     * Set fDate value
     * @param long $_fDate the fDate
     * @return long
     */
    public function setFDate($_fDate)
    {
        return ($this->fDate = $_fDate);
    }
    /**
     * Get fType value
     * @return string|null
     */
    public function getFType()
    {
        return $this->fType;
    }
    /**
     * Set fType value
     * @param string $_fType the fType
     * @return string
     */
    public function setFType($_fType)
    {
        return ($this->fType = $_fType);
    }
    /**
     * Get fDesc value
     * @return string|null
     */
    public function getFDesc()
    {
        return $this->fDesc;
    }
    /**
     * Set fDesc value
     * @param string $_fDesc the fDesc
     * @return string
     */
    public function setFDesc($_fDesc)
    {
        return ($this->fDesc = $_fDesc);
    }
    /**
     * Get fCorrectDate value
     * @return long|null
     */
    public function getFCorrectDate()
    {
        return $this->fCorrectDate;
    }
    /**
     * Set fCorrectDate value
     * @param long $_fCorrectDate the fCorrectDate
     * @return long
     */
    public function setFCorrectDate($_fCorrectDate)
    {
        return ($this->fCorrectDate = $_fCorrectDate);
    }
    /**
     * Get fCorrectText value
     * @return string|null
     */
    public function getFCorrectText()
    {
        return $this->fCorrectText;
    }
    /**
     * Set fCorrectText value
     * @param string $_fCorrectText the fCorrectText
     * @return string
     */
    public function setFCorrectText($_fCorrectText)
    {
        return ($this->fCorrectText = $_fCorrectText);
    }
    /**
     * Get fReceiverType value
     * @return string|null
     */
    public function getFReceiverType()
    {
        return $this->fReceiverType;
    }
    /**
     * Set fReceiverType value
     * @param string $_fReceiverType the fReceiverType
     * @return string
     */
    public function setFReceiverType($_fReceiverType)
    {
        return ($this->fReceiverType = $_fReceiverType);
    }
    /**
     * Get fUserLogin value
     * @return string|null
     */
    public function getFUserLogin()
    {
        return $this->fUserLogin;
    }
    /**
     * Set fUserLogin value
     * @param string $_fUserLogin the fUserLogin
     * @return string
     */
    public function setFUserLogin($_fUserLogin)
    {
        return ($this->fUserLogin = $_fUserLogin);
    }
    /**
     * Get fUserRating value
     * @return string|null
     */
    public function getFUserRating()
    {
        return $this->fUserRating;
    }
    /**
     * Set fUserRating value
     * @param string $_fUserRating the fUserRating
     * @return string
     */
    public function setFUserRating($_fUserRating)
    {
        return ($this->fUserRating = $_fUserRating);
    }
    /**
     * Get fUserCountry value
     * @return string|null
     */
    public function getFUserCountry()
    {
        return $this->fUserCountry;
    }
    /**
     * Set fUserCountry value
     * @param string $_fUserCountry the fUserCountry
     * @return string
     */
    public function setFUserCountry($_fUserCountry)
    {
        return ($this->fUserCountry = $_fUserCountry);
    }
    /**
     * Get fUserBlocked value
     * @return int|null
     */
    public function getFUserBlocked()
    {
        return $this->fUserBlocked;
    }
    /**
     * Set fUserBlocked value
     * @param int $_fUserBlocked the fUserBlocked
     * @return int
     */
    public function setFUserBlocked($_fUserBlocked)
    {
        return ($this->fUserBlocked = $_fUserBlocked);
    }
    /**
     * Get fUserSseller value
     * @return int|null
     */
    public function getFUserSseller()
    {
        return $this->fUserSseller;
    }
    /**
     * Set fUserSseller value
     * @param int $_fUserSseller the fUserSseller
     * @return int
     */
    public function setFUserSseller($_fUserSseller)
    {
        return ($this->fUserSseller = $_fUserSseller);
    }
    /**
     * Get fCancelled value
     * @return long|null
     */
    public function getFCancelled()
    {
        return $this->fCancelled;
    }
    /**
     * Set fCancelled value
     * @param long $_fCancelled the fCancelled
     * @return long
     */
    public function setFCancelled($_fCancelled)
    {
        return ($this->fCancelled = $_fCancelled);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructFeedbackList
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
