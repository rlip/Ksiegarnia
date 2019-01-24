<?php
/**
 * Created by PhpStorm.
 * User: Romek
 * Date: 17.04.15
 * Time: 19:53
 */

namespace ExtJs\JsonModel;

class ErrorModel extends DefaultModel
{
    public function __construct($message = null)
    {
        $this->setSuccess(false);
        $this->setMessage($message);
    }
}