<HTML>
    <HEAD> <TITLE> Ejercicio 5 de ficheros </TITLE>
    </HEAD>
    <BODY>
 
    
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <h1>FICHERO 5</h1>
 
    <label>Fichero(Path/nombre):</label> 
    <input type='text' name='nombre' value='' size=20><br>
    <label>Operaciones: </label>
    <br>
    <br>
    <input type="radio" name='mostrar' value="mostrar1">Mostrar Fichero<br>
	<input type="radio" name='mostrar' value="mostrar2">Mostrar linea<input type='text' name='unaLinea' value='' size=10>fichero<br>
    <input type="radio" name='mostrar' value="mostrar3">Mostrar<input type='text' name='variasLineas' value='' size=10>primeras lineas<br>
    <input type="submit" value="enviar">
    <input type='reset' value="borrar">      
    </FORM>
 
<?php
// Al ejecutar método post se filtan los argumentos
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$nombre = $_POST["nombre"];
	$mostrar = $_POST["mostrar"];
	$unaLinea= $_POST["unaLinea"];
    $variasLineas= $_POST["variasLineas"];

    //Llamaos a la opción de leer fichero con todas sus lineas mediante un array y la función readFile que lee el fichero
	if(file_exists($nombre)){

    
    if($mostrar=="mostrar1"){
    echo "<b>Lectura del fichero con funcion readfile </b> <br><br>";
    readfile($nombre);
    echo "<br><br><br>";
    }
    //Ejecutamos la opción de mostrar un línea pedida del fichero mediante un array
	else if ($mostrar=="mostrar2"){
        echo "<b>Lectura del fichero con funcion file almacena en array </b> <br><br>";
        $z=file($nombre);
        // recorremos el array y lo mostramos por pantalla igualando la línea pedida
        foreach($z as $linea=>$texto) {
            if($linea==$unaLinea)
            echo "Linea: ",$linea," Texto: ",$texto,"<br>";
            
        };
        echo "<br><br>";  
    }
    else if ($mostrar=="mostrar3"){
        $z=file($nombre);
        // recorremos el array y lo mostramos por pantalla hasta la linea pedida
        foreach($z as $linea=>$texto) {
            if($linea <= $variasLineas)
            echo "Linea: ",$linea," Texto: ",$texto,"<br>";  
        };
        echo "<br><br>"; 
    }
    	
    }else{
        echo "El archivo no existe";
    }
}

//Filtramos argumentos de espacios, caracteres especiales y barra slash
function limpiar($data){
	$data = test_input($data);
	$data = test_input($data);
	$data = test_input($data);
	return $data;
}
?>
</BODY>
</HTML>