<?php
 
/* Initialize Router Engine */
$router = new \Bramus\Router\Router();
 

/* define your routes here */

$router->get('/','\App\Controllers\Home@index');
$router->get('/hello/(\w+)/(\w+)','\App\Controllers\Home@sayHello');





/* Your 404 page handler : */
$router->set404('\App\Controllers\Error@notFound');

/*And Fire in the hole!!*/
$router->run();
