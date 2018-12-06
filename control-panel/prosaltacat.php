<?php

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

$query = $con->prepare("SELECT Subcategoria FROM subcategoria WHERE ID_Categoria = '".$_POST["query"]."' group by subcategoria");
$query->execute(array("%query%")); 

//$subt = $con->query($query);

while($row = $query->fetch()){
   $output .= '<option value="'.$row["subcategoria"].'">'.$row["subcategoria"].'</option>';
    
}








?>