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
      #buscar
      {
      width:250px;
      border:solid 1px #000;
      padding:3px;
      }
      #caja
      {
      min-width:150px;
      display:none;
      float:right; margin-right:30px;
      border-left:solid 1px #dedede;
      border-right:solid 1px #dedede;
      border-bottom:solid 1px #dedede;
      overflow:hidden;
      }
      .display_box
      {
      padding:4px; 
      border-top:solid 1px #dedede; 
      font-size:12px; 
      height:30px;
      cursor:pointer;
      }
      .display_box:hover
      {
      background:#3b5998;
      color:#FFFFFF;
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
    <div class="container">
      <hr>
      <h2 class="display-4 text-center">Productos</h2>
      <hr>
    </div>
    
    <div class="row d-flex justify-content-center mb-4">
      <div class="col-4">
        <div class="d-flex bd-highlight">
        <div class="p-2 w-100 bd-highlight">
        <input type="text" class="form-control search" id="searchbox" placeholder="Buscar ..." />
        <div id="display">          
        </div>
        <div class="p-2 flex-shrink-1 bd-highlight">
        <button class="btn btn-info btn-md buscar">Buscar</button>
        </div>
      </div>
      </div>
    </div>
    
    
    
        <div class="container pro">
                
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
    $(document).ready(function(){
$(".search").keyup(function() 
{
var searchbox = $(this).val();
var dataString = 'filtro='+ searchbox;
if(searchbox=='')
{}
else
{
$.ajax({
type: "POST",
url: "logica/busqueda.php",
data: dataString,
cache: false,
success: function(html)
{
$("#display").html(html).show();
}
});
}return false; 
});




});
    $(".card").hover(function(){
      $(this).addClass('shadow-lg');
    }, function(){
      $(this).removeClass('shadow-lg');
    });

    
  function fun(dato)
  {
    $(".search").val(dato)
  }
     
  $.ajax({
    url : 'logica/listarCompra.php',    
    success:function(productos){
      $('.pro').html(productos);
    }
  });
  
  $('.buscar').click(function(e){
    var fil = $(".search").val();
    $.ajax({
    url : 'logica/listarCompra.php',
    type : 'POST',
    data : 'filtro='+fil,
    success:function(productos){
      $('.pro').html(productos);
    }
  });
  e.preventDefault();
  });

    </script>
  </body>
</html>
