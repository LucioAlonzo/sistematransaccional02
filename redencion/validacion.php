<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sistemacomercial";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conn){
    die("no hay conexion: ".mysqli_connect_error());
}
$usuario = $_POST["txtusuario"];
$pass = $_POST["txtpass"];

$query = mysqli_query($conn, "SELECT * FROM usuario WHERE usr_user='".$usuario."' and usr_pass = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr ==1){  
    header("Location: index.php");
}else if($nr == 0){
    echo "error luxho";
}
?>