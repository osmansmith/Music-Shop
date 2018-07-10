<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/css/main.css">
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="stylesheet" href="dist/css/registrarse.css">
    <title>Music Shop</title>
</head>
<body>
<header>
		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-menu"></span>Menu</a>
		</div>
 
		<nav>
			<ul>
				<li><a href="index.php"><span class="icon-home"></span>Inicio</a></li>
				<li><a href="misionVision.php"><span class="icon-tux"></span>Misión y Visión</a></li>
				<li><a href="productos.php"><span class="icon-music"></span>Productos</a></li>
				<li><a href="#"><span class="icon-user-plus"></span>Registrarse</a></li>
				<li><a href="login.php"><span class="icon-user"></span>login</a></li>
			</ul>
		</nav>
</header>
<section class="registro">
    <article>
        <h2>Registrarse</h2>
        <table width="100">
            <thead>
              <tr>
                  <th>Registrarse</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td><input type="text" id="usuario" placeholder="Nombre de usuario .."></td>                                                      
              </tr>
              <tr>
                  <td><input type="email" id="correo" placeholder="Correo email"></td>
              </tr>
               <tr>
                  <td><input type="password" id="pass" placeholder="Contraseña"></td>
               </tr>
               <tr>
                  <td><button id="guardar" >guardar</button></td>
               </tr>
            </tbody>
        </table>
        
    </article>
</section>
<footer>
    <p></p>
</footer>
<script src="dist/js/jquery.min.js"></script>
<script src="dist/js/menu.js" ></script>
<script>
  $("#guardar").click(function(){
      var usuario = $("#usuario").val();
      var correo = $("#correo").val();
      var password = $("#pass").val();
      var todo = {
          'user'  : usuario,
          'email' : correo,
          'pass'  : password
      };
      $.ajax({
          url : "logica/registrar.php",
          type : "POST",
          data : todo,
          datatype : "json",
          success: function(data){
              
              switch(data.msj)
              {
                  case 1:
                   $("#usuario").val('');
                   $("#correo").val('');
                   $("#pass").val('');
                   alert('Datos registrados con exito. :)');
                  break;
                  case 2:
                   alert('Error en la conexión ó falta de datos, por favor rellene todos los campos ');
                  break;

              }
          }
      });
      return false;
  });
</script>
</body>
</html>