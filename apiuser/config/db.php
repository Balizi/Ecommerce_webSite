<?php
    class Databbase
    {

      private $conn;
      
      public function connect()
      {
        $this->conn=null;
        try{
            $this->conn=new PDO('mysql:dbname=filrouge;host=localhost','root','');
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $err)
        {
            echo $err->getMessage();
        }
        return $this->conn;
      }
    }
?>