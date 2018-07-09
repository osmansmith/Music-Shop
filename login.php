<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/css/main.css">
    <link rel="stylesheet" href="dist/css/style.css"> 
    <link rel="stylesheet" href="dist/css/login.css">
    <title>Music Shop</title>
</head>
<body>
<header>
		
<section class="login">
    <article>
     <h2>Iniciar sesión</h2>
     <form>
         <label for="" >Usuario</label><br>
         <input type="text" id="user"><br>
         <label for="">Contraseña</label><br>
         <input type="text" id="pass" ><br>
         <a href="registrarse.php">Usuario Nuevo?</a><br>
         <a href="index.php">Regresar al menu</a><br>
         <button id="enviar">Iniciar</button>
     </form>
    </article>
</section>
<footer>
    <p></p>
</footer>
<script src="dist/js/jquery.min.js"></script>
<script>
  $("#enviar").click(function(){
      var usuario = $("#user").val();
      var password = $("#pass").val();
      $.ajax({
          url : "logica/autenticar.php",
          type : "POST",
          data : "usuario="+usuario+"&pass="+password,
          datatype : "json",
          success: function(data){
              
              switch(data.msj)
              {
                  case 1:
                  location.href ="index.php";
                  break;
                  case 2:
                   alert('error en la conexión'+data.datos);
                  break;

              }
          }
      });
      return false;
  });
</script>
</body>
</html>