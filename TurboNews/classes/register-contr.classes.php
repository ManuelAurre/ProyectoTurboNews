<?php

include('../classes/register.classes.php');
class RegisterContr extends Register{

   private $email;
   private $pwd;
   private $confirm;

   private $usuario;
   private $Nombre;
   private $Apellido;
   private $Telefono;
   //private $pwd;
   //private $confirm;
  

public function __construct($email, $pwd, $confirm, $usuario, $Nombre, $Apellido, $Telefono){
$this->email = $email;
$this->pwd = $pwd;
$this->confirm = $confirm;

$this->usuario = $usuario;
$this->Nombre = $Nombre;
$this->Apellido = $Apellido;
$this->Telefono = $Telefono;
//$this->pwd = $pwd;
//$this->confirm = $confirm;

}

public function registerUser(){

    if($this->emptyInput()==false){
        header("location: ../Pag/login.php?error=emptyInput");
            exit();
    }
    if($this->matchPwd()==false){
        header("location: ../Pag/login.php?error=matchPwd");
            exit();
    }
    if($this->UserCheck()==false){
        header("location: ../Pag/login.php?error=UserCheck");
            exit();
    }
    if($this->validar_clave()==false){
        header("location: ../Pag/login.php?error=validar_clave");
            exit();
    }
    $this->insertUser($this->email, $this->pwd, $this->usuario, $this->Nombre, $this->Apellido, $this->Telefono);
}

private function matchPwd(){
$check;
if($this->pwd !== $this->confirm ){
    $check = false;
}else{
    $check = true;
}
return $check;
}

private function validar_clave(){
    $check;
   
    if((strlen($this->pwd) <= 7) && !preg_match('`[A-Z]`',$this->pwd) && !preg_match('`[0-9]`',$this->pwd) && !preg_match('`[a-z]`',$this->pwd)){
        $check = false;
    }else{

        $check = true;
    }
    

    return $check;
 }

private function UserCheck(){
$check;
if(!$this->checkUser($this->email)){
    $check = false;
}else{
    $check = true;
}
return $check;
    
}

private function emptyInput(){
$check;
if(empty($this->pwd) || empty($this->email) || empty($this->confirm) || empty($this->usuario) || empty($this->Nombre) || empty($this->Apellido) || empty($this->Telefono)){
    $check = false;
}else{
    $check = true;
}
return $check;   
}

}

?>