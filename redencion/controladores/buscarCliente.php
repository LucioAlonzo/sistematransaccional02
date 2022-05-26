<?php

// consigue el nombre desde el formulario
$search_cliente = $_REQUEST['search_cliente'];

// Coneccion a la base de datos

include("config/conexion.php"); 

if ($search_cliente !== "") {
	
	// Se busca el dni y la direccion correspondiente al nombre
	$query = mysqli_query($con, "SELECT * FROM cliente WHERE clie_name='$search_cliente'");

	$row = mysqli_fetch_array($query);

	// consigue el dni
	$dni = $row["clie_dui"];

	// consigue la direccion
	$direccion = $row["clie_dir"];
}

// lo almacena un un arreglo
$result = array("$dni", "$direccion");

// lo envia al formulario
$myJSON = json_encode($result);
echo $myJSON;
?>