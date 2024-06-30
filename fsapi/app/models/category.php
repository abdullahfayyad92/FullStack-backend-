<?php
//session48

namespace MVC\models;
use MVC\core\model;

class category  extends model{
    public function GetAllCategory(){
       $data= model::db()->run("SELECT * FROM category")->fetchAll();

       return $data;
    }
    public function DeleteCategory($id){
        $data= model::db()->delete("category",['id'=>$id]);
        return $data;
    }
    public function AddCategory($data){
        // print_r($data);die;
        $res= model::db()->insert("category",$data);
        return $res;

    }
    public function GetCategory($id){
        $data= model::db()->run("SELECT * FROM category WHERE id = ?", [$id])->fetch();

        return $data;
    }
    public function UpdateCategory($data,$id){
        $res= model::db()->update('category', $data, $id);


        return $res;
    }
}