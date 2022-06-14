<?php

class Client{

    public static function getClient()
    {
        $tmp = DB::connexion()->prepare("SELECT * FROM client");
        $tmp->execute();
        return $tmp->fetchAll();
    }

    

}


?>