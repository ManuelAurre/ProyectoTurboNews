// La siguiente funcion valida el elemento input
function validar() {
    // Variable que usaremos para determinar si el input es valido
    let isValid_usuario = false;
    let isValid_password = false;
    let isValid_password2 = false;
    let isValid_email = false;
    let isValid_Nombre = false;
    let isValid_Apellido = false;
    let isValid = false;

    // El input que queremos validar
    const usuario = document.forms['form']['usuario'];
    const password = document.forms['form']['password'];
    const confirm_password = document.forms['form']['confirm_password'];
    const Email = document.forms['form']['Email'];
    const Nombre = document.forms['form']['Nombre'];
    const Apellido = document.forms['form']['Apellido'];
    
   

    //El div con el mensaje de advertencia:
    const message = document.getElementById('message');

    usuario.willValidate = false;
    Nombre.willValidate = false;
    Apellido.willValidate = false;


    // El tamaño maximo para nuestro input
    const maximo = 35;

    // El pattern que vamos a comprobar
    const patternLetras = new RegExp('^[A-Z, \u00D1, \u00F1, \u00E1, \u00E9, \u00ED, \u00F3, \u00FA]+$', 'i');

    

    //  validacion contraseña
    if(password != ""){

        var textoP=$('#password').val();
        var reg=/^(?=.*[a-z])(?=.*[A-Z]{1,})(?=.*[0-9]{1,})(?=.*[!@#\$%\^&\*¡”#/=’?¡¿:;,.\-_+{\][}()]{1,}).{8}$/g; 
        if (textoP.match(reg)) { 
     
            //alert("Me activaste");
            isValid_password = true;
        } else
        {
            alert("Contraseña no valida: Recuerda que la contraseña debe de tener: 8 caracteres, 1 numero, 1 mayuscula, 1 caracter especial (¡”#$%&/=’?¡¿:;,.-_+*{][}) y sin espacios en blanco.");
            document.getElementById('password').value = "";
            isValid_password = false;
        }
    }


        
        //  validacion confirmar contraseña
        var textoCC=$('#confirm_password').val();
        if(password == ""){

            alert("Favor de llenar primero el campo de contraseña.");
            document.getElementById('confirm_password').value = "";
            isValid_password2 = false;

        } else{
        if (password != confirm_password) {
            alert("Contraseñas diferentes. Favor de confirmar que ambas contraseñas sean iguales.");
            document.getElementById('confirm_password').value = "";
            isValid_password2 = false;
        } else{

        if (textoCC.match(reg)) { 

            //alert("Me activaste");
            isValid_password2 = true;
        } else
        {
            alert("Contraseña no valida: Recuerda que la contraseña debe de tener: 8 caracteres, 1 numero, 1 mayuscula, 1 caracter especial (¡”#$%&/=’?¡¿:;,.-_+*{][}) y sin espacios en blanco.");
            document.getElementById('confirm_password').value = "";
            isValid_password2 = false;
        }
    }
    }

    //  validacion Email
    if(Email != ""){

        var textoE=$('#Email').val();
        var reg=/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9_.+-]+.[a-zA-Z0-9_.+-]+$/g; 
        if (textoE.match(reg)) { 
     
           // alert("Me activaste");
           isValid_email = false;
        } else
        {
            alert("Correo no valido");
            document.getElementById('Email').value ="";
            isValid_email = false;
        }
    }




//  validacion, si usuario esta vacio entonces no es valido
    if(!usuario.value) {
        isValid_usuario = false;
      } else {
        // Segunda validacion, si input es mayor que 35
        if(usuario.value.length > maximo) {
            isValid_usuario = false;
        } else {
          // Tercera validacion, si input contiene caracteres diferentes a los permitidos
          if(!patternLetras.test(usuario.value)){ 
          // Si queremos agregar letras acentuadas y/o letra ñ debemos usar
          // codigos de Unicode (ejemplo: Ñ: \u00D1  ñ: \u00F1)
          isValid_usuario = false;
          } else {
            // Si pasamos todas la validaciones anteriores, entonces el input es valido
            isValid_usuario = true;
          }
        }
      }

  
  if(!Nombre.value) {
    isValid_Nombre = false;
  } else {
    
    if(Nombre.value.length > maximo) {
        isValid_Nombre = false;
    } else {
      
      if(!patternLetras.test(Nombre.value)){ 
      
      isValid_Nombre = false;
      } else {
        
        isValid_Nombre = true;
      }
    }
  }
      
  if(!Apellido.value) {
    isValid_Apellido = false;
  } else {
    
    if(Apellido.value.length > maximo) {
        isValid_Apellido = false;
    } else {
      
      if(!patternLetras.test(Apellido.value)){ 
      
        isValid_Apellido = false;
      } else {
        
        isValid_Apellido = true;
      }
    }
  }


  if(!isValid) {
    // rojo: no es valido
    input.style.borderColor = 'salmon'; // me parece que 'salmon' es un poco menos agresivo que 'red'
    // mostramos mensaje
    message.hidden = false;
  } else {
    // verde: si es valido
    input.style.borderColor = 'palegreen'; // 'palegreen' se ve mejor que 'green' en mi opinion
    // ocultamos mensaje;
    message.hidden = true;
  }
  

    if(isValid_usuario && isValid_password && isValid_password2 && isValid_email && isValid_Nombre && isValid_Apellido){
        alert('Todos los campos han sido llenados correctamente');
        return valid = true;
    }else {
    alert('Faltan campos');
    
    return valid = false;
}

  }

 