<?php

// Initialize Router  
use Core\Router;

$router = Router::createRoutes();
 

// define your routes here 
//===============================================================

$router->get('/','\App\Controllers\Home@index');


$router->get('/testpage','App\Controllers\Home@test_page');


$router->all('/testform','App\Controllers\Home@test_form');




//===============================================================

//  define your 404 page handler :
$router->set404('\App\Controllers\Error@notFound');

//===============================================================

//And Fire in the hole!!
$router->run();

//===============================================================
