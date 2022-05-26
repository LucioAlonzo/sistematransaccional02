<?php
require 'conexion.php';
session_start();

$usuario = $_POST['txtusuario'];
$clave = $_POST['txtpass'];

$q = "SELECT COUNT(*) as contar FROM  where = usr_user ='$usuario' and  usr_pass ='$clave' ";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['username'] = $usuario;
    header("location: ../login.php");
}else{
    echo "datos incorrectos";
}