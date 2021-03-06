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
    <body>
        <main role="main" class="container">
            <?php $secc = isset($_GET['seccion']) ? $_GET['seccion'] : 'home'; 

            switch($secc){
                case 'abm_productos':
                case 'abm_productos_alta':
                case 'abm_marcas':
                case 'abm_categorias':
                case 'login':
                case 'detalle':
                case 'abm_productos':
                    include($secc.'.php');
                    break;
                default:
                    include('error.php');
            }
            ?> 

        </main>


        <script src="../js/bootstrap.min.js"></script>

    </body>
</html>