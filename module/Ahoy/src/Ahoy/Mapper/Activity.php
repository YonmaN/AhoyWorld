<?php

namespace Ahoy\Mapper;

use Zend\Config\Reader\Ini;
class Activity {
	/**
	 * @return boolean
	 */
	public function isSiteActive() {
		$reader = new Ini();
		$config = $reader->fromFile(getcwd() . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'ahoy.ini');
		return (boolean)$config['ahoy']['active'];
	}
	
	public function setSiteActivity($active = true) {
		return $active;
	}
}

