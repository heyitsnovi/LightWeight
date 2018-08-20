<?php

namespace App;

class Constants{


	public static function get_memory_usage(){

		$size 	=  memory_get_usage();

		$unit	=	array('b','kb','mb','gb','tb','pb');
    	
    	return round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
	}


	public static function DBConfig($config_item){

		$config = parse_ini_file('././.env');

		return $config[$config_item];
	}
}