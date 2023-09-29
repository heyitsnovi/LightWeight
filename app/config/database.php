<?php

namespace Config;

use Core\Constants;

class Database{

    private $config = [];

    public function __construct(){

        $this->config = [

            'default'=>[
                'driver' =>    'mysql',
                'host' =>      Constants::DBConfig('MYSQL_HOST'),
                'database' =>  Constants::DBConfig('MYSQL_DATABASE'),
                'username' =>  Constants::DBConfig('MYSQL_USERNAME'),
                'password' =>  Constants::DBConfig('MYSQL_PASSWORD'),
                'charset' =>   Constants::DBConfig('MYSQL_CHARSET'),
                'collation' => Constants::DBConfig('MYSQL_COLLATION'),
                'prefix' =>    Constants::DBConfig('MYSQL_PREFIX'),
            ],
            //add some configuration here
            'secondary'=>[
                'driver' =>    'mysql',
                'host' =>      Constants::DBConfig('MYSQL_HOST'),
                'database' =>  'secondary_test',
                'username' =>  Constants::DBConfig('MYSQL_USERNAME'),
                'password' =>  Constants::DBConfig('MYSQL_PASSWORD'),
                'charset' =>   Constants::DBConfig('MYSQL_CHARSET'),
                'collation' => Constants::DBConfig('MYSQL_COLLATION'),
                'prefix' =>    Constants::DBConfig('MYSQL_PREFIX'),
            ], 
         
        ];
    }

    public function configList(){

        return $this->config;
    }
}