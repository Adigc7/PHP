<HTML>
<HEAD> </HEAD>
<H1> Ejercicio 5 de bucles, mostrar en pantalla tabla de multiplicar sin tabla</H1>
<BODY>
<?php

$resultado=0;
$num=8;
//Creamos bucle for para recorrer del 1 al 10
for ($i=1;$i<11;){
    
    //dos casillas horizontales para operación y resultado
    for($j = 1; $j<=1;$j++){
            printf("$num * $i = ");       
    
         $resultado=$num * $i; //Almacenamos en la variable resultado la multiplicación
         echo "$resultado";
        }$i++;
        echo "<br>";
        

    }

?>		   
</BODY>
</HTML>