<?php
namespace App;

class Url {

	public static function base_url($ext = ''){

		 $config = parse_ini_file('././.env');
		
		return  $config['PROJECT_BASEURL'] . $ext;
		 
	}
}