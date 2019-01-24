<?php
namespace Import;

use Import\Image\ImageFactory;
use Import\Import\ImportFactory;

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
        /** @noinspection PhpUnusedParameterInspection */
        return array(
            'factories' => array(
                'ImportFactory' => function ($serviceManager) {
                        return new ImportFactory();
                    }
            ),
            'invokables' => array(
                'ImageImporter' => 'Import\Image\ImageImporter',
            ),
        );
    }
}
