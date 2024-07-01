

 
/*
function validated(){

   var usuario = document.forms['form']['email'];
 var password = document.forms['form']['password'];
 

 if (usuario.value.length <= 3){
     
     return false;
 }
    
 if (password.value.length <= 3){
     
     return false;
 }
}*/

function validar_form(){
    var usuario = document.forms['form']['email'];
   var password = document.forms['form']['password'];
   
   if (!usuario.value ||  !password.value)
   {

    alert("enter text in textfield");
    window.location.href="Homepage.html";
    } else
    {
        alert("Se han ingresado los datos correctamente");
        window.location.href="Login.html";
    }
       
}
