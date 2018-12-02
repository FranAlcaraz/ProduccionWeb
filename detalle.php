<?php 
//include ('config/mysql.php');
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

$sql='SELECT * FROM Articulos WHERE ID_Articulo = '.$_GET['id'];
$art = $con->query($sql);
foreach($art as $row){
?>
<div class="container-fluid justify-content-center">
    
        <div class="row container">
            <div class="col-6">

                <!-- Carousel -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/<?php echo $row['Imgname'].".jpg"?>"  alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/<?php echo $row['Imgname']."2.jpg"?>"  alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/<?php echo $row['Imgname']."3.jpg"?>" alt="Second slide">
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
            <div class="col-6">
            <hr>
            <h2 class="text-center">
                <?php echo $row['Nombre_Articulo'];?>
            </h2>
            <hr>
            <br>
                       <dl>
                        <dt>
                            <h4><strong>Precio: $<?php echo $row['Precio']; ?></strong></h4>
                            <br>
                        </dt>
                        <dd>
                           <br>
                            <?php echo $row['Articulo_Descripcion']; }?>
                            <br>
                        </dd>
                        <dd>
                            <br>
                            <p>Calificación: &#9733; &#9733; &#9733; &#9733; &#9734;</p>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>