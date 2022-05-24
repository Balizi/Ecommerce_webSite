<?php

class Product
{
    public static function getProHomme()
    {
        $tmp = DB::connexion()->prepare("SELECT * FROM article WHERE genre='Homme'");
        $tmp->execute();
        return $tmp->fetchAll();
    }

    public static function getProFemme()
    {
        $tmp = DB::connexion()->prepare("SELECT * FROM article WHERE genre='femme'");
        $tmp->execute();
        return $tmp->fetchAll();
    }

    public static function addPro($data)
    {
        $req='INSERT INTO article(titre, description, prix, image, categorie,genre) VALUES (:titre,:description,:prix,:image,:categorie,:genre)';
        $tmp=DB::connexion()->prepare($req);
        $tmp->bindParam(':titre',$data['titre']);
        $tmp->bindParam(':description',$data['description']);
        $tmp->bindParam(':prix',$data['prix']);
        $tmp->bindParam(':image',$data['image']);
        $tmp->bindParam(':categorie',$data['categorie']);
        $tmp->bindParam(':genre',$data['genre']);
        $tmp->execute();
        header("Location:index.php");
    }
}
