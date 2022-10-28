//Abrimos nuestro php de funciones mediante include, abrimos fichero con fopen() y llamamos a la función mostrar() para abrir fichero.
<?php
include("funciones_bolsa.php");
$fichero = fopen ("ibex35.txt" , "r");
echo mostrar($fichero);
?>
