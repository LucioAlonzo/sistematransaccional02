<?php
print_r($_POST);
if (
    empty($_POST["oculto"]) ||
    empty($_POST["prod_name"]) ||
    empty($_POST["prod_desc"]) ||
    empty($_POST["prod_price"]) ||
    empty($_POST["prod_stock"]) ||
    empty($_POST["prod_comnt"]))
    {
    header('Location: ../vistas/articulo.php?mesaje=falta');
}

include_once '../config/conexion.php';
$prod_name = $_POST["nombre"];
$prod_desc = $_POST["descripcion"];
$prod_price = $_POST["precio"];
$prod_stock = $_POST["stock"];
$prod_comnt = $_POST["comentario"];

$sentencia = $db->prepare("INSERT INTO articulo(prod_name, prod_desc,prod_price,prod_stock, prod_comnt) VALUES (?,?,?,?,?);");
$resultado = $sentencia->execute([$prod_name, $prod_desc, $prod_price,$prod_stock, $prod_comnt]);

if ($resultado === TRUE) {
    header('Location: ../vistas/articulo.php?mensaje=registrado');
} else {
    header('Location: ../vistas/articulo.php?mensaje=error');
    exit();
}
?>