<?php

include('../classes/login-contr.classes.php');

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    


    $login = new LoginContr($email, $pwd);
    $login->loginUser();
    header("location: ../Pag/Homepage.php?error=none");
}
else
header("location: ../Pag/login.php?error=algosaliomal");

?>