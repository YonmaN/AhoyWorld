<?php

namespace Ahoy\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

/**
 * StatusController
 *
 * @author
 *
 * @version
 *
 */
class StatusController extends AbstractRestfulController {
	
	public function statusAction() {
		$mapper = $this->getServiceLocator()->get('Ahoy\Mapper\Activity');
		return new JsonModel(array('status' => $mapper->isSiteActive()));
	}
}