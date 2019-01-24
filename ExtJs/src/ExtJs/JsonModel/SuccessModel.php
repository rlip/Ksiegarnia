<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 17.04.15
 * Time: 19:53
 */

namespace ExtJs\JsonModel;

class SuccessModel extends DefaultModel
{
    public function __construct($result = null, $total = null)
    {
        $this->setSuccess(true);
        if($result){
            $this->setResult($result);
        }
        if($total){
            $this->setTotal($total);
        }
    }
}