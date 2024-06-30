<?php
namespace MVC\core;


//session47
class app{
    private $controller;
    private $method;
    private $params;
    public function __construct()
    {
        // echo 'test';die;
        $this->url();
        $this->render();
    }
    private function url(){
        // echo 'test';die;
       if(!empty($_SERVER['QUERY_STRING'])){
            // echo 'test';die;
            $url= explode("/",$_SERVER['QUERY_STRING']) ;
            $this->controller = isset($url[0]) ? $url[0]."controller" : "homecontroller";
            //this method
            $this->method = isset($url[1]) ? $url[1] : "index";
            unset($url[0],$url[1]);
            //this params
            $this->params = array_values($url);
       }
       else{
        
        $this->controller ='homecontroller';
        $this->method ='index';
        $this->params =[];
       }
       
    }
    private function render (){

        $controllers ="MVC\controllers\\".$this->controller;
        if(class_exists($controllers)){
            $controller = new $controllers;
            if(method_exists($controller,$this->method)){
                // echo $this->controller;die;
                call_user_func_array([$controller,$this->method],$this->params);
            }else{
                echo 'method not exist';
            }
            
        }else{
            echo 'class not exist';
        }
    }
}