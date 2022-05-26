<?php 
session_start();
 include 'plantilla/header.php' 

?>



<center>


    <br>
    <br>
    <h1>Accesos Rapidos</h1>
    <br>

    <center><a href="vistas/facturacion.php"><button class="btn btn">
                <h2>Facturacion</h2><BR><BR><img src="assets/img/factura.png" width="190">
            </button>
            <a href="vistas/articulo.php"><button class="btn btn">
                    <h2>Articulos</h2><BR><BR><img src="assets/img/producto.png" width="200">
                </button>
                <a href="vistas/cliente.php"><button class="btn btn">
                        <h2>Clientes</h2><BR><BR><img src="assets/img/cliente.png" width="200">
                    </button>
                    <a href="vistas/usuarios.php"><button class="btn btn">
                            <h2>Usuarios</h2><BR><BR><img src="assets/img/usuarios.png" width="200">
                        </button>
    </center>


</center>


<?php include 'plantilla/footer.php' ?>