<?php
$clave = "";
$usuario = "root";
$nombre_db = "sistemacomercial";

try{
    $db = new PDO(
        'mysql:host=localhost;
        dbname='.$nombre_db,
        $usuario,
        $clave,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
}catch(Exception $e){
    echo "Problema con la conexion: ".$e->getMessage();
}
?>
  