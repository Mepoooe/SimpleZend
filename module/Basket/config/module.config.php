<?php

return array(
   
    'controllers' => array(
        'invokables' => array(
            'Basket\Controller\Basket' => 'Basket\Controller\BasketController',
        ),
    ),
 
    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'basket' => array(
                'type'    => 'literal',
                'options' => array(
                    'route'    => '/basket',
                    'defaults' => array(
                        'controller' => 'Basket\Controller\Basket',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
 
    'view_manager' => array(
        'template_path_stack' => array(
            'basket' => __DIR__ . '/../view',
        ),
    ),
);