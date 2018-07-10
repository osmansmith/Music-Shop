<?php
 
 require_once '../datos/BD.php';
 $con = new BD();

 if(isset($_POST['user'])  && !empty($_POST['user']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['pass']) && !empty($_POST['pass'])){

 $user = $_POST['user'];
 $mail = $_POST['email'];
 $pass = $_POST['pass'];


//  $con->sql = $con->my->query('INSERT INTO usuario (usuario_usu,correo_usu,pass_usu) VALUES("'.$user.'","'.$mail.'","'.$pass.'")');
//  $filas = $con->sql->num_rows;
 if($con->my->query('INSERT INTO usuario (usuario_usu,correo_usu,pass_usu) VALUES("'.$user.'","'.$mail.'","'.$pass.'")'))
 {    
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