<?php 

//include ('config/mysql.php');


        try {
              $con = new PDO('mysql:host='.$hostname.';dbname='.$database, $username,$password);
            
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
if (isset($_GET['marcas'])){
$mcs = isset($_GET['marcas']) ? $_GET['marcas'] : 'productos'; 
            
            switch($mcs){
                case '1':
                case '2':
                case '3':
                case '4':
                    $sql="SELECT * FROM Articulos WHERE ID_Marca=$mcs";
                break;
                default:
                    $sql="SELECT * FROM Articulos";
            }
}else if(isset ($_GET['categoria'])){
$cat = isset($_GET['categoria']) ? $_GET['categoria'] : 'productos'; 
            
            switch($cat){
                case '1':
                case '2':
                case '3':
                case '4':
                    $sql="SELECT * FROM Articulos WHERE ID_Categoria=$cat";
                break;
                default:
                    $sql="SELECT * FROM Articulos";
            }
}else{
    $sql="SELECT * FROM Articulos";
}


    ?>




<div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Shop Name</h1>
          <div class="list-group">
           <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle"
                  type="button" id="dropdownMenu1" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
            Marcas
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <?php echo '<a class="dropdown-item" href="index.php?seccion=productos&marcas=1">SMOK</a>'?>
            <a class="dropdown-item" href="index.php?seccion=productos&marcas=2">VAPORESSO</a>
            <a class="dropdown-item" href="index.php?seccion=productos&marcas=3">VOOPOO</a>
            <a class="dropdown-item" href="index.php?seccion=productos&marcas=4">IJOY</a>
          </div>
        </div>
        <br>
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle"
                  type="button" id="dropdownMenu1" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
            Categorias
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <a class="dropdown-item" href="index.php?seccion=productos&categoria=1">Atomizador</a>
            <a class="dropdown-item" href="index.php?seccion=productos&categoria=2">Mods</a>
            <a class="dropdown-item" href="index.php?seccion=productos&categoria=3">Liquidos</a>
            <a class="dropdown-item" href="index.php?seccion=productos&categoria=4">Resistencias</a>
            <a class="dropdown-item" href="index.php?seccion=productos&categoria=5">Tanques</a>
          </div>
        </div>
        <br>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
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

          <div class="row">
            <?php
             // $sql = "SELECT * FROM Articulos";
              
            $art = $con->query($sql);
        
              foreach($art as $row){
           
              ?>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/<?=$row['Imgname']?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?=$row['Nombre_Articulo']?></a>
                  </h4>
                  <h5>$<?=$row['Precio'];?></h5>
                  <p class="card-text"><?=$row['Articulo_Descripcion'];?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
<?php
              
              }
              ?>
            

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->