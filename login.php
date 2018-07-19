
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <link rel="icon" href="../../../../favicon.ico"> -->
    <title>Tux Music | Login</title>
    <!-- css externo -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/login.css" rel="stylesheet">
    <link href="dist/css/animate.css" rel="stylesheet">

    <style>
    body {
        background-image: url("dist/img/music2.jpg");
        background-size:100% 100%;
        background-repeat: no-repeat;
        background-position: center left;
        }
        
    </style>
  </head>

  <body class="text-center">
    <form class="form-signin" id="ingresar">
      
      <img class="mb-4" src="dist/img/tuxIcono.png" alt="Imagen tux" title="Imagen tux" width="150" height="150">

      <h1 class="h3 mb-3 font-weight-normal text-white">Iniciar Sesión</h1>
      <label for="inputEmail" class="sr-only">Usuario</label>
      <input type="text"  class="form-control my-2" id="user" name="user" placeholder="Usuario" required autofocus oninvalid="this.setCustomValidity('Porfavor, ingrese un nombre de usuario')"
    oninput="this.setCustomValidity('')">
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password"  class="form-control" id="pass" name="pass" placeholder="Contraseña" required oninvalid="this.setCustomValidity('Porfavor, ingrese una contraseña')"
    oninput="this.setCustomValidity('')">
      
      <button class="btn btn-lg btn-warning btn-block mb-4" id="enviar" type="submit">Ingresar</button>
      
        <p>
          <a href="index.php" class="text-white mt-0 ">Volver al menú</a>
        </p>
        <p>
          <a href="registrarse.php" class="text-white">Registrarse</a>
        </p>
      
      <p class="mt-5 mb-3 text-muted">Tux Music &copy; 2018</p>
    </form>
    
<script src="dist/js/jquery.min.js"></script>
<script>
  $("#ingresar").submit(function(e){
         $("#user").removeClass('animated shake');
         $("#pass").removeClass('animated shake');

      var usuario = $("#user").val();
      var password = $("#pass").val();
      
      $.ajax({
          url : "logica/autenticar.php",
          type : "POST",
          data : "usuario="+usuario+"&pass="+password,
          datatype : "json",
          success: function(data){
              
              switch(data.codigo)
              {
                  case 1:
                  location.href ="index.php";
                  break;
                  case 2:
                  
                   alert(data.mensaje);
                   animacion();
                   limpiar();
                
                  break;

              }
          }
      });
      e.preventDefault();
  });
  function animacion()
  {    
    $("#user").addClass('animated shake');
    $("#pass").addClass('animated shake');
  }
  function limpiar()
  {
    $("#user").val('');
    $("#pass").val('');
    
  }
</script>
</body>
</html>


		
