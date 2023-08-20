<?php

namespace App\Controllers;

use App\View;

class Error{


	public function notFound(){

		new View('errors/404');
		
	}
}