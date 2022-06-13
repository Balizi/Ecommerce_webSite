<?php

class Client{
    private $conn;
    public $idClent;
    public $nom;
    public $prenom;
    public $email;
    public $tele;
    public $password;
    public $genre;
    public $sujet;

    public function __construct($db)
    {
        $this->conn=$db;
    }

    public function register()
    {
        $req="INSERT INTO client(nom, prenom, email, tele, password, genre) VALUES (:nom,:prenom,:email,:tele,:password,:genre)";
        $tmp=$this->conn->prepare($req);

        $tmp->bindParam(':nom',$this->nom);
        $tmp->bindParam(':prenom',$this->prenom);
        $tmp->bindParam(':email',$this->email);
        $tmp->bindParam(':tele',$this->tele);
        $tmp->bindParam(':password',$this->password);
        $tmp->bindParam(':genre',$this->genre);
        if($tmp->execute())
        {
            return true;
        }
        return false;
    }

    public function login()
    {
        $req="SELECT * FROM client WHERE email=:email";
        $tmp=$this->conn->prepare($req);
        $tmp->bindParam(':email',$this->email);
        if($tmp->execute())
        {
            return $tmp->fetch(PDO::FETCH_OBJ);
        }
        return false;
    }

    public function Contact()
    {
        $req="INSERT INTO contact(nom, email, sujet, message, idClient) VALUES (:nom,:email,:sujet,:message,:idClient)";
        $stmt=$this->conn->prepare($req);
        $stmt->bindParam(':nom',$this->nom);
        $stmt->bindParam(':email',$this->email);
        $stmt->bindParam(':sujet',$this->sujet);
        $stmt->bindParam(':message',$this->message);
        $stmt->bindParam(':idClient',$this->idClent);
        if($stmt->execute())
        {
            return true;
        }
        return false;
    }

}
