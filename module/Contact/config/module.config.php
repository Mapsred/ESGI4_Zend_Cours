<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Contact;

use Contact\Manager;
use Zend\Router\Http\Literal;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'contact' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/contact',
                    'defaults' => [
                        'controller' => Controller\ContactController::class,
                        'action' => 'contact',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\ContactController::class => Factory\ControllerManagerFactory::class,
        ],
    ],
    "service_manager" => [
        "factories" => [
            Manager\ContactManager::class => Factory\ManagerFactory::class,
        ]
    ],
    'view_manager' => [
        'template_map' => [
            'contact/contact/contact' => __DIR__ . '/../view/contact.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
