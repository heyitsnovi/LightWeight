<?php

namespace App; 

class Render {

	private static $data = [];
	private static $pageVars = [];

	public static function show($view, $data = [], $http_headers = []){

		try {
			
				if($data != NULL) {

					foreach ($data as $key => $value) {
						
						self::$pageVars[$key] = $value;
					}
				}

				if(file_exists(__DIR__.'/Views/'. $view .'.php')){
					
					extract(self::$pageVars);
					ob_start();
					require_once __DIR__.'/Views/'. $view .'.php';
					echo ob_get_clean();

				}else{

					die('View File : Views/ '. $view .'.php was not found');
				}

				


		}catch (Exception $e) { 

			echo $e->getMessage();
		}
	
	}
}