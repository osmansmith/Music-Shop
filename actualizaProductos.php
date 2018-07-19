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
  </head>

  <body>

    <nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="#">Inicio</a>
       
        <a class="py-2 d-none d-md-inline-block" href="misionVision.php">Misión y Visión</a>
        <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="ingresaProductos.php"> Ingresar Productos</a>
          <a class="dropdown-item" href="compraProductos.php">Comprar Productos</a>
          <a class="dropdown-item" href="#">Actualizar Productos</a>
          <!-- <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </div>
        <a class="py-2 d-none d-md-inline-block" href="registrarse.php">Registrarse</a>
        <a class="py-2 d-none d-md-inline-block" href="login.php">login</a>       
      </div>
    </nav>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="row justify-content-center text-center">
                <div class="col-4">
                <p class="statusMsg"></p>
                <h2 class="h2">Actualizar productos</h2>
                <form enctype="multipart/form-data" id="ingrePro">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        
                        <td>
                        <div class="d-flex bd-highlight">
                        <div class="p-2 w-100 bd-highlight"><select name="clave" id="clave" class="form-control">
                        <option value="">Seleccione id de producto</option>
                        <?php                                     
                            $con->sql = $con->my->query('SELECT id_pro FROM producto');

                            while($auth = $con->sql->fetch_array(MYSQLI_ASSOC))
                            {
                                echo '<option value="'.$auth['id_pro'].'">'.$auth['id_pro'].'</option>';
                            }
                            
                            ?>
                        </select></div>
                        <div class="p-2 flex-shrink-1 bd-highlight"><a class="btn btn-success buscar">buscar</a></div>
                        </div>
                        
                        
                        </td>                                                      
                    </tr>
                    <tr>
                        <input type="hidden" id="opc" name="opc" value="actualizar" >
                        <td><input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Nombre producto .." required></td>                                                      
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" id="fecha" name="fecha" placeholder="Año lanzamiento" required></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" id="artista" name="artista" placeholder="Artista o agrupación" required></td>
                    </tr>                    
                    <tr>
                        <td><input type="file" class="form-control" id="imagen" name="imagen" placeholder="caratula" /></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" id="precio" name="precio" placeholder="Precio" required></td>
                        
                    </tr>
                    <tr>
                        <td><select name="genero" id="genero" name="genero" name="genero" class="form-control" required>
                            
                        <?php                                     
                            $con->sql = $con->my->query('SELECT * FROM genero');

                            while($auth = $con->sql->fetch_array(MYSQLI_ASSOC))
                            {
                                echo '<option value="'.$auth['id_genero'].'">'.$auth['nombre'].'</option>';
                            }
                            
                            ?>
                            </select></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" id="stock" name="stock" placeholder="stock" required></td>
                        
                    </tr>
                    <tr>
                        <td><button id="guardar" class="btn btn-warning btn-lg guardar" >Actualizar</button></td>
                    </tr>
                    </tbody>
                </table> 
                </form>
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
    <script>
$(document).ready(function(){
    // $("#ingrePro").on('submit', function(e){
       
    //     $.ajax({
    //         type: 'POST',
    //         url: 'logica/crudPro.php',
    //         data: new FormData(this),
    //         contentType: false,
    //         cache: false,
    //         processData:false,
    //         beforeSend: function(){
    //             $('.guardar').attr("disabled","disabled");
    //             $('#ingrePro').css("opacity",".5");
    //         },
    //         success: function(msg){
    //             $('.statusMsg').html('');
    //             if(msg == 'ok'){
    //                 $('#ingrePro')[0].reset();
    //                 $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Los datos han sido guardados, exitosamente.</span>');
    //             }else{
    //                 $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">A ocurrido un problema, intentelo nuevamente.</span>');
    //             }
    //             $('#ingrePro').css("opacity","");
    //             $(".guardar").removeAttr("disabled");
    //         }
    //     });
    //     e.preventDefault();
    // });
    
    // funcion para validar solo imagenes en el campo file
    $("#imagen").change(function() {
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["image/jpeg","image/png","image/jpg"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
            alert('Porfavor escoja una imagen valida (JPEG/JPG/PNG).');
            $("#imagen").val('');
            return false;
        }
    });
    $(".buscar").click(function(e){
        var clave = $("#clave").val();
    $.ajax({
        url: "logica/listaProducto.php",   
        type: "POST",     
        data: "clave="+clave,
        datatype : "json",
        success:function(data)
        {
            console.log(data);
            $("#nombre").val(data.nombre);
            $("#fecha").val(data.fecha);
            $("#artista").val(data.artista);        
            $("#precio").val(data.precio);
            $("#genero").val(data.genero);
            $("#stock").val(data.stock);
        }
    });
    e.preventDefault();
    });
});
</script>
  </body>
</html>
