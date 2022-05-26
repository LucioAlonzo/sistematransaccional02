<?php
print_r($_POST);
if (
    empty($_POST["oculto"]) ||
    empty($_POST["clie_name"]) ||
    empty($_POST["clie_apell"]) ||
    empty($_POST["clie_dui"]) ||
    empty($_POST["clie_nit"]) ||
    empty($_POST["clie_mail"]) ||
    empty($_POST["clie_tel1"]) ||
    empty($_POST["clie_tel2"]) ||
    empty($_POST["clie_dir"]) ||
    empty($_POST["clie_comnt"]))
    {
    header('Location: ../vistas/cliente.php?mesaje=falta');
}

include_once '../config/conexion.php';
$clie_name = $_POST["nombre"];
$clie_apell = $_POST["apellido"];
$clie_dui = $_POST["dui"];
$clie_nit = $_POST["nit"];
$clie_mail = $_POST["correo"];
$clie_dir = $_POST["direccion"];
$clie_tel1 = $_POST["tel1"];
$clie_tel2 = $_POST["tel2"];
$clie_comnt = $_POST["comentario"];

$sentencia = $db->prepare("INSERT INTO cliente(clie_name,clie_apell,clie_dui,clie_nit,clie_mail,clie_dir,clie_tel,clie_tel2,clie_comnt) VALUES (?,?,?,?,?,?,?,?,?);");
$resultado = $sentencia->execute([$clie_name, $clie_apell,$clie_dui,$clie_nit, $clie_mail, $clie_dir, $clie_tel1, $clie_tel2, $clie_comnt]);

if ($resultado === TRUE) {
    header('Location: ../vistas/cliente.php?mensaje=registrado');
} else {
    header('Location: ../vistas/cliente.php?mensaje=error');
    exit();
}
