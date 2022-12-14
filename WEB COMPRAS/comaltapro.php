<HTML>
<HEAD><TITLE>ALTA DE PRODUCTO</TITLE></HEAD>
<style>

</style>
<link rel="stylesheet" href="bootstrap.min.css">
<BODY>
<?php
    require("funciones.php");
?>
<br>
<br>
<h2>ALTA DE PRODUCTO</h2>
<form name="formulario" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label type="text" name="nombre">Nombre <input name="nombre"></label>
    <br>
    <br>
    <label type="text" name="precio">Precio <input name="precio"></label>
    <br>
    <br>
    
    LISTA DE CATEGORIAS: <select name="categoria">
        <?php
        $conn=conexion();
        $categoria=listarCategoria($conn);
        foreach($categoria as $row) {
            echo "<option value=".$row["id_categoria"].">". $row["nombre"]. "</option>";
        }
        $conn = null;
        ?>
    </select>
    <br>
    <br>
    <input type="submit" value="Enviar" name="enviar" />
    <input type="reset" value="Limpiar" name="enviar" />
</form>
<br>
<a href="GestiónPrincipal.php">Volver a Inicio</a>
<br>

<?php
//Recogemos variables con método post, si estan incompletos los datos, manda mensaje de error
if(empty($_POST)){}
else if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $nombre=$_POST["nombre"];
    $precio=$_POST["precio"];
    $categoria=$_POST["categoria"];
    if($nombre=="" || $precio==""){
        echo "Hay que rellenar todos los campos";
    }else{
        
        $conn=conexion();
       
        //Mediante conexión pasado como parametro, damos de alta el producto con las variables recogidas con el mñetodo post en la función altaProducto()
    altaProducto($conn, $nombre, $precio,$categoria);
    echo "<br>";
    echo "Producto creado con éxito";

    $conn=null;
    }
}
?>

</BODY>
</HTML>