<?php


//session47
namespace MVC\core;


class controller{
    public function view($path,$parms){
        extract($parms);
        require_once(VIEWS.$path.".php");

    }

}
 