<?php

namespace App\Controllers;

use Core\View;

class Error{


	public function notFound(){

		new View('errors/404');
		
	}
}