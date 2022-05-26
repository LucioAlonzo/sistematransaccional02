<?php 
session_start();
session_destroy();
header('Location: /redencion/login.php')
?>