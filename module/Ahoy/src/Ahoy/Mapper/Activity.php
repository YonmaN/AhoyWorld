<?php

namespace Ahoy\Mapper;

use Zend\Config\Reader;
use Zend\Config\Writer;
class Activity {
	/**
	 * @var string
	 */
	private $appPath;
	
	public function __construct() {
		$this->appPath = getcwd();
	}
	/**
	 * @return boolean
	 */
	public function isSiteActive() {
		$reader = new Reader\Ini();
		$config = $reader->fromFile($this->appPath . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'ahoy.ini');
		return (boolean)$config['ahoy']['active'];
	}

	/**
	 * @param boolean $active
	 * @return boolean
	 */
	public function setSiteActivity($active = true) {
		$writer = new Writer\Ini();
		$reader = new Reader\Ini();
		$config = $reader->fromFile($this->appPath . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'ahoy.ini');
		$config['ahoy']['active'] = $active;
		$writer->toFile(getcwd() . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'ahoy.ini', $config);
		return $active;
	}
}

