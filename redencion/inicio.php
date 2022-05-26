
<?php

session_start();
if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
    header("location: login.php");
    exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include "plantilla/header.php"?>

</head>

<style>


body{

background-image: url(img/fondo.jpg);


}


</style>


<body>
<div class="container">

<center>

<br>
    <br>
        <br>
            <br>
                <br>

<center><a href="facturas.php"><button class="btn btn"><font size="3" face="Algerian" color="black">FACTURAS</font><BR><BR><img src="assets/img/factura.png" width="190"></button>
    <a href="productos.php"><button class="btn btn"><font size="3" face="Algerian" color="black">PRODUCTO</font><BR><BR><img src="assets/img/producto.png" width="200"></button>
    <a href="clientes.php"><button class="btn btn"><font size="3" face="Algerian" color="black">CLIENTE</font><BR><BR><img src="assets/img/cliente.png" width="200"></button>
    <a href="usuarios.php"><button class="btn btn"><font size="3" face="Algerian" color="black">USUARIOS</font><BR><BR><img src="assets/img/usuarios.png" width="200"></button></center>

</center>	
    
</div>

<?php
include("plantilla/footer.php");
?>
<script type="text/javascript" src="js/VentanaCentrada.js"></script>
<script type="text/javascript" src="js/facturas.js"></script>
</body>
</html>