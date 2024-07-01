<?php

include('../classes/dbh.classes.php');

class Register extends Dbh{

    protected function insertUser($email, $pwd, $usuario, $Nombre, $Apellido, $Telefono){
        $stmt = $this->connect()->prepare('INSERT INTO usuario(Email, user_password, nickname, nombres, apellidos, telefono) VALUES(?,?,?,?,?,?);');

        $pwdHashed = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($email, $pwdHashed, $usuario, $Nombre, $Apellido, $Telefono))){
            $stmt = null;
            header("location: ../login.php?error=stmfailed");
            exit();
        }
    $stmt = null;

    }

    protected function checkUser($email){
        $stmt = $this->connect()->prepare('SELECT Email FROM usuario WHERE Email = ?;');
        if(!$stmt->execute(array($email))){
            $stmt = null;
            header("location: ../login.php?error=stmfailed");
            exit();
        }
    

    $check;
    if($stmt->rowCount() > 0){
        $check = false;
    }else{
        $check = true;
    }

    return $check;
    }
}

?>