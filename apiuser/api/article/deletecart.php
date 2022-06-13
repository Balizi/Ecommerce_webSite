<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: DELETE");
    // header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-type,Access-Control-Allow-Methods, Authorization, X-Requested-with");
    
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') 
    {
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))        
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))       
            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}"); 
    }  
    if($_SERVER["REQUEST_METHOD"]=="OPTIONS") 
        return true;


    include_once './../../config/db.php';
    include_once './../../models/article.php';
    
    $db=new Databbase();
    $database=$db->connect();
    
    $articles=new Article($database);

    //GET raw posted data
    // $data=json_decode(file_get_contents("php://input"));

    // $articles->id=$data->id;

    $articles->id=isset($_GET['id'])?$_GET['id']:die();



    if($articles->DeleteFromCart())
    {
        echo json_encode(array('message'=>'Product delete'));
    }else{
        echo json_encode(array('message'=>'Product not Delete'));
    }

?>