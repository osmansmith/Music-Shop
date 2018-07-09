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
        
    </article>
</section>
<footer>
    <p></p>
</footer>
<script src="dist/js/jquery.min.js"></script>
<script>
    $(document).ready(main);
 
 var contador = 1;
  
 function main(){
     $('.menu_bar').click(function(){
         // $('nav').toggle(); 
  
         if(contador == 1){
             $('nav').animate({
                 left: '0'
             });
             contador = 0;
         } else {
             contador = 1;
             $('nav').animate({
                 left: '-100%'
             });
         }
  
     });
  
 };
</script>
</body>
</html>