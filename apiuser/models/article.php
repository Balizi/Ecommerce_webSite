<?php

class Article{
    private $conn;

    public $id;
    public $idArticle;
    public $titre;
    public $description;
    public $prix;
    public $image;
    public $categorie;
    public $genre;
    public $qte;

    public $idClient;


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

    public function getArticleByCatego()
    {
        $req="SELECT * FROM `article` WHERE categorie = ? and genre = ?";
        $tmp=$this->conn->prepare($req);
        $tmp->bindParam(1,$this->categorie);
        $tmp->bindParam(2,$this->genre);
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

    public function imgDetails()
    {
        $req="SELECT a.genre, i.image FROM imgdetails i INNER JOIN article a on a.idArticle=i.idArt WHERE a.idArticle=?";
        $tmp=$this->conn->prepare($req);
        $tmp->bindParam(1,$this->idArticle);
        $tmp->execute();
        return $tmp->fetchAll(PDO::FETCH_ASSOC);
    }


    public function commander()
    {
        $req="INSERT INTO commande(idArticle, idClient) VALUES (:idArticle,:idClient)";
        $tmp=$this->conn->prepare($req);

        $tmp->bindParam(':idArticle',$this->idArticle);
        $tmp->bindParam(':idClient',$this->idClient);
        if($tmp->execute())
        {
            return true;
        }
        return false;
    }

    public function ReadFromCart()
    {
        $req="SELECT * FROM cart c INNER JOIN article a on c.idArticle=a.idArticle";
        $stmt=$this->conn->prepare($req);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function AddToCart()
    {
        $req="INSERT INTO `cart`(`qte`, `idClient`, `idArticle`) VALUES (:qte,:idClient,:idArticle)";
        $stmt=$this->conn->prepare($req);
        $stmt->bindParam(':qte',$this->qte);
        $stmt->bindParam(':idClient',$this->idClient);
        $stmt->bindParam(':idArticle',$this->idArticle);
        if($stmt->execute())
            return true;
        return false;
    }

    public function DeleteFromCart()
    {
        $req="DELETE FROM `cart` WHERE id=?";
        $stmt=$this->conn->prepare($req);
        $stmt->bindParam(1,$this->id);
        if($stmt->execute())
            return true;
        return false;
    }

    public function delete()
    {
        $req="DELETE FROM cart";
        $stmt=$this->conn->prepare($req);
        if($stmt->execute())
            return true;
        return false;
    }

}

?>