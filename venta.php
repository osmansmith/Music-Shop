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
        <a class="py-2 d-none d-md-inline-block" href="index.php">Inicio</a>
       
        <a class="py-2 d-none d-md-inline-block" href="misionVision.php">Misión y Visión</a>
        <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ingresaProductos.php"> Ingresar Productos</a>
          <a class="dropdown-item" href="compraProductos.php">Comprar Productos</a>
          <a class="dropdown-item" href="actualizaProductos.php">Actualizar Productos</a>
          <!-- <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </div>
      <?php if(count($_SESSION) > 0){ ?>
        <a class="py-2 d-none d-md-inline-block" href="logica/cerrarSesion.php"><?php echo $_SESSION['user'].' (salir)';?></a>
           
<?php }else{?>
    <a class="py-2 d-none d-md-inline-block" href="registrarse.php">Registrarse</a>
        <a class="py-2 d-none d-md-inline-block" href="login.php">login</a>    
<?php }; ?>
      </div>
    </nav>

    <?php
     $con->sql = $con->my->query('SELECT * FROM producto WHERE id_pro ='.$_POST['clave']);
     $auth = $con->sql->fetch_array(MYSQLI_ASSOC);
    ?>
     
   <div class="container">
   <hr>
    <h2 class="display-4 text-center">Compra de productos</h2>
    <hr>
   <table class="table table-bordered">
        <thead class="thead-dark">
        <tr class="text-center">
            <th scope="col">Codigo</td>
            <th scope="col">Descripción</td>
            <th scope="col">Valor Unidad</td>
            <th scope="col">Cant</td>
            <th scope="col">Total</td>
            
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="text-center"><?php echo $auth['id_pro']?></td>
            <td><p>                
            Nombre del disco : <?php echo $auth['nombre_pro']?><br>
            Autor : <?php echo $auth['artista_pro']?><br>
            Año de lanzamiento : <?php echo $auth['fecha_pro']?><br>        
            </p></td>
            <td class="text-center precio" width="15%"><input type="number" class="form-control text-center disabled " id="precio" value="<?php echo $auth['precio_pro']?>" disabled></td>
            <td class="text-center" width="15%"><input type="number" min="1" pattern="^[0-9]+" class="form-control text-center cantidad" value="3"></td>
            <td class="text-center" width="15%"><input type="text" min="1" pattern="^[0-9]+" class="form-control text-center total disabled" disabled></td>
        </tr>
        <tr>
         <td colspan="4" class="text-right"><strong class="text-center">Total a pagar</strong></td>
         <td><input type="text" min="1" pattern="^[0-9]+" class="form-control text-center total disabled" disabled></td>
        </tr>
        </tbody>
    </table>
    <button class="btn btn-success btn-lg float-right comprar">Comprar</button>
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
      $(document).ready(function()
      {

          var unitario = $("#precio").val();
          var cant = $(".cantidad").val();
          var total = unitario * cant;          
          $(".total").val(total);

          $(".cantidad").change(function(e)
          {
            unitario = $("#precio").val();
            cant = $(".cantidad").val();
            total = unitario * cant;          
            $(".total").val(total);
             e.preventDefault();
          });

          $(".comprar").click(function(e){
            unitario = $("#precio").val();
            cant = $(".cantidad").val();
            total = unitario * cant; 
            if( total !=0 || total !='')
            {
                
              var datos ={
                  'clave' : '<?php echo $auth['id_pro']?>',
                  'fecha' : '<?php echo date('d/m/Y H:i:s');?>',
                  'correo' : '<?php echo $_SESSION['email']?>',
                  'cantidad' : cant,
                  'total' : total
              }
              $.ajax({
              url : 'logica/venta.php',
              data : datos,
              type : 'POST',
              datatype : 'json',
              success:function(result){
                switch(result.codigo)
                {
                 case 1:
                 alert('Transacción completada con exito');
                 location.href="compraProductos.php";
                 break;
                 case 2:
                 alert(result.msj);
                 break
                 default:
                 alert('Ah ocurrido un error grave, ojala no aparezca este mensaje :v');
                 break;
                }
              }
              });

            }else{
                alert('Porfavor ingrese un valor valido');
            }
            e.preventDefault();
          });
      });
    </script>
  </body>
</html>
