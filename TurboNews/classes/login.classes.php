<?php

include('../classes/dbh.classes.php');

class Login extends Dbh{

    protected function logUser($email, $pwd){
        $stmt = $this->connect()->prepare('SELECT * FROM usuario WHERE Email = ?');

        if(!$stmt->execute(array($email))){
            $stmt = null;
            header("location: ../Pag/login.php?error=stmfailed");
            exit();
        }


        $check;
        if($stmt->rowCount()==0){
            $stmt = null;
            header("location: ../Pag/login.php?error=NotFound");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd,$pwdHashed[0]["user_password"]);
        if($checkPwd == false){
            $stmt = null;
            header("location: ../Pag/login.php?error=wrongPassword");
            exit();
        }else if($checkPwd == true){
           

            session_start();
            $_SESSION["user_email"] = $email;
        }

    $stmt = null;

    }


}

?>