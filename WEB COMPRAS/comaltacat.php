<HTML>
<HEAD><TITLE>ALTA DE CATEGORIA</TITLE></HEAD>
<style>
</style>
<link rel="stylesheet" href="bootstrap.min.css">
<BODY>
<?php
    require("funciones.php");
?>

<br>
<br>
<h2>ALTA DE CATEGORIA</h2>
<form name="formulario" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label type="text" name="nuevaCategoria">Añadir Categoria nueva: <input name="nuevaCategoria"></label>
    <br><br>
    <input type="submit" value="Añadir" name="enviar" />
</form>


<?php
//Recogemos variables con método post, si estan incompletos los datos, manda mensaje de error
if(empty($_POST)){
    echo "<br>";
    echo "Introduzca datos de la nueva categoria";
}
else if($_POST["nuevaCategoria"]!=""){
    $conn=conexion();
    
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        $nombre = $_POST["nuevaCategoria"];
    }
    //Con la función alta categoria y conexión pasada como parámetro y la variable nombre recogida con post, creamos una nueva categoria en la tabla categoria
    altaCategoria($conn, $nombre);
    $conn = null;

}
?>
<br>
<a href="GestiónPrincipal.php">Volver a Inicio</a>
</BODY>
</HTML>