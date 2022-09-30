<HTML>
<HEAD> </HEAD>
<H1> Ejercicio 1 de bucles, pasar a binario un número</H1>
<BODY>
<?php

$num="127";
$dec=$num;
$resto = " ";


    while (floor($num) >0) //redondeamos el numero dado
    {
         $resto .= $num % 2; //Almacenamos la cantidad de restos tras la divisón dos 2
         $num = $num /2; //Dividimos de manera recursiva por dos
    }
     echo "El numero "."$dec"." en binario es ". strrev($resto)."<br/>"; //Damos la vuelta con la función strrev a los restos acumulados de ceros y unos
?>		   
</BODY>
</HTML>