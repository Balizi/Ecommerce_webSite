<?php

class Article{
    private $conn;

    public $idArticle;
    public $titre;
    public $description;
    public $prix;
    public $image;
    public $categorie;
    public $genre;

    public function __construct($db)
    {
        $this->conn=$db;
    }

    public function getCtaegorieHome()
    {
        $req="SELECT * FROM article WHERE genre = 'Homme'";
        $tmp=$this->conn->prepare($req);
        $tmp->execute();
        return $tmp->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTop()
    {
        $req="SELECT * FROM article limit 9";
        $tmp=$this->conn->prepare($req);
        $tmp->execute();
        return $tmp;
    }

    public function getArticlesHomme()
    {
        $req="SELECT * FROM `article` WHERE categorie = ? and genre = 'Homme'";
        $tmp=$this->conn->prepare($req);
        $tmp->bindParam(1,$this->categorie);
        $tmp->execute();
        return $tmp->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getArticlesFemme()
    {
        $req="SELECT * FROM `article` WHERE categorie = ? and genre = 'femme'";
        $tmp=$this->conn->prepare($req);
        $tmp->bindParam(1,$this->categorie);
        $tmp->execute();
        return $tmp->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function proDetails()
    {
        $req="SELECT * FROM article WHERE idArticle = ?";
        $tmp=$this->conn->prepare($req);
        $tmp->bindParam(1,$this->idArticle);
        $tmp->execute();
        return $tmp->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>