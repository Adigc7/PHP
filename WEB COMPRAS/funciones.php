<?php

//Creamos conexión pasando parámetros de la base de datos y si hay error con el try se muestra el mensaje
function conexion(){
    $servername = "localhost";
    $username = "root";
    $password = "rootroot";
    $dbname = "COMPRASWEB";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return $conn; 
}


	
    /* Alta de Categorías (comaltacat.php): dar de alta categorías de productos. El id_categoria
    será un campo con el formato C-xxx donde xxx será un número secuencial que comienza en 1 
    completándose con 0 hasta completar el formato (este campo será calculado desde PHP).
     */

	 //Función que da formato al id de categoria para pasarlo por la función altaCategoria()
	function formatoCategoria() {
		try {
			$conexion = conexion();
			$arrayAso = $conexion -> prepare("SELECT max(ID_CATEGORIA) AS 'ID_CATEGORIA' FROM CATEGORIA");
			$arrayAso -> execute();
			
			foreach ($arrayAso -> fetchAll() as $row) {
				$codigoCategoria = $row['ID_CATEGORIA'];
			}
			
			if ($codigoCategoria == null) {
				$codigoCategoriaNumerada = "C-001";
				return $codigoCategoriaNumerada;
			} else {
				$codigoCategoriaNumerada = substr($codigoCategoria, -3);
				$codigoCategoriaNumerada += 1;
				$codigoCategoriaNumerada = "C-" . str_pad($codigoCategoriaNumerada, 3, "0", STR_PAD_LEFT);
				return $codigoCategoriaNumerada;
			}
			
		} catch (PDOException $e) {
			echo "<div class='h5' align='center'>Error: " . $e -> getMessage() . "</div>";
		}
	}
	
	// Función que permite insertar la categoria con un nombre elegido por el usuario usando el formato correcto mediante la función formatoCategoria() del id categoria

	function altaCategoria($conn, $nombre) {
		try {
			$codigoCategoria = formatoCategoria();
            $arrayAso = $conn->prepare("INSERT INTO CATEGORIA (ID_CATEGORIA,NOMBRE) VALUES(:id_categoria,:nombre);");     

            $arrayAso -> bindParam(':id_categoria', $codigoCategoria);
            $arrayAso -> bindParam(':nombre',$nombre);
            
        
            $arrayAso->execute();
            echo "<br>";
            echo "Nueva categoría $nombre creada";

		} catch (PDOException $e) {
			echo "<div class='h5' align='center'>Error: " . $e -> getMessage() . "</div>";
		}
	}
/*El id_producto será un campo con el formato Pxxxx donde xxxx será un número secuencial que comienza en 1 completándose con 0 hasta completar el formato 
 */
	function formatoProducto() {
		try {
			$conexion = conexion();
			$arrayAso = $conexion -> prepare("SELECT max(ID_PRODUCTO) AS 'ID_PRODUCTO' FROM PRODUCTO");
			$arrayAso -> execute();
			
			foreach ($arrayAso -> fetchAll() as $row) {
				$codigoProducto = $row['ID_PRODUCTO'];
			}
			
			if ($codigoProducto == null) {
				$codigoProductoNumerado = "P0001";
				return $codigoProductoNumerado;
			} else {
				$codigoProductoNumerado = substr($codigoProducto, -4);
				$codigoProductoNumerado += 1;
				$codigoProductoNumerado = "P" . str_pad($codigoProductoNumerado, 4, "0", STR_PAD_LEFT);
				return $codigoProductoNumerado;
			}
			
		} catch (PDOException $e) {
			echo "<div class='h5' align='center'>Error: " . $e -> getMessage() . "</div>";
		}
	}

	//Función para listar el id y nombre de categoria mediante un desplegable retornando un array asociativo
	function listarCategoria($conn){
        $stmt = $conn->prepare("SELECT id_categoria, nombre FROM categoria");
        $stmt->execute();
    
        $arrayAso = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $arrayAso = $stmt->fetchAll();

        return $arrayAso;
}

