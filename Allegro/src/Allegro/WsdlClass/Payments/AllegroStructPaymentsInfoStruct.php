<?php
/**
 * File for class AllegroStructPaymentsInfoStruct
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructPaymentsInfoStruct originally named PaymentsInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructPaymentsInfoStruct extends AllegroWsdlClass
{
    /**
     * The paymentsBalance
     * @var float
     */
    public $paymentsBalance;
    /**
     * The paymentsBankAccount
     * @var string
     */
    public $paymentsBankAccount;
    /**
     * The paymentsUserData
     * @var AllegroStructPaymentsUserDataStruct
     */
    public $paymentsUserData;
    /**
     * The paymentsPayout
     * @var AllegroStructPaymentsPayoutStruct
     */
    public $paymentsPayout;
    /**
     * The paymentsNotifications
     * @var int
     */
    public $paymentsNotifications;
    /**
     * Constructor method for PaymentsInfoStruct
     * @see parent::__construct()
     * @param float $_paymentsBalance
     * @param string $_paymentsBankAccount
     * @param AllegroStructPaymentsUserDataStruct $_paymentsUserData
     * @param AllegroStructPaymentsPayoutStruct $_paymentsPayout
     * @param int $_paymentsNotifications
     * @return AllegroStructPaymentsInfoStruct
     */
    public function __construct($_paymentsBalance = NULL,$_paymentsBankAccount = NULL,$_paymentsUserData = NULL,$_paymentsPayout = NULL,$_paymentsNotifications = NULL)
    {
        parent::__construct(array('paymentsBalance'=>$_paymentsBalance,'paymentsBankAccount'=>$_paymentsBankAccount,'paymentsUserData'=>$_paymentsUserData,'paymentsPayout'=>$_paymentsPayout,'paymentsNotifications'=>$_paymentsNotifications),false);
    }
    /**
     * Get paymentsBalance value
     * @return float|null
     */
    public function getPaymentsBalance()
    {
        return $this->paymentsBalance;
    }
    /**
     * Set paymentsBalance value
     * @param float $_paymentsBalance the paymentsBalance
     * @return float
     */
    public function setPaymentsBalance($_paymentsBalance)
    {
        return ($this->paymentsBalance = $_paymentsBalance);
    }
    /**
     * Get paymentsBankAccount value
     * @return string|null
     */
    public function getPaymentsBankAccount()
    {
        return $this->paymentsBankAccount;
    }
    /**
     * Set paymentsBankAccount value
     * @param string $_paymentsBankAccount the paymentsBankAccount
     * @return string
     */
    public function setPaymentsBankAccount($_paymentsBankAccount)
    {
        return ($this->paymentsBankAccount = $_paymentsBankAccount);
    }
    /**
     * Get paymentsUserData value
     * @return AllegroStructPaymentsUserDataStruct|null
     */
    public function getPaymentsUserData()
    {
        return $this->paymentsUserData;
    }
    /**
     * Set paymentsUserData value
     * @param AllegroStructPaymentsUserDataStruct $_paymentsUserData the paymentsUserData
     * @return AllegroStructPaymentsUserDataStruct
     */
    public function setPaymentsUserData($_paymentsUserData)
    {
        return ($this->paymentsUserData = $_paymentsUserData);
    }
    /**
     * Get paymentsPayout value
     * @return AllegroStructPaymentsPayoutStruct|null
     */
    public function getPaymentsPayout()
    {
        return $this->paymentsPayout;
    }
    /**
     * Set paymentsPayout value
     * @param AllegroStructPaymentsPayoutStruct $_paymentsPayout the paymentsPayout
     * @return AllegroStructPaymentsPayoutStruct
     */
    public function setPaymentsPayout($_paymentsPayout)
    {
        return ($this->paymentsPayout = $_paymentsPayout);
    }
    /**
     * Get paymentsNotifications value
     * @return int|null
     */
    public function getPaymentsNotifications()
    {
        return $this->paymentsNotifications;
    }
    /**
     * Set paymentsNotifications value
     * @param int $_paymentsNotifications the paymentsNotifications
     * @return int
     */
    public function setPaymentsNotifications($_paymentsNotifications)
    {
        return ($this->paymentsNotifications = $_paymentsNotifications);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructPaymentsInfoStruct
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
