<html>
<head>
	<title>BOLSA 5</title>
</head>
<body>
	<h1>BOLSA 5</h1>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<label>Mostrar</label>
		<select name="mostrar">
			<option>Selecciona una opcion</option>
			<option value="totalVolumen">Total Volumen</option>
			<option value="totalCapital">Total Capitalizacion</option>
		</select>
		<br><br>
		<input type="submit" name="submit" value="Visualizar"/>
		<input type="reset" name="reset" value="Borrar"/>
	</form>
</body>
<html>
<?php
include("funciones_bolsa.php");
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$mostrar = $_POST["mostrar"];
	echo mostrar5($mostrar);
};

?>