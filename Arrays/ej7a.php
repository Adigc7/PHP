<HTML>
<HEAD> Arrays Unidimensionales - Adriana Gracia</HEAD>
<H1> Ejercicio 7, arrays asociativos con edades</H1>
<BODY>
<?php

//Creamos arrays con datos
$arrayAso = array("Belén" => "20", "Juan" => "22", "Luis" => "30", "Adri" => "40", "Elena" =>"25");


//recorremos arrays con bucle foreach

foreach($arrayAso as $nombre=>$edad)
	{
	echo "El alumn@ " . $nombre . " tiene " . $edad . " años ";
	echo "<br>";
	}
	
//Monstramos segunda posición del array
/*
echo "La segunda posición del array es " . $arrayAso[1];

//Mostramos tercera posición del array

echo "La tercera posición del array es " . $arrayAso[2];

//Mostramos última posición del array

echo "La tercera posición del array es " . end($arrayAso);
*/
//Ordenar por menor a mayor la edad y mostrar primera y última posición
echo "<br>";
echo "La primera posición es " .reset($arrayAso);
echo "<br>";
echo "La siguiente posición es " .next($arrayAso);
echo "<br>";
echo "La última posición es " .end($arrayAso);
echo "<br>";
echo "<br>";
asort($arrayAso);
foreach($arrayAso as $nombre=>$edad)
	{
	echo "El alumn@ " . $nombre . " tiene " . $edad . " años ";
	echo "<br>";
	}
	echo "<br>";
echo "La primera posición es " .reset($arrayAso);
echo "<br>";
echo "La siguiente posición es " .next($arrayAso);
echo "<br>";
echo "La última posición es " .end($arrayAso);

?>		  
</BODY>
</HTML>
