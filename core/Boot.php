<?php

namespace Core;	

use Core\Model;

class Boot {

	public function __construct(){

		self::initializeSession();
		new Model();
		
	}

	protected static function initializeSession(){

		if(session_status()	===	PHP_SESSION_NONE){

			session_start();
		}
	}

}
	new Boot();
?>