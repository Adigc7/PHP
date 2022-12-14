<HTML>
<HEAD><TITLE>CONSULTA DE ALMACENES</TITLE></HEAD>
<link rel="stylesheet" href="bootstrap.min.css">
<style>

</style>
<BODY>
<?php
    require("funciones.php");
?>
<br>
<br>
<h2>CONSULTA DE ALMACENES </h2>
<form name="formulario" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
SELECCIONA LA LOCALIDAD DEL ALMACÉN QUE QUIERES VER SUS PRODUCTOS <select name="almacenes">
        <?php
        $conn=conexion();
        $almacenes= listarAlmacenes($conn);
        foreach($almacenes as $row) {
            echo "<option value=".$row["num_almacen"].">". $row["localidad"]. "</option>";
        }
        $conn = null;
        ?>
    </select>
    <br>
    <br>
    <input type="submit" value="Consultar" name="enviar" />
</form>


<?php
//con método post recogemos las variables que pasen por almacenes, si están vacias envia mensaje de error
if(empty($_POST)){}
else{
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
		$num_almacen = $_POST["almacenes"];
	}
    
    //En caso de tener campos rellenos, mediante conexión pasado como parámetro con la función listarProductos recorremos el array asociativo con sus datos con un foreach,
    $conn=conexion();
   $listarProductos=listarProductos($conn,$num_almacen);
	foreach($listarProductos as $row) {
        echo "Producto con id: " . $row["id_producto"]. " Nombre: " . $row["nombre"]." tiene un precio de " . $row["precio"]."€ y pertenece a la categoría " . $row["id_categoria"]. "<br>";
    }
    $conn = null;
}
?>
<br>
<a href="GestiónPrincipal.php">Volver a Inicio</a>
<br>
</BODY>
</HTML>