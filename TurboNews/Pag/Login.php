<?php include('../templates/header_login.php'); ?>

<div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-3">

                <div class="form-container">
                    <div class="form-login">

                        <h1 class="h3 mb-3 fw-big"> Bienvenido!</h1>
                            
                        <form class="form-singin" action="../PHP/login_inc.php" method="post">
                            
                            <div class="row">
                                <div class="form-floating">
                                  <input type="email" class="form-control" name="email" id="email" placeholder="email">
                                  <label for="floatingInput">Email</label>
                                </div>
                                
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="contraseña">
                                    <label for="floatingPassword">Password</label>
                                  </div>

                                  <hr class="my-2">

                                  <input type="hidden" name="Accion" value="login"/>
                                  <button class="btn btn-outline-info" type="submit" Value="Iniciar Sesion" name="submit" >Iniciar Sesion</button>
      
                                  <a class="btn btn-outline-success" href="Register.php">Registrar</a>

                                  <hr class="my-2">

                                  <a class="btn btn-outline-danger" href="Homepage.html">Regresar</a>
                                  
                                     <p class="mt-5 mb-3 text-muted">&copy; TurboNews 2022 </p>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <?php include('../templates/footer.php'); ?>