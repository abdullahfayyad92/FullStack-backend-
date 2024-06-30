<?php

//part1-46



namespace MVC\core;
use Dcblogdev\PdoWrapper\Database as Database ;
class model{
    
    public static function db(){

        // make a connection to mysql here
        $options = [
            //required
            'username' =>USERNAME,
            'database' => DATABASE,
            //optional
            'password' => PASSWORD,
            'type' => DATABASE_TYPE,
            'charset' => 'utf8',
            'host' => 'localhost',
            'port' => '3306'
        ];

         $db = new Database($options);
         return $db;
    }
}