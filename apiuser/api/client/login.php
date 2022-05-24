<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
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

    require_once './../../config/db.php';
    require_once './../../models/client.php';

    $database=new Databbase();
    $db= $database->connect();

    $clt=new Client($db);


    //GET raw posted data
    $data=json_decode(file_get_contents("php://input"));

    $clt->email=$data->email;
    $res=$clt->login();

    if($res->email === $data->email && password_verify($data->password,$res->password))
    {
        echo json_encode(array('message'=>'success','dt'=>$res));
    }else{
        echo json_encode(array('message'=>'failer'));
    }
    
    // if($res->email === $data->email && password_verify($data->email,$res->password))
    // {

    //     echo json_encode('yes');
    // }else{
    //     echo json_encode('no');
    // }

    

?>