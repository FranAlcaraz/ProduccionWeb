<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="eCommerce">
        <meta name="author" content="FA - FM - NR">
        <link rel="icon" href="../../../../favicon.ico">

        <title>DVapor - Drinking Clouds</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">

        <style type="text/css">
            /*body {
                padding-top: 5rem;
            }*/
            .starter-template {
                padding: 3rem 1.5rem;
                text-align: center;
            }
        </style>
    </head>
        
    <body>
    <?php include('header.php'); ?>
        <main role="main" class="container">

            <?php $secc = isset($_GET['seccion']) ? $_GET['seccion'] : 'inicio'; 
            
            switch($secc){
                case 'home':
                case 'productos':
                case 'contacto':
                    include($secc.'.php');
                break;
                default:
                    include('error.php');
            }
            ?> 

        </main>
        <?php include('footer.php'); ?> 

        <script src="js/bootstrap.min.js"></script>

    </body>
</html>