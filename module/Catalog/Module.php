<?php
// module/Catalog/Module.php
namespace Catalog;

// Add these import statements:
use Catalog\Model\Catalog;
use Catalog\Model\CatalogTable;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
class Module
{

     public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
 
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    // getAutoloaderConfig() and getConfig() methods here
 
    // Add this method:
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'AlbumModelAlbumTable' =>  function($sm) {
                    $tableGateway = $sm->get('CatalogTableGateway');
                    $table = new CatalogTable($tableGateway);
                    return $table;
                },
                'CatalogTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get('ZendDbAdapterAdapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Catalog());
                    return new TableGateway('catalog', $dbAdapter, null, $resultSetPrototype);
                },
            ),
        );
    }
}