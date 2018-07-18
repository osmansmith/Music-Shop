<?php
require_once '../datos/BD.php';
$con = new BD();
if(isset($_POST['clave']) && !empty($_POST['clave']))
{
$con->sql = $con->my->query('SELECT * FROM producto WHERE id_pro = '.$_POST['clave'].'');
$cont;               
$file = $con->sql->fetch_array(MYSQLI_ASSOC);

$cont['nombre'] = $file['nombre_pro'];
$cont['fecha'] = $file['fecha_pro'];
$cont['artista'] = $file['artista_pro'];
$cont['precio'] = $file['precio_pro'];
$cont['genero'] = $file['id_genero_pro'];
$cont['stock'] = $file['stock_pro'];

header("Content-Type: application/json", true); 
echo json_encode($cont);
}else{
    $json['code'] = 'rojo'.$_POST['clave'];
    echo json_encode($json);
}





?>