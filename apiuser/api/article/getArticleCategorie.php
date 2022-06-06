<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once './../../config/db.php';
include_once './../../models/article.php';

$db=new Databbase();
$database=$db->connect();

$articles=new Article($database);

$articles->categorie=isset($_GET['categorie'])?$_GET['categorie']:die();
$articles->genre=isset($_GET['genre'])?$_GET['genre']:die();

$res=$articles->getArticleByCatego();

echo json_encode($res);
