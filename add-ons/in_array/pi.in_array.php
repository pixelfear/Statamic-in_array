<?php

class Plugin_in_array extends Plugin
{

	public function index() {
		$needle = $this->fetchParam(array('needle', 'this', 'val', 'value'));
		$haystack = Helper::explodeOptions($this->fetchParam(array('haystack', 'in')));

		return in_array($needle, $haystack);
	}

}
