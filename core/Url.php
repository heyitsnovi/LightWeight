<?php
namespace Core;

class Url {

	public  function base_url($ext = ''){

		 $config = parse_ini_file('././.env');
		
		return  $config['PROJECT_BASEURL'] . $ext;
		 
	}
}