<?php

include('../classes/login.classes.php');
class LoginContr extends Login{

   private $email;
   private $pwd;
   

public function __construct($email, $pwd){
$this->email = $email;
$this->pwd = $pwd;

}

public function loginUser(){

    if($this->emptyInput()==false){
        header("location: ../Pag/login.php?error=emptyInput");
            exit();
    }
    $this->logUser($this->email, $this->pwd);
}

private function emptyInput(){
$check;
if(empty($this->pwd)||empty($this->email)){
    $check = false;
}else{
    $check = true;
}
return $check;   
}

}

?>