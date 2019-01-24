<?php
namespace Admin\Controller;

use Admin\Operation\Category;
use Doctrine\ORM\AbstractQuery;
use ExtJs\Controller\ControllerAbstractExtJs;
use ExtJs\JsonModel\SuccessModel;

class CategoryController extends ControllerAbstractExtJs
{

    public function __construct()
    {
        parent:: __construct(new Category());
    }


    public function getCategoryMapAction()
    {
        $oModel = new SuccessModel();
        $oModel->setResult($this->_getOperation()->getCategoryMap());
        return $oModel;
    }

    public function saveCategoryMapAction(){
        $oModel = new SuccessModel();
        $oModel->setResult($this->_getOperation()->saveCategoryMap());
        return $oModel;
    }

    public function getCategoryAllegroAction()
    {
        $oModel = new SuccessModel();
        $oModel->setResult($this->_getOperation()->getCategoryAllegro());
        return $oModel;
    }

}
