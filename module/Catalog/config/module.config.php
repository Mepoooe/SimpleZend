<?php

return array(
    'doctrine' => array( 
        'driver' => array(
            // defines an annotation driver with two paths, and names it `my_annotation_driver`
            'catalog_entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(
                    __DIR__.'/../src/Catalog/Entity'
                ),
            ),

            // default metadata driver, aggregates all other drivers into a single one.
            // Override `orm_default` only if you know what you're doing
            'orm_default' => array(
                'drivers' => array(
                    // register `my_annotation_driver` for any entity under namespace `My\Namespace`
                    'Catalog\Entity' => 'catalog_entity'
                )
            )
        )
    ),

    'controllers' => array(
        'invokables' => array(
            'Catalog\Controller\Catalog' => 'Catalog\Controller\CatalogController',
        ),
    ),
 
    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'catalog' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalog[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalog\Controller\Catalog',
                        'action'     => 'catalog',
                    ),
                ),
            ),
        ),
    ),
 
    'view_manager' => array(
        'template_path_stack' => array(
            'catalog' => __DIR__ . '/../view',
        ),
    ),
);