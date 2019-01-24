<?php
/**
 * File for class AllegroStructUserPayoutStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructUserPayoutStruct originally named UserPayoutStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructUserPayoutStruct extends AllegroWsdlClass
{
    /**
     * The payTransId
     * @var long
     */
    public $payTransId;
    /**
     * The payTransStatus
     * @var string
     */
    public $payTransStatus;
    /**
     * The payTransAmount
     * @var float
     */
    public $payTransAmount;
    /**
     * The payTransCreateDate
     * @var long
     */
    public $payTransCreateDate;
    /**
     * The payTransRecvDate
     * @var long
     */
    public $payTransRecvDate;
    /**
     * The payTransCancelDate
     * @var long
     */
    public $payTransCancelDate;
    /**
     * The payTransReport
     * @var string
     */
    public $payTransReport;
    /**
     * Constructor method for UserPayoutStruct
     * @see parent::__construct()
     * @param long $_payTransId
     * @param string $_payTransStatus
     * @param float $_payTransAmount
     * @param long $_payTransCreateDate
     * @param long $_payTransRecvDate
     * @param long $_payTransCancelDate
     * @param string $_payTransReport
     * @return AllegroStructUserPayoutStruct
     */
    public function __construct($_payTransId = NULL,$_payTransStatus = NULL,$_payTransAmount = NULL,$_payTransCreateDate = NULL,$_payTransRecvDate = NULL,$_payTransCancelDate = NULL,$_payTransReport = NULL)
    {
        parent::__construct(array('payTransId'=>$_payTransId,'payTransStatus'=>$_payTransStatus,'payTransAmount'=>$_payTransAmount,'payTransCreateDate'=>$_payTransCreateDate,'payTransRecvDate'=>$_payTransRecvDate,'payTransCancelDate'=>$_payTransCancelDate,'payTransReport'=>$_payTransReport),false);
    }
    /**
     * Get payTransId value
     * @return long|null
     */
    public function getPayTransId()
    {
        return $this->payTransId;
    }
    /**
     * Set payTransId value
     * @param long $_payTransId the payTransId
     * @return long
     */
    public function setPayTransId($_payTransId)
    {
        return ($this->payTransId = $_payTransId);
    }
    /**
     * Get payTransStatus value
     * @return string|null
     */
    public function getPayTransStatus()
    {
        return $this->payTransStatus;
    }
    /**
     * Set payTransStatus value
     * @param string $_payTransStatus the payTransStatus
     * @return string
     */
    public function setPayTransStatus($_payTransStatus)
    {
        return ($this->payTransStatus = $_payTransStatus);
    }
    /**
     * Get payTransAmount value
     * @return float|null
     */
    public function getPayTransAmount()
    {
        return $this->payTransAmount;
    }
    /**
     * Set payTransAmount value
     * @param float $_payTransAmount the payTransAmount
     * @return float
     */
    public function setPayTransAmount($_payTransAmount)
    {
        return ($this->payTransAmount = $_payTransAmount);
    }
    /**
     * Get payTransCreateDate value
     * @return long|null
     */
    public function getPayTransCreateDate()
    {
        return $this->payTransCreateDate;
    }
    /**
     * Set payTransCreateDate value
     * @param long $_payTransCreateDate the payTransCreateDate
     * @return long
     */
    public function setPayTransCreateDate($_payTransCreateDate)
    {
        return ($this->payTransCreateDate = $_payTransCreateDate);
    }
    /**
     * Get payTransRecvDate value
     * @return long|null
     */
    public function getPayTransRecvDate()
    {
        return $this->payTransRecvDate;
    }
    /**
     * Set payTransRecvDate value
     * @param long $_payTransRecvDate the payTransRecvDate
     * @return long
     */
    public function setPayTransRecvDate($_payTransRecvDate)
    {
        return ($this->payTransRecvDate = $_payTransRecvDate);
    }
    /**
     * Get payTransCancelDate value
     * @return long|null
     */
    public function getPayTransCancelDate()
    {
        return $this->payTransCancelDate;
    }
    /**
     * Set payTransCancelDate value
     * @param long $_payTransCancelDate the payTransCancelDate
     * @return long
     */
    public function setPayTransCancelDate($_payTransCancelDate)
    {
        return ($this->payTransCancelDate = $_payTransCancelDate);
    }
    /**
     * Get payTransReport value
     * @return string|null
     */
    public function getPayTransReport()
    {
        return $this->payTransReport;
    }
    /**
     * Set payTransReport value
     * @param string $_payTransReport the payTransReport
     * @return string
     */
    public function setPayTransReport($_payTransReport)
    {
        return ($this->payTransReport = $_payTransReport);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructUserPayoutStruct
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
