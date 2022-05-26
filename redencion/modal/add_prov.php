<?php
print_r($_POST);
if(empty($_POST["oculto"]) || 
empty($_POST["prov_name"]) || 
empty($_POST["prov_nit"]) || 
empty($_POST["prov_dir"]) || 
empty($_POST["prov_tel1"]) ||
empty($_POST["prov_tel2"]) || 
empty($_POST["prov_cont1"]) ||
empty($_POST["prov_cont2"]) || 
empty($_POST["prov_comnt"]))
{
    header('Location: ../vistas/proveedor.php?mesaje=falta');
}

include_once '../config/conexion.php';
$prov_name = $_POST["nombre"];
$prov_nit= $_POST["nit"];
$prov_dir = $_POST["direccion"];
$prov_tel1 = $_POST["telefono1"];
$prov_tel2= $_POST["telefono2"];
$prov_cont1 = $_POST["contacto1"];
$prov_cont2= $_POST["contacto2"];
$prov_comnt = $_POST["comentario"];

$sentencia = $db->prepare("INSERT INTO proveedor(prov_name,prov_nit,prov_dir,prov_tel1,prov_tel2,prov_cont1,prov_cont2,prov_comnt) VALUES (?,?,?,?,?,?,?,?);");
$resultado = $sentencia->execute([$prov_name,$prov_nit,$prov_dir,$prov_tel1,$prov_tel2,$prov_cont1,$prov_cont1,$prov_comnt]);

if($resultado === TRUE){
    header('Location: ../vistas/proveedor.php?mensaje=registrado');
}else{
    header('Location: ../vistas/proveedor.php?mensaje=error');
    exit();
}
?>