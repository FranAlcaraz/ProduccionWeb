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
if (isset($_GET['marcas']) && isset($_GET['categoria']) ){
    $mcs = isset($_GET['marcas']) ? $_GET['marcas'] : 'productos';
    $cat = isset($_GET['categoria']) ? $_GET['categoria'] : 'productos';    
            
            switch($mcs){
                case '1':
                case '2':
                case '3':
                case '4':
                    $sql="SELECT * FROM Articulos WHERE ID_Marca=$mcs AND ID_Categoria=$cat";
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
}else if(isset ($_GET['marcas'])){
$marc = isset($_GET['marcas']) ? $_GET['marcas'] : 'productos'; 
            
            switch($marc){
                case '1':
                case '2':
                case '3':
                case '4':
                    $sql="SELECT * FROM Articulos WHERE ID_Marca=$marc";
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

          <h1 class="my-4">Productos</h1>
          <hr>
          <h3>Marcas</h3>
          <div class="list-group">
          <div class="btn-group">
          <a href="index.php?seccion=productos&marcas=1"><button type="button" class="btn btn-primary btn-block">SMOK</button></a>
          <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="index.php?seccion=productos&marcas=1&categoria=1">Atomizadores</a>
            <a class="dropdown-item" href="index.php?seccion=productos&marcas=1&categoria=2">Mods</a>
            <a class="dropdown-item" href="index.php?seccion=productos&marcas=1&categoria=4">Resistencias</a>
          </div>
            </div>
            <br>
            <div class="btn-group">
          <a href="index.php?seccion=productos&marcas=2"><button type="button" class="btn btn-primary btn-block">VAPORESSO</button></a>
          <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="index.php?seccion=productos&marcas=2&categoria=1">Atomizadores</a>
            <a class="dropdown-item" href="index.php?seccion=productos&marcas=2&categoria=2">Mods</a>
            <a class="dropdown-item" href="index.php?seccion=productos&marcas=2&categoria=4">Resistencias</a>
          </div>
            </div>
            <br>
            <div class="btn-group">
          <a href="index.php?seccion=productos&marcas=3"><button type="button" class="btn btn-primary btn-block">VOOPOO</button></a>
          <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="index.php?seccion=productos&marcas=3&categoria=1">Atomizadores</a>
            <a class="dropdown-item" href="index.php?seccion=productos&marcas=3&categoria=2">Mods</a>
            <a class="dropdown-item" href="index.php?seccion=productos&marcas=3&categoria=4">Resistencias</a>
          </div>
            </div>
            <br>
            <div class="btn-group">
          <a href="index.php?seccion=productos&marcas=1"><button type="button" class="btn btn-primary btn-block">IJOY</button></a>
          <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="index.php?seccion=productos&marcas=4&categoria=1">Atomizadores</a>
            <a class="dropdown-item" href="index.php?seccion=productos&marcas=4&categoria=2">Mods</a>
            <a class="dropdown-item" href="index.php?seccion=productos&marcas=4&categoria=4">Resistencias</a>
          </div>
            </div>
            <hr>
            <h3>Categorias</h3>
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
                    <a href="#" data-toggle="modal" data-target="#<?=$row['ID_Articulo'];?>"><?=$row['Nombre_Articulo']?></a>
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
        <h5 class="modal-title" id="exampleModal3Label"><?=$row['Nombre_Articulo']?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?=$row['Articulo_Descripcion'];?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
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
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal3Label">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>