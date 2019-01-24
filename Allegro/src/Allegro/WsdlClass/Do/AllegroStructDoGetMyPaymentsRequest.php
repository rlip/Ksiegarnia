<?php
/**
 * File for class AllegroStructDoGetMyPaymentsRequest
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
/**
 * This class stands for AllegroStructDoGetMyPaymentsRequest originally named DoGetMyPaymentsRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://webapi.allegro.pl/service.php?wsdl}
 * @package Allegro
 * @subpackage Structs
 * @date 2015-04-14
 * @author Roman Lip
 * @version 1
 */
class AllegroStructDoGetMyPaymentsRequest extends AllegroWsdlClass
{
    /**
     * The sessionId
     * @var string
     */
    public $sessionId;
    /**
     * The sellerId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $sellerId;
    /**
     * The itemId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $itemId;
    /**
     * The paymentTimeFrom
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $paymentTimeFrom;
    /**
     * The paymentTimeTo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $paymentTimeTo;
    /**
     * The pageSize
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $pageSize;
    /**
     * The pageNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $pageNumber;
    /**
     * Constructor method for DoGetMyPaymentsRequest
     * @see parent::__construct()
     * @param string $_sessionId
     * @param int $_sellerId
     * @param long $_itemId
     * @param long $_paymentTimeFrom
     * @param long $_paymentTimeTo
     * @param int $_pageSize
     * @param int $_pageNumber
     * @return AllegroStructDoGetMyPaymentsRequest
     */
    public function __construct($_sessionId = NULL,$_sellerId = NULL,$_itemId = NULL,$_paymentTimeFrom = NULL,$_paymentTimeTo = NULL,$_pageSize = NULL,$_pageNumber = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'sellerId'=>$_sellerId,'itemId'=>$_itemId,'paymentTimeFrom'=>$_paymentTimeFrom,'paymentTimeTo'=>$_paymentTimeTo,'pageSize'=>$_pageSize,'pageNumber'=>$_pageNumber),false);
    }
    /**
     * Get sessionId value
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param string $_sessionId the sessionId
     * @return string
     */
    public function setSessionId($_sessionId)
    {
        return ($this->sessionId = $_sessionId);
    }
    /**
     * Get sellerId value
     * @return int|null
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }
    /**
     * Set sellerId value
     * @param int $_sellerId the sellerId
     * @return int
     */
    public function setSellerId($_sellerId)
    {
        return ($this->sellerId = $_sellerId);
    }
    /**
     * Get itemId value
     * @return long|null
     */
    public function getItemId()
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param long $_itemId the itemId
     * @return long
     */
    public function setItemId($_itemId)
    {
        return ($this->itemId = $_itemId);
    }
    /**
     * Get paymentTimeFrom value
     * @return long|null
     */
    public function getPaymentTimeFrom()
    {
        return $this->paymentTimeFrom;
    }
    /**
     * Set paymentTimeFrom value
     * @param long $_paymentTimeFrom the paymentTimeFrom
     * @return long
     */
    public function setPaymentTimeFrom($_paymentTimeFrom)
    {
        return ($this->paymentTimeFrom = $_paymentTimeFrom);
    }
    /**
     * Get paymentTimeTo value
     * @return long|null
     */
    public function getPaymentTimeTo()
    {
        return $this->paymentTimeTo;
    }
    /**
     * Set paymentTimeTo value
     * @param long $_paymentTimeTo the paymentTimeTo
     * @return long
     */
    public function setPaymentTimeTo($_paymentTimeTo)
    {
        return ($this->paymentTimeTo = $_paymentTimeTo);
    }
    /**
     * Get pageSize value
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }
    /**
     * Set pageSize value
     * @param int $_pageSize the pageSize
     * @return int
     */
    public function setPageSize($_pageSize)
    {
        return ($this->pageSize = $_pageSize);
    }
    /**
     * Get pageNumber value
     * @return int|null
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }
    /**
     * Set pageNumber value
     * @param int $_pageNumber the pageNumber
     * @return int
     */
    public function setPageNumber($_pageNumber)
    {
        return ($this->pageNumber = $_pageNumber);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AllegroWsdlClass::__set_state()
     * @uses AllegroWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AllegroStructDoGetMyPaymentsRequest
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
