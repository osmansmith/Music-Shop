<?php 
      require_once '../datos/BD.php';
      session_start();
      $con = new BD();
?>
<div class="d-flex align-content-between flex-wrap text-center ">

           <?php    
               if(isset($_POST['filtro']) && !empty($_POST['filtro']))
               {
                $con->sql = $con->my->query('SELECT * FROM producto WHERE nombre_pro ="'.$_POST['filtro'].'"'); 
               }else{                                 
                $con->sql = $con->my->query('SELECT * FROM producto WHERE stock_pro > 0');
               }
                while($auth = $con->sql->fetch_array(MYSQLI_ASSOC))
                {
                  ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 my-2 card-deck">
                    <div class="card " style="width: 17rem;">
                      <img class="card-img-top" src="dist/img/<?php echo $auth['imagen_pro']?>" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $auth['nombre_pro']?></h5>
                        <p class="card-text"> codigo : <?php echo $auth['id_pro']?><br>
                                              Precio : <?php echo '$'.$auth['precio_pro']?><br>
                                              Autor : <?php echo $auth['artista_pro']?><br>
                                              Stock : <?php echo $auth['stock_pro']?> 
                        </p>
                        <form action="venta.php" method="post">
                        <input type="hidden" name="clave" id="clave" value="<?php echo $auth['id_pro']?>">
                        <button type="submit" class="btn btn-primary">Comprar</button>
                        </form>
                        
                      </div>
                    </div>                
                    </div>
                  <?php
                }                            
             ?>               
        </div> 