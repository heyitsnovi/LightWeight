<?php

namespace App\Controllers;

use App\Render;

class Error{


	public function notFound(){

		Render::show('errors/404');
	}
}