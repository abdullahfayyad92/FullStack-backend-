<?php

use MVC\core\model;

require_once('../app/core/model.php');

class category extends model{
    public function __construct()
    {
        
    }
    public function all(){
        $data= model::db()->rows("SELECT * FROM category");
        return $data;
    }
    public function add($data){

        $dat= model::db()->insert("category",$data);
        return $dat;
    }
    public function update($data,$id){
        $res= model::db()->update('category', $data, $id);


        return $res;
    }
    public function delete($id){
        $data= model::db()->delete("category",['id'=>$id]);
        return $data;
    }
}