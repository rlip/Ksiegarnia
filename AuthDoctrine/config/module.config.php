<?php

namespace AuthDoctrine;

use Application\Entity\EntityUser;

return array(
	'controllers' => array(
        'invokables' => array(
            'AuthDoctrine\Controller\Index' => 'AuthDoctrine\Controller\IndexController',
            'AuthDoctrine\Controller\Registration' => 'AuthDoctrine\Controller\RegistrationController',
            'AuthDoctrine\Controller\Admin' => 'AuthDoctrine\Controller\AdminController',			
        ),
    ),	
    'router' => array(
        'routes' => array(
			'auth-doctrine' => array(
				'type'    => 'Literal',
				'options' => array(
					'route'    => '/auth-doctrine',
					'defaults' => array(
						'__NAMESPACE__' => 'AuthDoctrine\Controller',
						'controller'    => 'Index',
						'action'        => 'index',
					),
				),
				'may_terminate' => true,
				'child_routes' => array(
					'default' => array(
						'type'    => 'Segment',
						'options' => array(
							'route'    => '/[:controller[/:action[/:id]]]',
							'constraints' => array(
								'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
								'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
							),
							'defaults' => array(
							),
						),
					),
				),
			),
		),
	),
    'view_manager' => array(
        'template_path_stack' => array(
            'auth-doctrine' => __DIR__ . '/../view'
        ),
		'display_exceptions' => true,
    ),
    'doctrine' => array(
        'authentication' => array(
            'orm_default' => array(
                'object_manager' => 'Doctrine\ORM\EntityManager',
                'identity_class' => 'Application\Entity\EntityUser',
                'identity_property' => 'userName',
                'credential_property' => 'userPassword',
                'credential_callable' => function(EntityUser $user, $passwordGiven) {
					if ($user->getUserPassword() == md5($user->getUserSalt() . $passwordGiven) &&
						$user->getUserActive() == 1) {
						return true;
					}
					else {
						return false;
					}
                },
            ),
        ),
    ),
);