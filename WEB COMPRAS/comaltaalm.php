<HTML>
<HEAD><TITLE>ALTA DE ALMACENES</TITLE></HEAD>
<style>
</style>
<link rel="stylesheet" href="bootstrap.min.css">
<BODY>
<?php
    require("funciones.php");
?>

<br>
<br>
<h2>ALTA DE ALMACENES</h2>
<form name="formulario" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label type="text" name="nuevoAlmacen">Añadir localidad nueva para nuevo almacén: <input name="nuevoAlmacen"></label>
    <br><br>
    <input type="submit" value="Añadir" name="enviar" />
</form>


<?php
//Recogemos variables con método post, si estan incompletos los datos, manda mensaje de error
if(empty($_POST)){
    echo "<br>";
    echo "Introduzca datos de la nueva localidad";
}
else if($_POST["nuevoAlmacen"]!=""){
    $conn=conexion();
    
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        $localidad= $_POST["nuevoAlmacen"];
    }
    //Con la función altaAlmacenes() y conexión pasada como parámetro y la variable localidad recogida con post, creamos un nuevo almacen en la tabla almacen
    altaAlmacenes($conn, $localidad);
    $conn = null;

}
?>
<br>
<a href="GestiónPrincipal.php">Volver a Inicio</a>
</BODY>
</HTML>