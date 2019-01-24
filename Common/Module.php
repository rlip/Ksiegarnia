<?php
namespace Common;

use Zend\Cache\StorageFactory;

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
            'invokables' => array(
                'Common' => 'Common\Operation\CommonFunction',
            ),
            'factories' => array(
                'cache' => function () {
                        return StorageFactory::factory(array(
                                'adapter' => 'filesystem', //change me for another adapter
                                'options' => array(
                                    'cache_dir' => __DIR__ . '/../../data/cache/',
                                    'ttl' => 3600, //w sekundach
                                    'namespace' => __NAMESPACE__,
                                ),
                                'plugins' => array(
                                    'IgnoreUserAbort' => array(
                                        'exitOnAbort' => true
                                    ),
                                    'Serializer'
                                )
                            )
                        );
                    }
            )
        );
    }
}
