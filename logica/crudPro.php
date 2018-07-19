<?php
require_once '../datos/BD.php';
$con = new BD();

switch($_POST['opc'])
{
    case "insertar":

    if(!empty($_FILES['imagen']['name']))
    {
        $uploadedFile = '';
        if(!empty($_FILES["imagen"]["type"]))
        {
            $fileName = time().'_'.$_FILES['imagen']['name'];
            $valid_extensions = array("jpeg", "jpg", "png");
            $temporary = explode(".", $_FILES["imagen"]["name"]);
            $file_extension = end($temporary);

            if((($_FILES["imagen"]["type"] == "image/png") || ($_FILES["imagen"]["type"] == "image/jpg") || 
                ($_FILES["imagen"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions))
            {
                $sourcePath = $_FILES['imagen']['tmp_name'];
                $targetPath = "../dist/img/".$fileName;

                if(move_uploaded_file($sourcePath,$targetPath))
                {
                    $uploadedFile = $fileName;
                }
            }
        }
                    
        $insert = $con->my->query('INSERT INTO producto (
                                  nombre_pro,
                                  fecha_pro,
                                  artista_pro,
                                  imagen_pro,
                                  precio_pro,
                                  id_genero_pro,
                                  stock_pro
                                  ) VALUES (
                                   "'.$_POST['nombre'].'" ,
                                   "'.$_POST['fecha'].'" ,
                                   "'.$_POST['artista'].'" ,
                                   "'.$uploadedFile .'" ,
                                   '.$_POST['precio'].' ,
                                   '.$_POST['genero'].' ,
                                   '.$_POST['stock'].' 
                                  )');
        
        echo $insert?'ok':'err';
    }
    break;
    case "actualizar":
    
    $uploadedFile = '';

        if(!empty($_FILES["imagen"]["type"]))
        {
            $fileName = time().'_'.$_FILES['imagen']['name'];
            $valid_extensions = array("jpeg", "jpg", "png");
            $temporary = explode(".", $_FILES["imagen"]["name"]);
            $file_extension = end($temporary);

            if((($_FILES["imagen"]["type"] == "image/png") || ($_FILES["imagen"]["type"] == "image/jpg") || 
                ($_FILES["imagen"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions))
            {
                $sourcePath = $_FILES['imagen']['tmp_name'];
                $targetPath = "../dist/img/".$fileName;

                if(move_uploaded_file($sourcePath,$targetPath))
                {
                    $uploadedFile = $fileName;
                }
            }



            $con->my->query('UPDATE producto SET 
            nombre_pro = "'.$_POST['nombre'].'",
            fecha_pro = "'.$_POST['fecha'].'",
            artista_pro = "'.$_POST['artista'].'",
            imagen_pro = "'.$uploadedFile.'",
            precio_pro = '.$_POST['precio'].',
            id_genero_pro = '.$_POST['genero'].',
            stock_pro = '.$_POST['stock'].'
            WHERE id_pro ='.$_POST['clave']
            );
           
            echo "ok";
        }else{

    $con->my->query('UPDATE producto SET 
                 nombre_pro = "'.$_POST['nombre'].'",
                 fecha_pro = "'.$_POST['fecha'].'",
                 artista_pro = "'.$_POST['artista'].'",                 
                 precio_pro = "'.$_POST['precio'].'",
                 id_genero_pro = "'.$_POST['genero'].'",
                 stock_pro = "'.$_POST['stock'].'"
                 WHERE id_pro ='.$_POST['clave']
                 );
                 echo "ok";
        }

    break;
    case "eliminar":
    break;







}