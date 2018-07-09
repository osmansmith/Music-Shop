<?php
 
 require_once '../datos/BD.php';
 session_start();
 $con = new BD();
 if(isset($_POST['usuario']) && isset($_POST['pass'])){
 $USUARIO = $_POST['usuario'];
 $PASS = $_POST['pass'];


 $con->sql = $con->my->query('SELECT * FROM usuario WHERE usuario_usu = "'.$USUARIO.'" and pass_usu = "'.$PASS.'"');

 if($auth = $con->sql->fetch_array(MYSQLI_ASSOC))
 {
    $_SESSION['user'] = $auth['usuario_usu'];    
    $_SESSION['email'] = $auth['correo_usu'];

    $jsondata['msj'] = 1;
    

 }else{

    $jsondata['msj'] = 2;       
    
 }
 }else{
    $jsondata['msj'] = 2; 
 }


 header("Content-Type: application/json", true);
 echo json_encode($jsondata);




?>