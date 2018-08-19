<?php

namespace App; 

use Illuminate\Database\Capsule\Manager as Capsule;

 
    class Model {
     
            public function __construct() {

            $capsule = new Capsule();
            $capsule->addConnection([
                 'driver' =>    'mysql',
                 'host' =>      'localhost',
                 'database' =>  'lightweight',
                 'username' =>  'root',
                 'password' =>  '',
                 'charset' =>   'utf8',
                 'collation' => 'utf8_unicode_ci',
                 'prefix' => '',
            ]);
            // Setup the Eloquent ORM… 
            $capsule->bootEloquent();
    }
 
}

 