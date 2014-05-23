<?php

class Modifier_in_array extends Modifier
{
		public function index($value, $parameters=array()) {
			return in_array($parameters[0], $value);
		}
}
