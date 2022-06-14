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

    public static function select($data)
    {
        $id=$data['id'];
        $tmp = DB::connexion()->prepare("SELECT * FROM article WHERE idArticle=:id");
        $tmp->execute(array(":id"=>$id));
        $employe=$tmp->fetch(PDO::FETCH_OBJ);
        return $employe;
    }

    public static function chercher($data)
    {
       
        $tmp = DB::connexion()->prepare("SELECT * FROM article WHERE titre LIKE ? OR categorie LIKE ?");
        $value = '%'.$data['key'].'%';
        $tmp->bindParam(1,$value);
        $tmp->bindParam(2,$value);
        $tmp->execute();
        $res=$tmp->fetchAll();
        return $res;
    }

    public static function update($data)
    {
        $req="UPDATE `article` SET `titre`=:titre,`description`=:description,`prix`=:prix,`image`=:image,`categorie`=:categorie,`genre`=:genre WHERE idArticle=:id";
        $stmt=DB::connexion()->prepare($req);
        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':titre',$data['titre']);
        $stmt->bindParam(':prix',$data['prix']);
        $stmt->bindParam(':categorie',$data['categorie']);
        $stmt->bindParam(':genre',$data['genre']);
        $stmt->bindParam(':description',$data['description']);
        $stmt->bindParam(':image',$data['image']);
        if($stmt->execute())
        {
            return 'OK';
        }
    }
}
