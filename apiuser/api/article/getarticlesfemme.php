<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once './../../config/db.php';
include_once './../../models/article.php';

$db=new Databbase();
$database=$db->connect();

$articles=new Article($database);

$articles->categorie=isset($_GET['categorie'])?$_GET['categorie']:die();

$res=$articles->getArticlesFemme();

echo json_encode($res);
