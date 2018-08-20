<?php

namespace App\Controllers;

use App\Render;
use App\Constants;
 

class Home {
	
	
	public function index(){

		
		$data['memory_usage'] = Constants::get_memory_usage();
	
		Render::show('default',compact('data'));	 
	}

	public function sayHello($name = null , $lastname = null){

		Render::show('sayhello',compact('name','lastname'));
	}

 
}