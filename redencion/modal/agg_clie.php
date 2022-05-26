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
    header('Location: ../vistas/clientes.php?mesaje=falta');
}

include_once '../config/conexion.php';
$clie_name = $_POST["txtnombre"];
$clie_apell = $_POST["txtapellido"];
$clie_dui = $_POST["txtdui"];
$clie_nit = $_POST["txtnit"];
$clie_mail = $_POST["txtcorreo"];
$clie_tel1 = $_POST["txtdireccion"];
$clie_tel2 = $_POST["txttel1"];
$clie_dir = $_POST["txttel2"];
$clie_comnt = $_POST["txtcomentario"];

$sentencia = $db->prepare("INSERT INTO cliente(clie_name, clie_apell, clie_dui, clie_nit, clie_mail, clie_dir, clie_tel1, clie_tel2, clie_comnt) VALUES (?,?,?,?,?,?,?,?,?);");
$resultado = $sentencia->execute([$clie_name,$clie_apell,$clie_dui,$clie_nit,$clie_mail,$clie_tel1,$clie_dir,$clie_tel2,$clie_comnt]);

if ($resultado === TRUE) {
    header('Location: ../vistas/clientes.php?mensaje=registrado');
} else {
    header('Location: ../vistas/clientes.php?mensaje=error');
    exit();
}
?>