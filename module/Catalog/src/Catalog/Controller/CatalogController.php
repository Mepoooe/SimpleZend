<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Catalog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CatalogController extends AbstractActionController
{
	

     public function indexAction()
    {
        $entityManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');

        $query = $entityManager->createQuery('SELECT u FROM Catalog\Entity\Products u ORDER BY u.id DESC');
        $rows = $query->getResult();


        return array('catalog' => $rows);
        
        //return new ViewModel();
    }
 
    public function addAction()
    {
    }
 
    public function editAction()
    {
    }
 
    public function deleteAction()
    {
    }
}
