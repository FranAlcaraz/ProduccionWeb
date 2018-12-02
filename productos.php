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
if(isset($_GET['orden'])){
    $orden = $_GET['orden'];
    switch($orden){
        case 1: $sql.= ' ORDER BY Nombre_Articulo ASC';
            break;
        case 2: $sql.= ' ORDER BY Nombre_Articulo DESC';
            break;
        case 3: $sql.= ' ORDER BY Precio DESC';
            break;
        case 4: $sql.= ' ORDER BY Precio ASC';
    }
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
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <hr/>
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
            <?php
            $urlActual = $_SERVER['REQUEST_URI'];
            if(isset($_GET['orden'])){
                $urlExp = explode('&orden=', $urlActual);
                $urlActual = $urlExp[0];
            }
            ?>
            <br>
            <div class="row">
                <div class="col-3"><h3>Ordenar Por</h3></div>
                <div class="col-9">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo $urlActual.'&orden=1'; ?>">A - Z</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo $urlActual.'&orden=2'; ?>">Z - A</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link active" href="<?php echo $urlActual.'&orden=3'; ?>">Mayor Precio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo $urlActual.'&orden=4'; ?>">Menor Precio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="">Mejores Rankeados</a>
                        </li>
                    </ul>
                </div>
            </div>
            <br>
            <hr>
            <br>

            <div class="row">
                <?php
                $art = $con->query($sql);
                foreach($art as $row){
                ?>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="index.php?seccion=detalle&id=<?php echo $row['ID_Articulo'];?>"><img class="card-img-top" src="img/<?=$row['Imgname'].".jpg"?>" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="index.php?seccion=detalle&id=<?php echo $row['ID_Articulo'];?>" class="nombreArt"><?=$row['Nombre_Articulo'];?></a>
                            </h4>
                            <h5>$<?=$row['Precio'];?></h5>
                            <p class="card-text"><?php echo substr($row['Articulo_Descripcion'], 0, 30);?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>
                
                                <?php } //cierra foreach $art as $row ?>
                            </div>
                        </div>
                    </div>
                </div>