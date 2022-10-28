<html>
<head>
	<title>BOLSA 6</title>
</head>
<body>
	<h1>BOLSA 6</h1>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<label>Mostrar</label>
		<select name="mostrar">
			<option>Selecciona una opcion</option>
			<option value="maxCoti">Máxima cotización</option>
			<option value="minCoti">Mínima cotización</option>
            <option value="maxVolumen">Máximo volumen</option>
			<option value="minVolumen">Mínima volúmen</option>
            <option value="MaxCapi">Máxima capitalización</option>
			<option value="MinCapi">Mínimo capital</option>
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
	echo mostrar6($mostrar);
};

?>