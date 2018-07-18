<?php 
      require_once 'datos/BD.php';
      session_start();
      $con = new BD();
?>
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
    <style>
    .shadow-lg {
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.8)!important;
}
      .card{
        transition: all 0.5s
      }
    </style>
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

    <hr>
    <h2 class="display-4 text-center">Productos</h2>
    <hr>
    <div class="row d-flex justify-content-center mb-4">
      <div class="col-4">
        <div class="d-flex bd-highlight">
        <div class="p-2 w-100 bd-highlight">
          <input type="text" class="form-control" id="filtro" class="filtro" placeholder="Buscar ...">
        </div>
        <div class="p-2 flex-shrink-1 bd-highlight">
        <button class="btn btn-info btn-md">Buscar</button>
        </div>
      </div>
      </div>
    </div>
    
    
    
        <div class="container">
           <div class="d-flex align-content-between flex-wrap text-center ">

           <?php                                     
                $con->sql = $con->my->query('SELECT * FROM producto');

                while($auth = $con->sql->fetch_array(MYSQLI_ASSOC))
                {
                  ?>
                    <div class="col my-2">
                    <div class="card " style="width: 17rem;">
                      <img class="card-img-top" src="dist/img/<?php echo $auth['imagen_pro']?>" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $auth['nombre_pro']?></h5>
                        <p class="card-text"> codigo : <?php echo $auth['id_pro']?><br>
                                              Precio : <?php echo $auth['precio_pro']?><br>
                                              Autor : <?php echo $auth['artista_pro']?><br>
                                              Stock : <?php echo $auth['stock_pro']?> </p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                      </div>
                    </div>                
                    </div>
                  <?php
                }                            
             ?>               
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
    <script>
    $(".card").hover(function(){
      $(this).addClass('shadow-lg');
    }, function(){
      $(this).removeClass('shadow-lg');
    });
    $("body").css("background","");
    
    </script>
  </body>
</html>
