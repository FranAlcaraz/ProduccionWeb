<div class="container-fluid">
      
      
    <?php 
  
  include("../config/mysql.php");

try {
    $con = new PDO('mysql:host='.$hostname.';dbname='.$database.';port='.$port, $username,$password);
?>
<script>
    console.log("Conexion Exitosa");
</script>
<?php
    //print "Conexión exitosa!";
}
catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage();
    die();
}
    $productsMenu = 'ABM Productos'; 
	  
	  $select = "SELECT * FROM articulos;";
        $update = "vacio";
          $delete = "vacio";
          
    $artSelect = $con->query($select);
    ?>
               
        <div class="col-sm-9 col-md-10 main">
          
          <!--toggle sidebar button-->
         
          <br>
		  <h1 class="page-header text-center">
            <?=$productsMenu?>
            <hr>
            <br>
            <a href="index.php??seccion=abm_productos_alta"><button type="button" class="btn btn-success text-center" title="Nuevo Producto">Nuevo Producto</button></a>
          </h1>
          <br>
           
            
            <hr>
          <h2 class="sub-header">Listado</h2>
          <hr>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
               <tr>
                  <th>#ID</th>
                  <th>Nombre</th>
                  <th>Activa</th>
                  <th>Img ID</th> 
				  <th>Acciones</th>
                </tr>
              </thead>
			  <tbody>
                 <?php 
                  foreach($artSelect as $row){
                  ?>
                    	<tr>
						  <td><?=$row['ID_Articulo'];?></td>
						  <td><?=$row['Nombre_Articulo'];?></td>
						  <td><?php $a=$row['activo'];
                            if($a > 0){
                            echo '<p class="text-success">True</p>';
                            }else{
                            echo '<p class="text-danger">False</p>';
                            }?></td>
						  <td><?=$row['Imgname'];?></td> 
						  <td>
						      <a href="productos_m.php?edit=<?=$row['ID_Articulo'];?>"><button type="button" class="btn btn-info" title="Modificar">M</button></a>
							  <a href="productos_d.php?edit=<?=$row['ID_Articulo'];?>"><button type="button" class="btn btn-danger" title="Borrar">X</button></a>
<!--
                              <?php if($a > 0){ ?><a href="#"><button type="button" class="btn btn-warning" title="Desactivar" onclick="cambiarEstado()">Desactivar</button></a>
                              <?php }else{ ?>
                              <a href="#"><button type="button" class="btn btn-success" title="Activar" onclick="" >Activar</button></a>
                              <?php } ?>
-->
					      </td>
						</tr>
             <?php } ?>        
              </tbody>
            </table>
          </div>
 
          
      </div><!--/row-->
	</div><!--/.container-->
	
