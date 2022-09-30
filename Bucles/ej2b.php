<HTML>
<HEAD> </HEAD>
<H1> Ejercicio 1 de bucles, pasar a binario un número</H1>
<BODY>
<?php

$num="48";
$dec=$num;
$resto = " ";
$base = "8";

    while (floor($num) >0)
    {
       
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
     echo "El numero "."$dec"." en con base $base es ". strrev($resto)."<br/>";
?>		   
</BODY>
</HTML>