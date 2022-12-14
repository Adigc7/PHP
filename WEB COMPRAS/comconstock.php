<HTML>
<HEAD><TITLE>CONSULTAR STOCK</TITLE></HEAD>
<style>

</style>
<link rel="stylesheet" href="bootstrap.min.css">
<BODY>
<?php
    require("funciones.php");
?>
<br>
<br>
<h2>CONSULTAR STOCK</h2>
<form name="formulario" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    LISTA DE PRODUCTOS: <select name="producto">
        <?php
        $conn=conexion();
        $producto=listarProducto($conn);
        foreach($producto as $row) {
            echo "<option value=".$row["id_producto"].">". $row["nombre"]. "</option>";
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
//con método post recogemos las variables que pasen por producto, si están vacias envia mensaje de error
if(empty($_POST)){}
else if ($_SERVER["REQUEST_METHOD"]== "POST"){
    
    $id_producto=$_POST["producto"];
    
    if($id_producto=="" ){
        echo "Hay que rellenar todos los campos";
    }else{
        
        //Si tienen contenido, se realiza conexión y pasandola como parametro en la función listarAlmacena mostramos el id del producto y cantidad del almacén señalado
        $conn=conexion();
        $listaAlmacena=listarAlmacena($conn,$id_producto);
    
        foreach($listaAlmacena as $row) {
            echo "El producto con código " . $row["id_producto"]. " tiene una cantidad de " . $row["cantidad"]." unidades en el almacén número: " . $row["num_almacen"]. "<br>";
        }
        $conn = null;
    }
}
?>

</BODY>
</HTML>