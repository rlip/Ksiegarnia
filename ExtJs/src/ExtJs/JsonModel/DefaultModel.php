<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 17.04.15
 * Time: 19:53
 */

namespace ExtJs\JsonModel;

use Application\Entity\EntityAbstract;
use Zend\Json\Json;
use Zend\Stdlib\ArrayUtils;
use Zend\View\Model\JsonModel;

class DefaultModel extends JsonModel
{

    protected $success;
    protected $result;
    protected $message;
    protected $total;

    public function __construct($success = null, $result = null, $message = null, $total = null)
    {
        $this->setSuccess($success);
        $this->setResult($result);
        $this->setMessage($message);
        $this->setTotal($total);
    }

    /**
     * @return mixed
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param mixed $success
     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    public function getProcessedResult(){
        $aData = $this->getResult();

        if ($aData instanceof \Traversable) {
            $aData = ArrayUtils::iteratorToArray($aData);
        }
        if(!is_array($aData)){
            return $aData;
        }
        $aResult = array();
        foreach($aData as $sKey => $oEntity)
        {
            /** @var EntityAbstract $oEntity */
            if($oEntity instanceof EntityAbstract){
                $aResult[] = $oEntity->serialize();
            } else {
                $aResult[$sKey] = $oEntity;
            }
        }
        return $aResult;
    }

    public function serialize()
    {
        $result = array(
            'success' => $this->getSuccess(),
            'message' => $this->getMessage(),
            'results' => $this->getProcessedResult(),
            'total' => $this->getTotal()
        );

        return Json::encode($result);
    }
} 