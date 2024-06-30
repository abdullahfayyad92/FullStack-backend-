<?php
//part1-46



// namespace MVC\models;
// use MVC\core\model;

// class user  extends model{
//     public function GetAllUsers(){
//        $data= model::db()->run("SELECT * FROM user")->fetchAll();

//        return $data;

//     }

//     }
// }

//part4-46
namespace MVC\models;
use MVC\core\model;

class user  extends model{
    public function GetAllUsers(){
       $data= model::db()->run("SELECT * FROM user")->fetchAll();

       return $data;

    }
    public function GetUser($email, $password){
        $data= model::db()->run("SELECT * FROM user WHERE `email`= ? && `password`= ?",[$email,$password])->fetch();
        return $data;
    }
    public function InsertUser($name,$email,$password){
        $data =model::db()->insert('user', ['name' => $name, 'email' => $email, 'password'=>$password]);
    }
}