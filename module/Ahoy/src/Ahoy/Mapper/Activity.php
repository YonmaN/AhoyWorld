<?php

namespace Ahoy\Mapper;

class Activity {
	/**
	 * @return boolean
	 */
	public function isSiteActive() {
		return true;
	}
	
	public function setSiteActivity($active = true) {
		return $active;
	}
}

