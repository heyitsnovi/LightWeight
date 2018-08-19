<?php

namespace App; 

class Render {

	private static $data 		= array();
	private static $pageVars 	= array();



	public static function show($view, $data = [], $http_headers = []){

		try {
			

				if($data != NULL) {

					foreach ($data as $key => $value) {
						
						self::$pageVars[$key] = $value;
					}
				}


				if(sizeof($http_headers)>=1){

					foreach($http_headers as $header_keys =>$header_vals){

						header($header_keys.':'.$header_vals);
					}
				}

				 

				extract(self::$pageVars);

				ob_start();

				require_once __DIR__.'/Views/'. $view .'.php';

				echo ob_get_clean();


		}catch (Exception $e) {
			
		}
	
	}
}