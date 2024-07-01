<?php include('../templates/header_register.php'); ?>


<div class="container">
        <div class="row justify-content-center">
            <div  class="col-12 col-sm-4 col-md-4">
            
            <div class ="form-container">
              
                          
                          <h1 class="h3 mb-3 text-center"> Registrarse</h1>
                        
                        
                        
                        <form class="was-validated"  enctype="multipart/form-data" action="../PHP/register_inc.php" method="post" >
                              
                              
                              <div class="form-floating">
                                 
                                        <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Ingresa usuario" required autofocus>
                                        <label for="floatingInput">Ingresa usuario</label>
                                         <div class="valid-feedback"> Valida  </div>
                                         <div class="invalid-feedback"> Favor de llenar el campo  </div>
                                    </div>
                                 
                              <hr>
                              <div class="form-floating">
                                        <input type="password" name="password" class="form-control" id="password"  placeholder="Ingresa contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required autofocus>
                                        <label for="floatingPassword">Ingresa contraseña</label>
                                         <div class="valid-feedback"> Valida  </div>
                                      
                                    </div>
                             
                                 <div class="form-floating">
                                        <input type="password" name="confirm_password" class="form-control" id="confirm_password"  placeholder="Confirma contraseña" required autofocus>
                                        <label for="floatingInput">Valida contraseña</label>
                                        <div class="invalid-feedback"> Debe tener mas de 8 caracteres, 1 mayuscula, 1 minuscula, 1 numero  </div>
                                 
                                    
                                    </div>
                               <hr>
                               <div class="form-floating">
                                        <input type="Email" name="Email" class="form-control" id="Email" placeholder="Ingresa email" required autofocus>
                                        <label for="floatingInput">Ingresa email</label>
                                         <div class="valid-feedback"> Valida  </div>
                                         <div class="invalid-feedback"> Debe tener @ y .com  </div>
                                    </div>
                               <hr>
                                  <div class="form-floating">
                                        <input type="text" name="Nombre" class="form-control" id="Nombre" placeholder="Ingresa nombre(s)" required autofocus>
                                        <label for="floatingInput">Ingresa nombre(s)</label>
                                         <div class="valid-feedback"> Valida  </div>
                                         <div class="invalid-feedback"> Favor de llenar el campo  </div>
                                    </div>
                                <hr>
                                  <div class="form-floating">
                                        <input type="text" name="Apellido" class="form-control" id="Apellido" placeholder="Ingresa apellido(s)" required autofocus>
                                        <label for="floatingInput">Ingresa apellido(s)</label>
                                        
                                    </div>
                              <hr>
                              <div class="form-floating">
                                <input type="number" name="Telefono" class="form-control" id="Telefono" placeholder="Ingresar Telefono" required autofocus>
                                <label for="floatingInput">Ingresa Telefono</label>
                                <div class="invalid-feedback"> Solo numeros  </div>
                                </div>
                                <hr>
                              <label for="date">Selecciona tu fecha de nacimiento:</label><div></div>
                              <input type="date" id="fecha" name="fecha" min="1960-01-01" max="2020-12-31" required autofocus>
                              <hr>

                               <div class="form-label-group">
                                <input type="file" name="foto" class="form-control" id="foto" required>
                              </div>
                              
                          
                              <hr class="my-4">
                              
                               <input type="hidden" name="Accion" value="login"/>
                               <button class="btn btn-outline-success btn-lg  text-center text-uppercase" type="submit" value="iniciar" name="submit">Registrame</button>
                               <hr class="my-4">
                               <a class="btn btn-outline-danger btn-lg text-uppercase text-center" href="Login.php">Regresar</a>
                               
                               
                          </form>
                       
              </div>
            
              
    </div>
    </div>
    </div>

<?php include('../templates/footer.php'); ?>