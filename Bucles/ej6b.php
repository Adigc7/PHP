<HTML>
<HEAD> </HEAD>
<H1> Ejercicio 6 de bucles, factorial</H1>
<BODY>
<?php

// función para obtener factorial de forma iterativa
function obtieneFactorial($numero){ 
   $factorial = 1; 
   for ($i = 1; $i <= $numero; $i++){ 
     $factorial = $factorial * $i; 
   } 
   return $factorial; 
} 
// Mostrar la operación de factorial

$numero = 5; 
for ($j=$numero; $j>=1; $j--){
   if ($j!=1)
   printf(" $j x");
   else{
      echo "$j";
   }
}
$resultado = obtieneFactorial($numero); 
echo " = $resultado"; 


?>		   
</BODY>
</HTML>