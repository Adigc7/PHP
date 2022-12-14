<HTML>
<HEAD><TITLE>APROVISIONAR PRODUCTOS</TITLE></HEAD>
<style>

</style>
<link rel="stylesheet" href="bootstrap.min.css">
<BODY>
<?php
    require("funciones.php");
?>
<br>
<br>
<h2>APROVISIONAR PRODUCTOS</h2>
<form name="formu" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label type="text" name="cantidad">CANTIDAD DE PRODUCTOS: <input name="cantidad"></label>
    <br>
    <br>
    LISTA DE PRODUCTOS: <select name="producto">
        <?php
        $conn=conexion();
        //Función que realiza desplegable para ver todos los productos con función listarProductos
        $producto=listarProducto($conn);
        foreach($producto as $row) {
            echo "<option value=".$row["id_producto"].">". $row["nombre"]. "</option>";
        }
        $conn = null;
        ?>
        </select>
        LISTA DE ALMACENES: <select name="almacen"> 
        <?php      
        $conn=conexion();
        //Función que funciona como desplegable para ver todos almacenes
        $almacen=listarAlmacenes($conn);
        foreach($almacen as $row) {
            echo "<option value=".$row["num_almacen"].">". $row["localidad"]. "</option>";
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
//Mediante método post recogemos las variables que pasamos en los input
if(empty($_POST)){}
else if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $cantidad=$_POST["cantidad"]; 
    $id_producto=$_POST["producto"];
    $num_almacen=$_POST["almacen"];
    //Si no están rellenas manda mensaje de error
    if($cantidad=="" || $id_producto=="" || $almacen==""){
        echo "Hay que rellenar todos los campos";
    }else{
        
        //En el caso de que sean completos los datos, mediante conexión pasada como parametro llamamos a la función aprovisionar producto para almacenar todos los datos en tabla almacena
        $conn=conexion();
        aprovisionarProducto($conn,$num_almacen,$id_producto,$cantidad);
       echo "<br>";
        echo "Se ha aprovisionado la cantidad de producto con éxito";

    $conn=null;
    }
}
?>

</BODY>
</HTML>