<?php 
session_start();
include('../templates/header_Homepage.php'); 
?>


<!--
    Navbar
     <link rel="stylesheet"  type="text/css" href="/CSS/Homepage.css">

-->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">TurboNews</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          
              <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Home
                      <span class="visually-hidden">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Profile.html">Perfil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">

                  <?php
                    if(isset($_SESSION["user_email"])){
                        ?>
                        <a class="nav-link"> <?php echo $_SESSION["user_email"];?></a>
                        <?php
                    }else{
                        ?>
                         <a class="nav-link" href="Login.php">Login</a>
                         <?php
                        }
                        ?>


                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Secciones</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Politica</a>
                      <a class="dropdown-item" href="#">Economia</a>
                      <a class="dropdown-item" href="#">¿Que pasa hoy?</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Mexico</a>
                    </div>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-sm-2" type="text" placeholder="Search">
                  <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
          
<!--
    Cuerpo de la pagina
-->      
<div class="container">
<div class="bs-docs-section">
<div class="row">
<div class="col-lg-4">
            <div class="bs-component">
        <div class="wrapper">
          <div class="cards_wrap">
            <div class="card_item">
              <div class="card_inner">
                <div class="card_top">
                  <div class="card_creator">
                    Publicado por choma el 27 abr 2021, 22:00 
                  </div>
               <div class="card_category">
                Tech
              </div>
                </div>
        
                <div class="card_bottom">
                  <div class="card_info">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                </div>
                <div class="card_buttons">
                  <button type="button" class="btn btn-outline-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
        </svg>
                  </button>
        
                  <button type="button" class="btn btn-outline-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-text-paragraph" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
        </svg>
                  </button>
        
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

<div class="col-lg-4">
    <div class="bs-component">
<div class="wrapper">
  <div class="cards_wrap">
    <div class="card_item">
      <div class="card_inner">
        <div class="card_top">
          <div class="card_creator">
            Publicado por choma el 27 abr 2021, 22:00 
          </div>
       <div class="card_category">
        Tech
      </div>
        </div>

        <div class="card_bottom">
          <div class="card_info">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        </div>
        <div class="card_buttons">
          <button type="button" class="btn btn-outline-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
<path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
</svg>
          </button>

          <button type="button" class="btn btn-outline-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-text-paragraph" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
</svg>
          </button>

        </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="col-lg-4">
    <div class="bs-component">
<div class="wrapper">
  <div class="cards_wrap">
    <div class="card_item">
      <div class="card_inner">
        <div class="card_top">
          <div class="card_creator">
            Publicado por choma el 27 abr 2021, 22:00 
          </div>
       <div class="card_category">
        Tech
      </div>
        </div>

        <div class="card_bottom">
          <div class="card_info">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        </div>
        <div class="card_buttons">
          <button type="button" class="btn btn-outline-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
<path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
</svg>
          </button>

          <button type="button" class="btn btn-outline-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-text-paragraph" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
</svg>
          </button>

        </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>


<!--
    Agregar Noticia
-->     
<div class="bs-docs-section">
  <div class="row justify-content-center">
    <div  class="col-12 col-sm-4 col-md-4">
    
    <div class ="form-container">
      
                  
                  <h1 class="h3 mb-3 text-center"> Agregar noticia</h1>
                
                  <form class="was-validated" id="RegisterForm" enctype="multipart/form-data"  name="form" >
                    
                      <div class="form-floating">
                         
                                <input type="text" name="Title" class="form-control" id="floatingInput" placeholder="Titulo noticia" required autofocus>
                                <label for="floatingInput">Titulo</label>
                                 <div class="valid-feedback"> Valida  </div>
                                 <div class="invalid-feedback"> Favor de llenar el campo  </div>
                            </div>
                         
                      <hr>
                      <label for="floatingInput"> Descripcion de la noticia: </label>
                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
            
              <hr>
                      <label for="date">Fecha de publicacion:</label><div></div>
                      <input type="date" id="start" name="Fnews" min="1960-01-01" max="2020-12-31" required autofocus>
                      <hr>

                       <div class="form-label-group">
                        <input type="file" name="foto" class="form-control"  required>
                      </div>
                      
                  
                      <hr class="my-4">
                      
                       <input type="hidden" name="Accion" value="Publicar"/>
                       <button class="btn btn-outline-success btn-lg  text-center text-uppercase" type="submit" onclick="validar()">Publicar</button>
                
                       
                       
                  </form>
               
      </div>
    
      
</div>
</div>


</div>

<div class="bs-docs-section">
<div class="row">
    <div class="col-lg-8">
        <div class="bs-component">
    <div class="card mb-3">
      <h3 class="card-header">Card header</h3>
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <h6 class="card-subtitle text-muted">Support card subtitle</h6>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
        <rect width="100%" height="100%" fill="#868e96"></rect>
        <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
      </svg>
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    
      <div class="card-body">
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
      <div class="card-footer text-muted">
        2 days ago
      </div>
    </div>
</div>
</div>

</div>
</div>


<!--
    Footer
-->   
<footer class="bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright
    </div>
    <!-- Copyright -->
  </footer>

</div>

<?php include('../templates/footer.php'); ?>