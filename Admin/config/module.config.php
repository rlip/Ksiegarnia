<?php
namespace Admin;

return array(
    'router' => array(
        'routes' => array(
            'adminLogin' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/admin-login',
                    'defaults' => array(
                        'controller' => 'Admin\Controller\Login',
                        'action' => 'login',
                    ),
                )
            ),
            'admin' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/admin',
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:controller]/[:action]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                                'action' => 'index',
                                'controller' => 'index'
                            ),
                        ),
                    ),
                ),
            ),
        )
    ),
    'controllers' => array(
        'invokables' => array(
            'Login' => 'Admin\Controller\LoginController',
            'Category' => 'Admin\Controller\CategoryController',
            'Template' => 'Admin\Controller\TemplateController',
            'Auction' => 'Admin\Controller\AuctionController',
            'Dictionary' => 'Admin\Controller\DictionaryController',
        ),
    ),
    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
);