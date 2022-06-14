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

    public static function select($data)
    {
        $id=$data['id'];
        $tmp = DB::connexion()->prepare("SELECT * FROM article WHERE idArticle=:id");
        $tmp->execute(array(":id"=>$id));
        $employe=$tmp->fetch(PDO::FETCH_OBJ);
        return $employe;
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
    
    public static function deletePro($data)
    {
        $id=$data['id'];
        try{
            $req="DELETE from article WHERE idArticle=:id";
            $stmt=DB::connexion()->prepare($req);
            $stmt->execute(array(":id"=>$id));
            if($stmt->execute())
            {
                return 'OK';
            }

        }catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }
}
