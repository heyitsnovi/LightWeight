<?php

namespace App; 

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Constants;

 
class Model {
 
        public function __construct() {

        $capsule = new Capsule();
        $capsule->addConnection([
             'driver' =>    'mysql',
             'host' =>      Constants::DBConfig('MYSQL_HOST'),
             'database' =>  Constants::DBConfig('MYSQL_DATABASE'),
             'username' =>  Constants::DBConfig('MYSQL_USERNAME'),
             'password' =>  Constants::DBConfig('MYSQL_PASSWORD'),
             'charset' =>   Constants::DBConfig('MYSQL_CHARSET'),
             'collation' => Constants::DBConfig('MYSQL_COLLATION'),
             'prefix' =>    Constants::DBConfig('MYSQL_PREFIX'),
        ]);
        // Setup the Eloquent ORM… 
        $capsule->bootEloquent();
}
 
}

 