//Función para dar de alta a productos insertando todos sus campos además del nuevo formato del id del producto mediante la función formatoProducto()
function altaProducto($conn, $nombre, $precio,$categoria) {
	try {
		$codigoProducto = formatoProducto();
		$arrayAso = $conn->prepare("INSERT INTO PRODUCTO (ID_PRODUCTO, NOMBRE, PRECIO, ID_CATEGORIA) VALUES(:id_producto,:nombre,:precio,:id_categoria);");  
		$arrayAso -> bindParam(':id_producto',$codigoProducto);
		$arrayAso -> bindParam(':nombre',$nombre);	
		$arrayAso -> bindParam(':precio',$precio);
		$arrayAso -> bindParam(':id_categoria', $categoria);
		$arrayAso->execute();
		echo "<br>";
		echo "Nueva producto $nombre creado";

	} catch (PDOException $e) {
		echo "<div class='h5' align='center'>Error: " . $e -> getMessage() . "</div>";
	}
}
/*
function numAlmacen() {
	try {
		$conexion = conexion();
		$arrayAso = $conexion -> prepare("SELECT max(NUM_ALMACEN) AS 'NUM_ALMACEN' FROM ALMACEN");
		$arrayAso -> execute();
		
		foreach ($arrayAso -> fetchAll() as $row) {
			$codigoAlmacen = $row['NUM_ALMACEN'];
		}
		

	} catch (PDOException $e) {
		echo "<div class='h5' align='center'>Error: " . $e -> getMessage() . "</div>";
	}
}

*/

//Función para dar de alta a almacenes insertando sus campos de localidad. El num almacanes al ser autoincrement se añade automatico
function altaAlmacenes($conn, $localidad) {
	try {
		$arrayAso = $conn->prepare("INSERT INTO ALMACEN (LOCALIDAD) VALUES(:localidad);");     
		$arrayAso -> bindParam(':localidad',$localidad);
		
	
		$arrayAso->execute();
		echo "<br>";
		echo "Nueva localidad $localidad para nuevo almacén";

	} catch (PDOException $e) {
		echo "<div class='h5' align='center'>Error: " . $e -> getMessage() . "</div>";
	}
}

//Función para listar los productos y poder elegirlos desde un desplegable una vez se haya retornado el array asociativo
function listarProducto($conn){
	$stmt = $conn->prepare("SELECT id_producto, nombre FROM PRODUCTO");
	$stmt->execute();

	$arrayAso = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$arrayAso = $stmt->fetchAll();

	return $arrayAso;
}

//Función para listar los almacenes y poder elegirlos desde un desplegable una vez se haya retornado el array asociativo
function listarAlmacenes($conn){
	$stmt = $conn->prepare("SELECT num_almacen, localidad FROM ALMACEN");
	$stmt->execute();

	$arrayAso = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$arrayAso = $stmt->fetchAll();

	return $arrayAso;
}

//Función para aprovisonar producto pasando los parametros de num_almacen y id_prodcuto y cantidad marcada por usuario en la tabla ALMACENA
function aprovisionarProducto($conn,$num_almacen,$id_producto,$cantidad){
	try{
	$arrayAso = $conn->prepare("INSERT INTO ALMACENA (NUM_ALMACEN, ID_PRODUCTO, CANTIDAD) VALUES(:num_almacen,:id_producto,:cantidad);");  
		$arrayAso -> bindParam(':num_almacen',$num_almacen);
		$arrayAso -> bindParam(':id_producto',$id_producto);
		$arrayAso -> bindParam(':cantidad', $cantidad);
		$arrayAso->execute();
		echo "<br>";
		echo "Se ha aprovisionado la cantidad de $cantidad unidades en el almacén número $num_almacen del id de producto $id_producto";
	}
		catch (PDOException $e) {
	echo "<div class='h5' align='center'>Error: " . $e -> getMessage() . "</div>";
}
	}

	//Función que realiza un desplegable con los almacenes según el id del producto y devuelve un array asocitivo con resultados
