<?php
namespace ExtJs;

use ExtJs\JsonModel\DefaultModel;
use ExtJs\JsonModel\ErrorModel;
use ExtJs\JsonModel\SuccessModel;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'ExtJsDefaultModel' => function ($serviceManager) {
                        return new DefaultModel();
                    },
                'ExtJsErrorModel' => function ($serviceManager) {
                        return new ErrorModel();
                    },
                'ExtJsSuccessModel' => function ($serviceManager) {
                        return new SuccessModel();
                    },
            ),
        );
    }
}
