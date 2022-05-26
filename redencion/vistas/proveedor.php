<?php 
session_start();
include '../plantilla/header.php' 

?>
<?php
include_once "../config/conexion.php";
$sentencia = $db->query("select * from proveedor");
$proveedor = $sentencia->fetchAll(PDO::FETCH_OBJ);
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
<h2>Administracion de Proveedores</h2>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Nuevo Proveedor
            </button>
        </div>
        <div class="col-md-3">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar Proveedor" aria-label="Buscar">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
        <br>
        <!--SECCION DONDE SE MUESTRAN LOS USUARIOS-->
        <div class="p-6">
            <table class="table align-midle">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>N. Tributario</th>
                    <th>Direccion</th>
                    <th>Telefono 1</th>
                    <th>Telefono 2</th>
                    <th>Contacto 1</th>
                    <th>Contacto 2</th>
                    <th>Estado</th>
                    <th>Fecha de Creacion</th>
                    <th>Comentario</th>
                    <th scope="col" colspan="2">Administrar</th>
                </tr>
                <?php foreach ($proveedor as $dato) { ?>
                    <tr>
                        <td><?php echo $dato->prov_id; ?></td>
                        <td><?php echo $dato->prov_name; ?></td>
                        <td><?php echo $dato->prov_nit; ?></td>
                        <td><?php echo $dato->prov_dir; ?></td>
                        <td><?php echo $dato->prov_tel1; ?></td>
                        <td><?php echo $dato->prov_tel2; ?></td>
                        <td><?php echo $dato->prov_cont1; ?></td>
                        <td><?php echo $dato->prov_cont2; ?></td>
                        <td><?php echo $dato->prov_estado; ?></td>
                        <td><?php echo $dato->prov_reg; ?></td>
                        <td><?php echo $dato->prov_comnt; ?></td>
                        <td><a href="edit_usr.php?codigo=<?php echo $dato->prov_id; ?>" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarusuario"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<form method="POST" action="../modal/add_prov.php">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Proveedor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <div class="input-group mb-3">
                        <input class="form-control" placeholder="Nombre Proveedor" name="nombre" required>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col">
                            <input maxlength="14" class="form-control" placeholder="NIT (14 Digitos)" name="nit" pattern="[0-9]+" required>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col">
                            <input class="form-control" placeholder="Direccion" name="direccion" required>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input maxlength="8" class="form-control" placeholder="Telefono 1 (8 Digitos)" name="telefono1" pattern="[0-9]+" requiered>
                    </div>
                    <div class="input-group mb-3">
                        <input maxlength="8" class="form-control" placeholder="Telefono 2 (8 Digitos)" name="telefono2" pattern="[0-9]+" requiered>
                    </div>

                    <div class="input-group mb-3">
                        <input class="form-control" placeholder="Contacto Principal" name="contacto1" required>
                    </div>

                    
                    <div class="input-group mb-3">
                        <input class="form-control" placeholder="Contacto Respaldo" name="contacto2" >
                    </div>

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