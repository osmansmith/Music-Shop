<?php
require_once '../datos/BD.php';
session_start();
$con = new BD();

if($_POST)
{

       $q = $_POST['filtro'];
       $con->sql = $con->my->query("SELECT * FROM producto WHERE (nombre_pro LIKE '%$q%' OR artista_pro LIKE '%$q%') OR (CONCAT(nombre_pro,' ',artista_pro) LIKE '%$q%') ORDER BY id_pro LIMIT 5");
         while($row=$con->sql->fetch_array(MYSQLI_ASSOC))
        {
            $nombre  = $row['nombre_pro'];
            $artista = $row['artista_pro'];
            $img     = $row['imagen_pro'];
            // $precio  = $row['precio_pro'];
            $re_nombre = '<b>'.$q.'</b>';
            $re_artista = '<b>'.$q.'</b>';
            $final_nombre = str_ireplace($q, $re_nombre, $nombre);
            $final_artista = str_ireplace($q, $re_artista, $artista);

            ?>
            <div class="display_box" align="left" onclick="fun('<?php echo $row['nombre_pro'] ?>')">
            <img src="dist/img/<?php echo $img;?>" width="20"/>
            <a class="nombre" id="<?php echo $row['id_pro']?>"><?php echo $final_nombre; ?></a>
            <a><?php echo $final_artista; ?><br/></a>            
            </div>
            <?php
        }
}
else
{}
?>