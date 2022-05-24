<?php

header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=UTF-8");

include_once './../../config/db.php';
include_once './../../models/article.php';

$db=new Databbase();
$database=$db->connect();

$article=new Article($database);
$res=$article->getTop();

$num=$res->rowCount();

if($num>0)
{
    $article_arr=array();
    $article_arr['data']=array();

    while($row=$res->fetch(PDO::FETCH_ASSOC))
    {
        extract($row);
        $article_item=array(
            'idArticle' => $idArticle,
            'titre' => $titre,
            'description' => $description,
            'prix' => $prix,
            'image' => $image,
            'categorie' => $categorie,
            'genre' => $genre
        );

        array_push($article_arr['data'],$article_item);
    }
    echo json_encode($article_arr);
}else{
    echo json_encode(
        array('essage' => 'No posts Found')
    );
}

?>