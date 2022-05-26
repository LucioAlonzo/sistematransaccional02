<?php
print_r($_POST);
if(empty($_POST["oculto"]) || 
empty($_POST["cat_cod"]) || 
empty($_POST["cat_name"]) || 
empty($_POST["cat_comnt"]))
{
    header('Location: ../vistas/categorias.php?mesaje=falta');
}

include_once '../config/conexion.php';
$cat_cod = $_POST["txtcodcategoria"];
$cat_name = $_POST["txtnombrecat"];
$cat_comnt = $_POST["txtcomentario"];

$sentencia = $db->prepare("INSERT INTO categoria(cat_cod,cat_name,cat_comnt) VALUES (?,?,?);");
$resultado = $sentencia->execute([$cat_cod,$cat_name,$cat_comnt]);

if($resultado === TRUE){
    header('Location: ../vistas/categorias.php?mensaje=registrado');
}else{
    header('Location: ../vistas/categorias.php?mensaje=error');
    exit();
}
?>