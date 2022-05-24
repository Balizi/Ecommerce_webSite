<?php

class DB
{
    public static function connexion()
    {
        $db=new PDO('mysql:dbname=filrouge;host=localhost','root','');
        $db->exec("set names utf8");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $db;
    }
}
