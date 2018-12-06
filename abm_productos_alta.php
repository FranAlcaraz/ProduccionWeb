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
$marca = "SELECT * FROM marca";
$cat = "SELECT * FROM categoria";
$subc = "SELECT * FROM subcategoria";
?>

<br>
<h1 class="text-center">Alta de productos</h1>
<br>
<hr>
<form>
  <div class="form-group">
    <label for="nombreArticulo">Nombre del artículo</label>
    <input type="text" class="form-control" id="nombreArticulo" aria-describedby="Nombre" placeholder="Ingrese el nombre del artículo">
    <small id="Nombre" class="form-text text-muted">Debe ser inferior a 100 caractéres.</small>
  </div>
<!-- SELECCIONAR MARCA -->
  <div class="form-group">
    <label for="exampleSelect1">Seleccionar Marca</label>
    <select class="form-control" id="exampleSelect1">
      <?php 
        $art = $con->query($marca);
        foreach($art as $row){ ?>
          <option id="<?=$row['ID_Marca'];?>"><?=$row['Nombre_Marca'];?></option>  
        <?php } ?>
    </select>
  </div>
  <!-- SELECCIONAR CATEGORIA -->
    <div class="form-group">
    <label for="exampleSelect2">Seleccionar Categoría</label>
    <select class="form-control" id="exampleSelect2">
      <?php 
        $art2 = $con->query($cat);
        foreach($art2 as $row){ ?>
          <option id="<?=$row['ID_Categoria'];?>"><?=$row['Nombre_Categoria'];?></option>  
        <?php } ?>
    </select>
  </div>
     
     <!--  subcategoria -->
      <div class="form-group">
    <label for="exampleSelect2">Seleccionar Categoría</label>
    <select name="subcategoria" class="form-control" id="subcateogira">
      
          <option value=""></option>  
        
    </select>
  </div>
  
  
  <div class="form-group">
    <label for="categoria">Example multiple select</label>
    <select multiple class="form-control" id="categoria">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Example textarea</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
  </div>
  <fieldset class="form-group">
    <legend>Radio buttons</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Option one is this and that&mdash;be sure to include why it's great
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
        Option two can be something else and selecting it will deselect option one
      </label>
    </div>
    <div class="form-check disabled">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
        Option three is disabled
      </label>
    </div>
  </fieldset>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>






<script>
$(document).ready(function(){
    $('action').change(function(){
        var action = $(this).Attr("id");
        var query = $(this).val();
        var result = '';
        if (action == "categoria")
            {
                result = 'subcategoria';
                
            }
        $.ajax({
            url:"prosaltacat.php",
            method: "POST",
            data:{action:action, query:query},
            sucess:function(data){
                $('#'+result).html(data);
            }
        })
    })
})


</script>