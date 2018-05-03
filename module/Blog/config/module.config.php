<?php
/**
 * Created by PhpStorm.
 * User: christmas
 * Date: 14/04/18
 * Time: 10:58
 */

namespace Blog;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            #Controller\BlogController::class => InvokableFactory::class,

        ],
    ],

    'router' => [
        'routes' => [
            'post' => [
                'type'     => 'segment',
                'options'  => [
                    'route'       => '/blog[/:action[/:id]]',
                    'constraints' => [
                        'action'  => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'      => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\BlogController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],

    'view_manager' => [
        'template_path_stack' => [
            'blog' => __DIR__."/../view",
        ],
    ],
];