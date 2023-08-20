<?php

use Core\Url;
use Core\Redirector as Redir;
Use Core\Sessionizer;
use Core\Render;
use voku\helper\AntiXSS;

function base_url($ext = ''){

	$url_instance = new Url();

	 return $ext!=='' ?  $url_instance->base_url().$ext : $url_instance->base_url();
	
}


function redirector(){

		return new Redir();
}

function field_error($field_name){

	$sessionizer =  new Sessionizer();

	return $sessionizer->form_errors($field_name);
}

function http_method(){

	return strip_tags($_SERVER['REQUEST_METHOD']);
}


function set_session($key,$value){

		$sessionizer = new Sessionizer();

		$sessionizer->set_session($key,$value);

}


function set_flash($key,$value){

		$sessionizer = new Sessionizer();

		$sessionizer->set_flash($key,$value);

}


function get_session($key,$value){

		$sessionizer = new Sessionizer();

		return $sessionizer->get_session($key);

}


function get_flash($key){

		$sessionizer = new Sessionizer();

		return $sessionizer->get_flash($key);

}


function anti_xss($input){

	$xss_cleaner =  new  AntiXSS();

	return $xss_cleaner->xss_clean($input);
}

