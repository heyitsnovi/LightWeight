<?php

// Initialize Router  
use Core\Router;

$router = Router::createRoutes();
 

// define your routes here 
//===============================================================

$router->get('/','\App\Controllers\Home@index');
$router->get('/hello/(\w+)/(\w+)','\App\Controllers\Home@sayHello');
$router->get('/formtest','\App\Controllers\Home@testForm');
$router->get('/paginate-demo','\App\Controllers\Home@paginationDemo');

$router->post('/submitformtest','\App\Controllers\Home@submitTestForm');






//===============================================================

//  define your 404 page handler :
$router->set404('\App\Controllers\Error@notFound');

//===============================================================

//And Fire in the hole!!
$router->run();

//===============================================================
