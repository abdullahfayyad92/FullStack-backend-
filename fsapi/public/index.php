<?php
//session47
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("APP",ROOT.DS."app");
define("CONFIG",APP.DS."config".DS);
define("CONTROLLES",APP.DS."controllers".DS);
define("CORE",APP.DS."core".DS);
define("MODELS",APP.DS."models".DS);
define("VIEWS",APP.DS."views".DS);

define("DOMAIN","http://news.test");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","fs8_proone");
define("DATABASE_TYPE","mysql");
define("CSS_PATH",DOMAIN."/");//part7
define("PATH",DOMAIN."/");

require_once("../vendor/autoload.php");

// $c =new MVC\core\app();

//session 49 api
require_once('../api/category.php');

$url = explode("/",$_SERVER['QUERY_STRING']);

// echo '<pre>';
// print_r($_SERVER);

header('Access-Control-Allow-Origin: application/json');
header('Content-Type: application/json');

if($url[1] == 'v1'){

    $category = new category();

    if($url[2] == 'category'){
        if($url[3] =='all'){
           $data = $category->all();
           //print_r($data);

           $res = [
            'status'=>200,
            'data'=>$data
           ];
           echo json_encode($res);
            
        }elseif($url[3] =='add'){
            header('Access-Control-Allow-Method: POST');

            $da = file_get_contents("php://input");
            // print_r($da);die;

            $data = json_decode($da,true);
            // print_r($data);die;
            $res = $category->add($data);
            if($res){
                http_response_code(201);
                $re = [
                    'status'=>201,
                    'msg'=>'category cereated'
                   ];  
            }else{
                http_response_code(400);
                $re = [
                    'status'=>400,
                    'msg'=>'error'
                   ];  
            }
            echo json_encode($re); 

        }elseif($url[3] =='update'){
            header('Access-Control-Allow-Method: PUT');

            $data_com = file_get_contents("php://input");
            $da = json_decode($data_com,true);
            // print_r($da);die;
            $id =['id' => $da['id']];

            $data = $da['category'];
            // print_r($data);die;


            $res = $category->update($data,$id);
            if($res){
                http_response_code(201);
                $re = [
                    'status'=>201,
                    'msg'=>'category updated'
                   ];  
            }else{
                http_response_code(400);
                $re = [
                    'status'=>400,
                    'msg'=>'error'
                   ];  
            }
            echo json_encode($re); 

        }elseif($url[3] =='delete'){
            header('Access-Control-Allow-Method: DELETE');


            $data_com = file_get_contents("php://input");
            $da = json_decode($data_com,true);
            $id= $da['id'];


            $res = $category->delete($id);
            if($res){
                http_response_code(201);
                $re = [
                    'status'=>201,
                    'msg'=>'category deleted'
                   ];  
            }else{
                http_response_code(400);
                $re = [
                    'status'=>400,
                    'msg'=>'error'
                   ];  
            }
            echo json_encode($re); 
        }
         
        
    }


    if($url[2] == 'user'){}
}else{
    echo 'error 400';
}

