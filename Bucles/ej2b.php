<HTML>
<HEAD> </HEAD>
<H1> Ejercicio 2 de bucles, pasar a base N un número decimal</H1>
<BODY>
<?php

$num="48";
$dec=$num;
$resto = " ";
$base = "8";

    while (floor($num) >0) //Redondeamos el numero dado
    {
       //Según la base, dividimos y acumulamos su resto de manera recursiva
        if($base==2){
            $resto .= $num % 2;
            $num = $num /2;
        }

        if($base==3){
            $resto .= $num % 3;
            $num = $num /3;
        }

        if($base==4){
            $resto .= $num % 4;
            $num = $num /4;
        }
        
        if($base==5){
            $resto .= $num % 5;
            $num = $num /5;
        }

        if($base==6){
            $resto .= $num % 6;
            $num = $num /6;
        }

        if($base==7){
            $resto .= $num % 7;
            $num = $num /7;
        }

        if($base==7){
            $resto .= $num % 7;
            $num = $num /7;
        }

        if($base==8){
            $resto .= $num % 8;
            $num = $num /8;
        }

        if($base==9){
            $resto .= $num % 9;
            $num = $num /9;
        }
    }
     echo "El numero "."$dec"." en con base $base es ". strrev($resto)."<br/>"; //Damos la vuelta al resto para obtener de manera correcta la conversión
?>		   
</BODY>
</HTML>