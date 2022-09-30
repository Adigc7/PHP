<HTML>
<HEAD> </HEAD>
<H1> Ejercicio 1 de bucles, pasar a binario un número</H1>
<BODY>
<?php

$num="127";
$dec=$num;
$resto = " ";

    while (floor($num) >0)
    {
         $resto .= $num % 2;
         $num = $num /2;
    }
     echo "El numero "."$dec"." en binario es ". strrev($resto)."<br/>";
?>		   
</BODY>
</HTML>