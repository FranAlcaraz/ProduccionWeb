<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="eCommerce">
        <meta name="author" content="FA - FM - NR">
        <link rel="icon" href="../../../../favicon.ico">

        <title>DVapor - Drinking Clouds</title>

        <link rel="stylesheet" href="../css/bootstrap.min.css">

        <style type="text/css">
            .starter-template {
                padding: 3rem 1.5rem;
                text-align: center;
            }
        </style>
        <?php include('includes/header-control.php'); 
            include('../config/mysql.php');
        ?>
    </head>

     
     <div class="container-fluid">
      
      <?php
	
         $producto = $_GET["edit"];
         
         
    $con = new PDO('mysql:host='.$hostname.';dbname='.$database.';port='.$port, $username,$password);


         
         $select = "SELECT * FROM articulos WHERE ID_Articulo = $producto";
         $producto = $con->query($select);
         
         

         
         
         
         
	?>
	
	
	 <div class="col-sm-9 col-md-10 main">
          
          <!--toggle sidebar button-->

          
	  <h1 class="page-header">
            Productos
          </h1>
  <?php
         foreach($producto as $row){
             $marcaPr = $row['ID_Marca'];
             $categoriaPr = $row['ID_Categoria'];
             
             //$marca = "SELECT Nombre_Marca FROM marca WHERE ID_Marca = $marcaPr";
             //$categoria = "SELECT Nombre_Categoria FROM categoria WHERE ID_Categoria = $categoriaPr";
             
             
             
         
         ?>
          <div class="col-md-2"></div>
            <form action="usuarios.php" method="post" class="col-md-6 from-horizontal">
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="<?php echo $row["Nombre_Articulo"];?>">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Precio</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="precio" name="precio" placeholder="" value="<?php echo $row["Precio"];?>">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Descripcion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="" value="<?php echo $row["Articulo_Descripcion"];?>">
                    </div>
                </div> 
                
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Marca</label>
                    <div class="col-sm-10">
                       
 
  <select class="form-control" id="sel1">
   
   <?php
                $marca = "SELECT * FROM marca";
                $qmarca = $con->query($marca);
                foreach($qmarca as $m){

                ?>
                <option value="<?php echo $m['ID_Marca'];?>"><?php echo $m['Nombre_Marca'];?></option>
                <?php
                };

                ?>

                  </select>
                </div>
                    </div>
               
               
               
            <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Categoria</label>
                    <div class="col-sm-10">
                       
 
  <select class="form-control" id="sel2">
   
   <?php
                $categoria = "SELECT * FROM categoria";
                $qcategoria = $con->query($categoria);
                foreach($qcategoria as $q){

                ?>
                <option value="<?php echo $q['ID_Categoria'];?>"><?php echo $q['Nombre_Categoria'];?></option>
                <?php
                };

                ?>

                  </select>
                </div>
                    </div>
                    
                    
                    
                                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Categoria</label>
                    <div class="col-sm-10">
                       
 
  <select class="form-control" id="sel2">
   
   <?php
                $scategoria = "SELECT * FROM subcategoria";
                $qscategoria = $con->query($scategoria);
                foreach($qscategoria as $s){

                ?>
                <option value="<?php echo $s['ID_Subcategoria'];?>"><?php echo $s['Subcategoria'];?></option>
                <?php
                };

                ?>

                  </select>
                </div>
                    </div>


   
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                        <input type="checkbox" name="activo" value=""<?php
                              if($row["activo"] == 1) {
                                  echo 'checked';
                                  
                              };                                    
                                                                    
                                      ?>                              
                                    >                                
                             Activo
                        </label>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="submit" >Guardar</button>
                    </div>
                </div> 
                <input type="hidden" class="form-control" id="id_usuario" name="id_usuario" placeholder="" value="<?=isset($usuario->id_usuario)?$usuario->id_usuario:'';?>">

            </form>
          </div>
 
          
      </div><!--/row-->
	
 <?php
             
         };
    
    
    
    
    ?>
	



