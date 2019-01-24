<?php
namespace Admin\Controller;

use Admin\Operation\Template;
use ExtJs\Controller\ControllerAbstractExtJs;
use ExtJs\JsonModel\SuccessModel;

class TemplateController extends ControllerAbstractExtJs
{

    public function __construct()
    {
        parent:: __construct(new Template());
    }

    public function getTemplateDesignListAction()
    {
        return $this->_getOperation()->getTemplateDesignList();
    }

    public function deleteTemplateDesignListAction()
    {
        return $this->_getOperation()->deleteTemplateDesignList();
    }

    public function getTemplateDesignFromAction()
    {
        return $this->_getOperation()->getTemplateDesignFrom();
    }

    public function saveTemplateDesignFromAction()
    {
        return $this->_getOperation()->saveTemplateDesignFrom();
    }
    public function getTemplateShipmentListAction()
    {
        return $this->_getOperation()->getTemplateShipmentList();
    }

    public function deleteTemplateShipmentListAction()
    {
        return $this->_getOperation()->deleteTemplateShipmentList();
    }

    public function getTemplateShipmentFromAction()
    {
        return $this->_getOperation()->getTemplateShipmentFrom();
    }

    public function saveTemplateShipmentFromAction()
    {
        return $this->_getOperation()->saveTemplateShipmentFrom();
    }
}
