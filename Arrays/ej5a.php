<HTML>
<HEAD> Arrays Unidimensionales - Adriana Gracia</HEAD>
<H1> Ejercicio 5, unir arrays</H1>
<BODY>
<?php

$a1 = array("Bases Datos", "Entornos Desarrollo", "Programación");
$a2 = array("Sistemas Informáticos","FOL","Mecanizado");
$a3 = array("Desarrollo Web ES","Desarrollo Web EC","Despliegue","Desarrollo Interfaces", "Inglés");

$arrayTotal = [];

for ($i = 0; $i < count($a1); $i++) {
    $arrayTotal[]=$a1[$i];
 }
 
 for ($i = 0; $i < count($a2); $i++) {
    $arrayTotal[]=$a2[$i];
 }
 for ($i = 0; $i < count($a3); $i++) {
    $arrayTotal[]=$a3[$i];
 }

printf("Unión de arrays sin funciones");
echo "<br>";
print_r($arrayTotal);
echo "<br>";
echo "<br>";
printf("Unión de arrays mediante array_merge()");
echo "<br>";
print_r(array_merge($a1,$a2,$a3));
echo "<br>";
echo "<br>";
printf("Unión de arrays mediante array_push()");
echo "<br>";
$añadido = [];

for ($i = 0; $i < count($a1); $i++) {
    array_push($añadido,$a1[$i]);
 }
 
 for ($i = 0; $i < count($a2); $i++) {
    array_push($añadido,$a2[$i]);
 }
 for ($i = 0; $i < count($a3); $i++) {
    array_push($añadido,$a3[$i]);
 }
print_r($añadido);

echo "<br>";

?>		  
</BODY>
</HTML>