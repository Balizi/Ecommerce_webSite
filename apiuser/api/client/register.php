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
    
    if(empty($data->nom) && empty($data->prenom) && empty($data->email) && empty($data->tele) && empty($data->password) && empty($data->genre))
        return;
    
    $options=['cost' => 12];

    $password=password_hash($data->password,PASSWORD_BCRYPT,$options);
    

    $clt->nom=$data->nom;
    $clt->prenom=$data->prenom;
    $clt->email=$data->email;
    $clt->tele=$data->tele;
    $clt->password=$password;
    $clt->genre=$data->genre;
    
    if($clt->register())
    {
        echo json_encode(array('message'=>'compte crié'));
    }

?>