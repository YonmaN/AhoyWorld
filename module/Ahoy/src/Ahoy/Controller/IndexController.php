<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonAhoy for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Ahoy\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
    	$activity = $this->getServiceLocator()->get('Ahoy\Mapper\Activity');
    	$active = $activity->isSiteActive();
    	$activity->setSiteActivity(! $active);
    	$active = (!$active);
        return new ViewModel(array('active' => $active));
    }
}
