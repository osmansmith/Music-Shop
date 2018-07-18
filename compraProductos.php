<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>Tux Music</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/producto.css" rel="stylesheet">
  </head>

  <body>

    <nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="index.php">Inicio</a>
       
        <a class="py-2 d-none d-md-inline-block" href="misionVision.php">Misión y Visión</a>
        <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="ingresaProductos.php"> Ingresar Productos</a>
          <a class="dropdown-item" href="#">Comprar Productos</a>
          <a class="dropdown-item" href="actualizaProductos.php">Actualizar Productos</a>
          <!-- <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </div>
        <a class="py-2 d-none d-md-inline-block" href="registrarse.php">Registrarse</a>
        <a class="py-2 d-none d-md-inline-block" href="login.php">login</a>       
      </div>
    </nav>

    <!-- <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Tux Music</h1>
        <p class="lead font-weight-normal">Revisa nuestras ofertas, y adquiere tu musica favorita.</p>
        <a class="btn btn-outline-secondary" href="#">Productos</a>
      </div>
      <div class="product-device box-shadow d-none d-md-block"></div>
      <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div> -->

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="row justify-content-center text-center">
                <div class="col-3">
                <h2 class="h2">Ingresar productos</h2>
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nombre de usuario .." required></td>                                                      
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre(s) .." required></td>                                                      
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido(s) .." required></td>                                                      
                    </tr>
                    <tr>
                        <td><input type="email" class="form-control" id="correo" name="correo" placeholder="Correo email" required></td>
                    </tr>
                    <tr>
                        <td><input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" required></td>
                    </tr>
                    <tr>
                        <td><button id="guardar" class="btn btn-success guardar" >guardar</button></td>
                    </tr>
                    </tbody>
                </table> 
                </div>
            </div>
      </div>
     
    </div>    

    <footer class="container py-5">
      <div class="row">
        <div class="col-12 text-center">
          <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg> -->
          <p class="lead">Tux Music</p><small class="d-block mb-3 text-muted">&copy; 2018</small>
        </div>
        
      </div>
    </footer>
    
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