function listarAlmacena($conn,$id_producto){
	$stmt = $conn->prepare("SELECT almacena.num_almacen, almacena.id_producto, almacena.cantidad FROM ALMACENA,PRODUCTO
	WHERE almacena.id_producto=producto.id_producto AND producto.id_producto=:id_producto");

	$stmt -> bindParam(':id_producto',$id_producto);
	$stmt->execute();

	$arrayAso = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$arrayAso = $stmt->fetchAll();

	return $arrayAso;
	
	
}
//Función que realiza un desplegable con los productos según el numero del almacén y devuelve un array asocitivo con resultados
function listarProductos($conn,$num_almacen){
	$stmt = $conn->prepare("SELECT producto.id_producto, producto.nombre, producto.precio, producto.id_categoria 
	FROM PRODUCTO, ALMACEN, ALMACENA
	WHERE producto.id_producto=almacena.id_producto AND almacena.num_almacen=almacen.num_almacen
	AND almacena.num_almacen=:num_almacen");

	$stmt -> bindParam(':num_almacen',$num_almacen);
	$stmt->execute();
	
	$arrayAso = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$arrayAso = $stmt->fetchAll();
	
	return $arrayAso;


}

//Función para validar un dni real extrayendo una primera letra y a continuación 8 números
function validar_dni($nif){
	$letra = substr($nif, -1);
	$numeros = substr($nif, 0, 8);
	if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen($numeros) == 8 ){
		echo 'DNI válido';
		echo "<br>";
		return true;
	}else{
		echo 'DNI no válido';
		echo "<br>";
		
		return false;
	}
}

//Función para crear un nuevo clinte con los valores de la tabla cliente mediante un insert
function nuevoCliente($conn,$nif,$nombre,$apellido,$cp,$direccion,$ciudad){
	try {
		
		$arrayAso = $conn->prepare("INSERT INTO CLIENTE (NIF,NOMBRE,APELLIDO,CP,DIRECCION,CIUDAD) VALUES(:nif,:nombre,:apellido,:cp,:direccion,:ciudad);");     

		$arrayAso -> bindParam(':nif',$nif);
		$arrayAso -> bindParam(':nombre',$nombre);
		$arrayAso -> bindParam(':apellido',$apellido);
		$arrayAso -> bindParam(':cp',$cp);
		$arrayAso -> bindParam(':direccion',$direccion);
		$arrayAso -> bindParam(':ciudad',$ciudad);
	
		//Validamos si el dni está bien con la función validar
		echo "<br>";
		if(validar_dni($nif)==true){
			echo "Nueva cliente $nombre creado";
			echo "<br>";
			
			$arrayAso->execute();
		}
		else{
			echo "Cliente con dni no válido";
		}
		

	} catch (PDOException $e) {
		echo "<div class='h5' align='center'>Error: " . $e -> getMessage() . "</div>";
	}
}


//Función sin acabar de la tabla comprar en la que también actuaría la tabla almacena para mostrar solo los unicos productos disponibles

function verProductosDisponibles($conn){
    $stmt = $conn->prepare("SELECT almacena.id_producto, producto.nombre FROM producto, almacena WHERE producto.id_producto=almacena.id_producto AND almacena.cantidad>0 ");
    $stmt->execute();

    $arrayAso = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $arrayAso = $stmt->fetchAll();

    return $arrayAso;
}

function comprarProducto($conn,$dni,$producto,$fecha_compra,$unidades){
	$stmt = $conn->prepare("INSERT INTO COMPRA (nif, id_producto, fecha_compra, unidades) VALUES(:nif, :id_producto, :fecha_compra, :unidades);");  
    
    $stmt -> bindParam(':nif',$dni);
    $stmt -> bindParam(':id_producto',$producto);
    $stmt -> bindParam(':fecha_compra',$fecha_compra);
    $stmt -> bindParam(':unidades',$unidades);
    $stmt->execute();

    echo "<br>";
    echo "El cliente con NIF $dni ha comprado una cantidad de $unidades unidades de $producto con fecha de compra $fecha_compra";
}

function verDniExistente($conn,$dni){
try{

	$stmt = $conn->prepare("SELECT * FROM CLIENTE WHERE nif=:dni IS NOT NULL");
	$stmt -> bindParam(':nif',$dni);
    $stmt->execute();
    $arrayAso = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $arrayAso = $stmt->fetchAll();

    return $arrayAso;
	return true;

} catch (PDOException $e) {
	echo "<div class='h5' align='center'>CLIENTE CON DNI NO REGISTRADO " . $e -> getMessage() . "</div>";
	return false;
}
}

?>