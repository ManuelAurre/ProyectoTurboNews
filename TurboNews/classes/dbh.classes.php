<?php

class Dbh {
     function connect(){
try{
        $server = "localhost";
        $username = "root";
        $password = "root";
        $database = "BDMM";

        $conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
        return $conn;

    }catch(PDOException $error){
        die("connection failed" . $error->getMessage());

    }

}

}

?>