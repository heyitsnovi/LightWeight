<?php

namespace App;

class Sessionizer {

	public static function set_session($session_key,$session_value){

		if(!isset($_SESSION[$session_key])  OR $_SESSION[$session_key] === null){
			 
			$_SESSION[$session_key]	= $session_value;
			 
		}else{

			$_SESSION[$session_key]	= $session_value;
		}
	}

	public static function set_flash($session_key,$session_value){

		if(!isset($_SESSION[$session_key]) OR $_SESSION[$session_key] === null){
			 $_SESSION[$session_key]	= $session_value;
		}else{
			 $_SESSION[$session_key]	= $session_value;
		}	
	}

	public static function get_flash($session_key){

		$flash_message = isset($_SESSION[$session_key]) ? $_SESSION[$session_key] : '';
		unset($_SESSION[$session_key]);
		return $flash_message;

	}


	public static function form_errors($field){

		$messages = '';

		if( isset($_SESSION['lightweight_form_errors'][$field])){
			foreach($_SESSION['lightweight_form_errors'][$field]  as $errors){
				
				$messages.=$errors;
			}

			unset($_SESSION['lightweight_form_errors'][$field]);
		}

		return $messages;
	}

	 
}