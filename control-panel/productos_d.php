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
	  
         </h1>
         
         
         <div class="alert alert-danger">
             
             
              <strong>ALERTA!</strong> <br>Esta Seguro de querer eliminar el registro?
            </div>
            
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-primary">Link</button>
         </div>
    </div>