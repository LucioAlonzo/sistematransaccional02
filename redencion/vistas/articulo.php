<?php 
session_start();
include '../plantilla/header.php' 

?>

<?php
include_once "../config/conexion.php";
$sentencia = $db->query("select * from articulo");
$articulo = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($usuario);
?>

<!--Mensaje de Alerta-->
<?php if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {
?>

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>
            Error!
        </strong> Completar todos los campos.
        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
    </div>

<?php } ?>


<h2>Administracion de Articulos</h2>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Nuevo Articulo
            </button>
        </div>

        <div class="col-md-3">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar Articulo" aria-label="Buscar">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
        <br>
        <!--SECCION DONDE SE MUESTRAN LOS ARTICULO-->
        <div class="p-6">
            <table class="table align-midle">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Estado</th>
                    <th>Alta</th>
                    <th>Comentario</th>
                    <th scope="col" colspan="2">Administrar</th>
                </tr>
                <?php foreach ($articulo as $dato) { ?>
                    <tr>
                        <td><?php echo $dato->prod_id; ?></td>
                        <td><?php echo $dato->prod_name; ?></td>
                        <td><?php echo $dato->prod_desc; ?></td>
                        <td><?php echo $dato->prod_price; ?></td>
                        <td><?php echo $dato->prod_stock; ?></td>
                        <td><?php echo $dato->prod_act; ?></td>
                        <td><?php echo $dato->prod_reg; ?></td>
                        <td><?php echo $dato->prod_comnt; ?></td>
                        <td><a href="edit_usr.php?codigo=<?php echo $dato->prod_id; ?>" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarusuario"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<form method="POST" action="../modal/add_art.php">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Articulo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input class="form-control" placeholder="Nombre" name="nombre" required="">
                    </div>

                    <div class="input-group mb-3">
                        <div class="col">
                            <input class="form-control" placeholder="Descripcion" name="descripcion" required="">
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col">
                            <input class="form-control" placeholder="Precio" name="precio" required="" pattern="[0-9]+">
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input class="form-control" placeholder="Stock" name="stock" required="" pattern="[0-9]+">
                        <!--<span class="input-group-text" id="basic-addon2">@casacomercial</span>-->
                    </div>

                    <!--
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Estado
                        </label>
                    </div>
                -->
                    <div class="input-group mb-3">
                        <p>Comentario</p>
                        <textarea class="form-control" name="comentario"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php include '../plantilla/footer.php' ?>