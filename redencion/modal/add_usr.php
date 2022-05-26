<?php
print_r($_POST);
if (
    empty($_POST["oculto"]) ||
    empty($_POST["usr_user"]) ||
    empty($_POST["usr_name"]) ||
    empty($_POST["usr_apell"]) ||
    empty($_POST["usr_mail"]) ||
    empty($_POST["usr_pass"]) ||
    empty($_POST["usr_comnt"])
) {
    header('Location: ../vistas/usuarios.php?mesaje=falta');
}

include_once '../config/conexion.php';
$usr_user = $_POST["usuario"];
$usr_name = $_POST["nombre"];
$usr_apell = $_POST["apellido"];
$usr_mail = $_POST["correo"];
$usr_pass = $_POST["clave"];
$usr_comnt = $_POST["comentario"];

$sentencia = $db->prepare("INSERT INTO usuario(usr_user,usr_name,usr_apell,usr_mail,usr_pass,usr_comnt) VALUES (?,?,?,?,?,?);");
$resultado = $sentencia->execute([$usr_user, $usr_name, $usr_apell, $usr_mail, $usr_pass, $usr_comnt]);

if ($resultado === TRUE) {
    header('Location: ../vistas/usuarios.php?mensaje=registrado');
} else {
    header('Location: ../vistas/usuarios.php?mensaje=error');
    exit();
}
