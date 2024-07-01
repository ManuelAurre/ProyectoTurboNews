<?php

include('../classes/register-contr.classes.php');

if(isset($_POST["submit"])){
    $email = $_POST["Email"];
    $pwd = $_POST["password"];
    $confirm = $_POST["confirm_password"];


    $usuario = $_POST["usuario"];
    $Nombre = $_POST["Nombre"];
    $Apellido = $_POST["Apellido"];
    $Telefono = $_POST["Telefono"];
    //$fecha = $_POST["fecha"];
    //$foto = $_POST["foto"];



    $register = new RegisterContr($email, $pwd, $confirm, $usuario, $Nombre, $Apellido, $Telefono);
    $register->registerUser();
    header("location: ../Pag/Login.php?error=none");
}



?>