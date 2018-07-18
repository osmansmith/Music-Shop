<?php
require_once '../datos/BD.php';
$con = new BD();
if(isset($_POST['clave']) && !empty($_POST['clave']))
{
$con->sql = $con->my->query('SELECT * FROM producto WHERE id_pro = '.$_POST['clave'].'');
$cont;               
$file = $con->sql->fetch_array(MYSQLI_ASSOC);

$cont['datos'] = $file['nombre_pro'];
$cont['datos'] = $file['fecha_pro'];
$cont['datos'] = $file['artista_pro'];
$cont['datos'] = $file['imagen_pro'];
$cont['datos'] = $file['precio_pro'];
$cont['datos'] = $file['id_genero_pro'];
$cont['datos'] = $file['stock_pro'];


echo json_encode($cont);
}else{
    $json['code'] = 'rojo'.$_POST['clave'];
    echo json_encode($json);
}





?>