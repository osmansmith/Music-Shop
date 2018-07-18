<?php
 
 require_once '../datos/BD.php';
 session_start();
 $con = new BD();
 if(isset($_POST['usuario']) && isset($_POST['pass'])){
 $USUARIO = $_POST['usuario'];
 $PASS = $_POST['pass'];


 $con->sql = $con->my->query('SELECT * FROM usuario WHERE usuario_usu = "'.$USUARIO.'" and clave_usu = "'.$PASS.'"');

 if($auth = $con->sql->fetch_array(MYSQLI_ASSOC))
 {
    $_SESSION['user'] = $auth['usuario_usu'];    
    $_SESSION['email'] = $auth['correo_usu'];

    $jsondata['codigo'] = 1;
    

 }else{

    $jsondata['codigo'] = 2;       
    $jsondata['mensaje'] = "Usuario no registrado";       
    
 }
 }else{
    $jsondata['codigo'] = 2; 
    $jsondata['mensaje'] = "Error en la conexión";       
 }


 header("Content-Type: application/json", true);
 echo json_encode($jsondata);




?>