<HTML>
<HEAD> Arrays Unidimensionales - Adriana Gracia</HEAD>
<H1> Ejercicio 3, 20 números binarios</H1>
<BODY>
<?php

$binarios=[];

for ($i = 0; $i < 20; $i++) { //Recorremos array de los primeros 20 binarios

   $binarios[]=decbin(strval($i));

}

printf("<table border='1'><tr><th>&nbsp; Indice &nbsp;</th><th>&nbsp; Binarios &nbsp;</th><th>&nbsp; Octal &nbsp;</th></tr>");

$octal=0;

for ($j = 0; $j < count($binarios); $j++) { //Recorremos array de binarios para pasarlos a octal

        $octal=base_convert($binarios[$j],2,8);

 printf("<tr><td>&nbsp; $j &nbsp;</td><td>&nbsp; $binarios[$j] &nbsp;</td><td>&nbsp; $octal &nbsp;</td></tr>");

}

printf("</table>");  


?>		  
</BODY>
</HTML>