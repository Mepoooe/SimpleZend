<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Basket\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BasketController extends AbstractActionController
{
	
	
     public function basketAction()
    {
    	return new ViewModel();
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
