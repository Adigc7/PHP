<HTML>
<HEAD><TITLE>ALTA DE CLIENTE</TITLE></HEAD>
<style>

</style>
<link rel="stylesheet" href="bootstrap.min.css">
<BODY>
<?php
    require("funciones.php");
?>
<br>
<br>
<h2>ALTA DE CLIENTES</h2>
<form name="formulario" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label type="text" name="nif">DNI <input name="nif"></label>
    <br>
    <br>
    <label type="text" name="nombre">Nombre <input name="nombre"></label>
    <br>
    <br>
    <label type="text" name="apellido">Apellido <input name="apellido"></label>
    <br>
    <br>
    <label type="date" name="cp">Código Postal<input name="cp"></label>
    <br>
    <br>
    <label type="date" name="direccion">Dirección <input name="direccion"></label>
    <br>
    <br>
    <label type="date" name="ciudad">Ciudad <input name="ciudad"></label>
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
    $nif=$_POST["nif"];
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $cp=$_POST["cp"];
    $direccion=$_POST["direccion"];
    $ciudad=$_POST["ciudad"];
    if($nif=="" || $nombre=="" || $apellido=="" || $cp=="" || $direccion=="" || $ciudad==""){
        echo "Hay que rellenar todos los campos";
    }else{
        
        //Mediante conexión pasada como parámetro, con la función nuevoCliente() y las variables recogidas, creamos un nuevo cliente en la tabla cliente
        $conn=conexion();
        nuevoCliente($conn,$nif,$nombre,$apellido,$cp,$direccion,$ciudad);
        echo "<br>";
        

    $conn=null;
    }
}
?>

</BODY>
</HTML>