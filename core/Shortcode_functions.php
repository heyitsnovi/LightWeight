<?php

use App\Url;
use App\Redirector as Redir;
Use App\Sessionizer;
use App\Render;

function base_url($ext = ''){

	return Url::base_url().$ext;
}


function redir(){

	return Redir::class;
}

function field_error($field_name){

	return Sessionizer::form_errors($field_name);
}

function show_page($template,$vars){

	Render::show($template,$vars);
}