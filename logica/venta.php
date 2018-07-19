<?php
require_once '../datos/BD.php';
$con = new BD();

if(isset($_POST['clave']) && !empty($_POST['clave']))
{
  $con->sql =  $con->my->query('INSERT INTO venta(fecha_ven,
                                      correo_ven,
                                      id_pro,
                                      cantidad_pro,
                                      total_pro)
                                 VALUES(
                                     "'.$_POST['fecha'].'",
                                     "'.$_POST['correo'].'",
                                     '.$_POST['clave'].',
                                     '.$_POST['cantidad'].',
                                     '.$_POST['total'].'                                     
    
                                     )');
    $res['codigo'] = 1;

    $stk = $con->my->query("SELECT stock_pro FROM producto WHERE id_pro = ".$_POST['clave']);  
    $stk2  = $stk->fetch_array(MYSQLI_ASSOC);                         
    $stock = $stk2['stock_pro'] - $_POST['cantidad'];    
    $con->my->query('UPDATE producto SET     
    stock_pro = '.$stock.'
    WHERE id_pro ='.$_POST['clave']
    );
    

        
}else{
    $res['codigo'] = 2;  
    $res['msj'] = "Error en el envio, intentelo nuevamente";
    
}

header("Content-Type: application/json", true);
echo json_encode($res);
?>