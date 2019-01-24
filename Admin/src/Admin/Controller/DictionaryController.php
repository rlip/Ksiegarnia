<?php
namespace Admin\Controller;

use Admin\Operation\Dictionary;
use ExtJs\Controller\ControllerAbstractExtJs;

class DictionaryController extends ControllerAbstractExtJs
{

    public function __construct()
    {
        parent:: __construct(new Dictionary());
    }

    public function getDictionaryAction()
    {
        return $this->_getOperation()->getDictionary();
    }
}
