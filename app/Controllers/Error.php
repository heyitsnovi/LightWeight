<?php

namespace App\Controllers;

use Core\View;

class Error{


	public function notFound(){
		
		http_response_code(404);
		new View('errors/404');
		
	}
}