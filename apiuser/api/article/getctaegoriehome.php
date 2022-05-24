<?php

header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=UTF-8");

include_once './../../config/db.php';
include_once './../../models/article.php';

$db=new Databbase();
$database=$db->connect();

$article=new Article($database);
$res=$article->getCtaegorieHome();

echo json_encode($res);