<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once './../../config/db.php';
include_once './../../models/article.php';

$db=new Databbase();
$database=$db->connect();

$articleDetails=new Article($database);

$articleDetails->idArticle=isset($_GET['idArticle'])?$_GET['idArticle']:die();

$res=$articleDetails->proDetails();

echo json_encode($res);