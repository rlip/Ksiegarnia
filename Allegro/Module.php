<?php
namespace Allegro;

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
            'invokables' => array(
                'AllegroClient' => 'Allegro\Operation\AllegroClient'
            )
        );
    }
}
