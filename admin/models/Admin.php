<?php

class Admin{


    public static function Login($data)
    {
        $email=$data['email'];
        try{
            $req="SELECT * from admin WHERE email=:email";
            $tmp=DB::connexion()->prepare($req);
            $tmp->execute(array(":email" => $email));
            $user=$tmp->fetch(PDO::FETCH_OBJ);
            return $user;
        }catch(PDOException $ex)
        {
            echo $ex->getMessage();
        }
    }

    public static function CreateAcount($data)
    {
        $req='INSERT INTO admin(nom, prenom, email, password) VALUES (:nom,:prenom,:email,:password)';
        $tmp=DB::connexion()->prepare($req);
        $tmp->bindParam(':nom',$data['nom']);
        $tmp->bindParam(':prenom',$data['prenom']);
        $tmp->bindParam(':email',$data['email']);
        $tmp->bindParam(':password',$data['password']);
        $tmp->execute();
        
    }


}


?>