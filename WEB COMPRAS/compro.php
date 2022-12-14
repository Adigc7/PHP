<HTML>
<HEAD><TITLE>WEB DE COMPRA</TITLE></HEAD>
<style>
</style>
<link rel="stylesheet" href="bootstrap.min.css">
<BODY>
<?php
    require("funciones.php");
?>

<br>
<br>
<h2>COMPRA DE PRODUCTOS</h2>

<form name="formu" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label type="text" name="dni">Añada su DNI: <input name="dni"></label>
    <br><br>
<label type="text" name="unidades">Ponga cantidad requerida: <input name="unidades"></label>
    <br><br>
    LISTA DE PRODUCTOS: <select name="producto">
        <?php
        $conn=conexion();
        $producto= verProductosDisponibles($conn);
        foreach($producto as $row) {
            echo "<option value=".$row["id_producto"].">". $row["nombre"]. "</option>";
        }
        $conn = null;
        ?>
        </select>
    <input type="submit" value="Enviar" name="enviar" />
    <input type="reset" value="Limpiar" name="enviar" />
</form>


<?php
if(empty($_POST)){

}
else{
    
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        $dni = $_POST["dni"];
        $unidades = $_POST["unidades"];
        $fecha_compra = date('Y/m/d'); 
        $unidades= 1; 
    }
    $conn=conexion();
    if(verDniExistente($conn,$dni)==false){
        echo "ERROR. No se ha dado de alta como cliente";
        $conn = null;
    }else{
    comprarProducto($conn,$dni,$producto,$fecha_compra,$unidades);
    $conn = null;
    
}

}
?>
<br>
<a href="GestiónPrincipal.php">Volver a Inicio</a>
</BODY>
</HTML>