<?php

namespace App;

use App\Sessionizer;
use Rakit\Validation\Validator;

class Redirector{

	public static function redirect($url){
		header('location:'.$url);
		exit;
	}

	public static function redirectWithErrors($url,$errors = []){

		Sessionizer::set_flash('lightweight_form_errors',is_object($errors) ? $errors->toArray() : []);
		header('location:'.$url);
		exit;
	
	}

}