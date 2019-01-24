<?php
/**
 * File for class AllegroStructItemPaymentOptions
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructItemPaymentOptions originally named ItemPaymentOptions
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructItemPaymentOptions extends AllegroWsdlClass
{
    /**
     * The payOptionTransfer
     * @var int
     */
    public $payOptionTransfer;
    /**
     * The payOptionOnDelivery
     * @var int
     */
    public $payOptionOnDelivery;
    /**
     * The payOptionAllegroPay
     * @var int
     */
    public $payOptionAllegroPay;
    /**
     * The payOptionSeeDesc
     * @var int
     */
    public $payOptionSeeDesc;
    /**
     * The payOptionPayu
     * @var int
     */
    public $payOptionPayu;
    /**
     * The payOptionEscrow
     * @var int
     */
    public $payOptionEscrow;
    /**
     * The payOptionQiwi
     * @var int
     */
    public $payOptionQiwi;
    /**
     * Constructor method for ItemPaymentOptions
     * @see parent::__construct()
     * @param int $_payOptionTransfer
     * @param int $_payOptionOnDelivery
     * @param int $_payOptionAllegroPay
     * @param int $_payOptionSeeDesc
     * @param int $_payOptionPayu
     * @param int $_payOptionEscrow
     * @param int $_payOptionQiwi
     * @return AllegroStructItemPaymentOptions
     */
    public function __construct($_payOptionTransfer = NULL,$_payOptionOnDelivery = NULL,$_payOptionAllegroPay = NULL,$_payOptionSeeDesc = NULL,$_payOptionPayu = NULL,$_payOptionEscrow = NULL,$_payOptionQiwi = NULL)
    {
        parent::__construct(array('payOptionTransfer'=>$_payOptionTransfer,'payOptionOnDelivery'=>$_payOptionOnDelivery,'payOptionAllegroPay'=>$_payOptionAllegroPay,'payOptionSeeDesc'=>$_payOptionSeeDesc,'payOptionPayu'=>$_payOptionPayu,'payOptionEscrow'=>$_payOptionEscrow,'payOptionQiwi'=>$_payOptionQiwi),false);
    }
    /**
     * Get payOptionTransfer value
     * @return int|null
     */
    public function getPayOptionTransfer()
    {
        return $this->payOptionTransfer;
    }
    /**
     * Set payOptionTransfer value
     * @param int $_payOptionTransfer the payOptionTransfer
     * @return int
     */
    public function setPayOptionTransfer($_payOptionTransfer)
    {
        return ($this->payOptionTransfer = $_payOptionTransfer);
    }
    /**
     * Get payOptionOnDelivery value
     * @return int|null
     */
    public function getPayOptionOnDelivery()
    {
        return $this->payOptionOnDelivery;
    }
    /**
     * Set payOptionOnDelivery value
     * @param int $_payOptionOnDelivery the payOptionOnDelivery
     * @return int
     */
    public function setPayOptionOnDelivery($_payOptionOnDelivery)
    {
        return ($this->payOptionOnDelivery = $_payOptionOnDelivery);
    }
    /**
     * Get payOptionAllegroPay value
     * @return int|null
     */
    public function getPayOptionAllegroPay()
    {
        return $this->payOptionAllegroPay;
    }
    /**
     * Set payOptionAllegroPay value
     * @param int $_payOptionAllegroPay the payOptionAllegroPay
     * @return int
     */
    public function setPayOptionAllegroPay($_payOptionAllegroPay)
    {
        return ($this->payOptionAllegroPay = $_payOptionAllegroPay);
    }
    /**
     * Get payOptionSeeDesc value
     * @return int|null
     */
    public function getPayOptionSeeDesc()
    {
        return $this->payOptionSeeDesc;
    }
    /**
     * Set payOptionSeeDesc value
     * @param int $_payOptionSeeDesc the payOptionSeeDesc
     * @return int
     */
    public function setPayOptionSeeDesc($_payOptionSeeDesc)
    {
        return ($this->payOptionSeeDesc = $_payOptionSeeDesc);
    }
    /**
     * Get payOptionPayu value
     * @return int|null
     */
    public function getPayOptionPayu()
    {
        return $this->payOptionPayu;
    }
    /**
     * Set payOptionPayu value
     * @param int $_payOptionPayu the payOptionPayu
     * @return int
     */
    public function setPayOptionPayu($_payOptionPayu)
    {
        return ($this->payOptionPayu = $_payOptionPayu);
    }
    /**
     * Get payOptionEscrow value
     * @return int|null
     */
    public function getPayOptionEscrow()
    {
        return $this->payOptionEscrow;
    }
    /**
     * Set payOptionEscrow value
     * @param int $_payOptionEscrow the payOptionEscrow
     * @return int
     */
    public function setPayOptionEscrow($_payOptionEscrow)
    {
        return ($this->payOptionEscrow = $_payOptionEscrow);
    }
    /**
     * Get payOptionQiwi value
     * @return int|null
     */
    public function getPayOptionQiwi()
    {
        return $this->payOptionQiwi;
    }
    /**
     * Set payOptionQiwi value
     * @param int $_payOptionQiwi the payOptionQiwi
     * @return int
     */
    public function setPayOptionQiwi($_payOptionQiwi)
    {
        return ($this->payOptionQiwi = $_payOptionQiwi);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructItemPaymentOptions
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
