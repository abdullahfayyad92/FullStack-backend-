<?php
namespace MVC\core;
//session47


class helpers{
    public static function redirect ($path){
        // $domain =DOMAIN;
        // header("LOCATION:$domain".$path);
        header("LOCATION:".DOMAIN."/".$path);
    }
}