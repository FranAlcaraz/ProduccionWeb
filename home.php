<?php

include("config/mysql.php");
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




?>
<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- /.col-lg-3 -->

        <div class="col-lg-12">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                       
                        <img class="d-block img-fluid" src="img/slider1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="img/slider2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="img/slider3.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
                
        
             <h3 class="justify-content-center">Productos Destacados</h3>
            <div class="row justify-content-center">
              
              <?php

                for($i=0; $i<=5 ;$i++){
                $min = 1;
                $max = 20;
                $alea = rand($min, $max);
                
                $sql3 = "SELECT * FROM articulos WHERE ID_Articulo = '$alea';";
                $count = $con->query($sql3);
                 foreach ($count as $row) { 
                  
                ?>
                    <div class="col-md-2 col-md-2 mb-2">
                      <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="img/<?=$row['Imgname'].".jpg"?>" data-toggle="modal" data-target="#<?=$row['ID_Articulo'];?>" alt=""></a>
                        <div class="card-body">
                          <h4 class="card-title">
                            <a href="#" data-toggle="modal" data-target="#<?=$row['ID_Articulo'];?>" class="nombreArt"><?=$row['Nombre_Articulo']?></a>
                          </h4>
                          <h5>$<?=$row['Precio'];?></h5>
                          <p class="card-text"><?=$row['Articulo_Descripcion'];?></p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                      </div>
                    </div>
                         
                         
                          <div class="modal fade" id="<?=$row['ID_Articulo'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="<?=$row['ID_Articulo'];?>"><?=$row['Nombre_Articulo']?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?=$row['Articulo_Descripcion'];?>

                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="img/<?php echo $row['Imgname'].".jpg"?>" data-src="holder.js/900x400?theme=social" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="img/<?php echo $row['Imgname']."2.jpg"?>" data-src="holder.js/900x400?theme=industrial" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="img/<?php echo $row['Imgname']."3.jpg"?>" data-src="holder.js/900x400?theme=industrial" alt="Second slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                        
                        
                        <?php
                }
                    
                }
                
                ?>
              
              </div>
              <br>
              <div class="row">
               <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                  <h3 class="card-header">Mods</h3>
                  <div class="card-body">
                    <!--h4 class="card-title">Special title treatment</h4>-->
                    <img src="img/mods.jpg" alt="Mods" width="300" height="300">
                    <a href="index.php?seccion=productos&categoria=2" class="btn btn-primary">Ver Más</a>
                  </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                  <h3 class="card-header">Liquidos</h3>
                  <div class="card-body">
                   <img src="img/liquidos.jpg" alt="liquidos">
                    <!--<h4 class="card-title">Special title treatment</h4>-->
                    <a href="index.php?seccion=productos&categoria=3" class="btn btn-primary">Ver Más</a>
                  </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                  <h3 class="card-header">Vape Tanks</h3>
                  <div class="card-body">
                    <img src="img/vapetank.jpg" alt="tanks">
                    <a href="index.php?seccion=productos&categoria=1" class="btn btn-primary">Ver Más</a>
                  </div>
                </div>
                
                </div>
 
            </div>
        </div>
    </div>
</div>


            


