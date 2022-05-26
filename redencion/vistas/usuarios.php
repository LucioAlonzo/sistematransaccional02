<?php 
session_start();
include '../plantilla/header.php' ;


include_once "../config/conexion.php";
$sentencia = $db->query("select * from usuario");
$usuario = $sentencia->fetchAll(PDO::FETCH_OBJ);
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
<h2>Administracion de Usuarios</h2>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Nuevo Usuario
            </button>
        </div>
        <div class="col-md-3">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar Usuario" aria-label="Buscar">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
        <br>
        <!--SECCION DONDE SE MUESTRAN LOS USUARIOS-->
        <div class="p-6">
            <table class="table align-midle">
                <tr>
                    <th>ID</th>
                    <th>Usuario Sistema</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Contrasena</th>
                    <th>Estado</th>
                    <th>Alta</th>
                    <th>Comentario</th>
                    <th scope="col" colspan="2">Administrar</th>
                </tr>
                <?php foreach ($usuario as $dato) { ?>
                    <tr>
                        <td><?php echo $dato->usr_id; ?></td>
                        <td><?php echo $dato->usr_user; ?></td>
                        <td><?php echo $dato->usr_name; ?></td>
                        <td><?php echo $dato->usr_apell; ?></td>
                        <td><?php echo $dato->usr_mail; ?></td>
                        <td><?php echo $dato->usr_pass; ?></td>
                        <td><?php echo $dato->usr_act; ?></td>
                        <td><?php echo $dato->usr_reg; ?></td>
                        <td><?php echo $dato->usr_comnt; ?></td>
                       <!-- <td><button type="button" class="btn btn-primary" data-bs-toggle="modal edit_usr.php?codigo=" data-bs-target="#editarusuario"><i class="bi bi-pencil-square"></i></a></td>-->
                       <td><a href="edit_usr.php?codigo=<?php echo $dato->usr_id; ?>" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarusuario"><i class="bi bi-pencil-square"></i></a></td>
                        
                        <!--<td class="text-success"><a href="edit_usr.php?codigo=<?php echo $dato->usr_id; ?>"><i class="bi bi-pencil-square"></i></a></td>
                        <td class="text-danger"><i class="bi bi-trash"></i></td>-->
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>

<!-- MODAL PARA INSERTAR DATOS -->
<form method="POST" action="../modal/add_usr.php">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input class="form-control" placeholder="Usuario Sistema" name="usuario" required="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                            <input class="form-control" placeholder="Nombre" name="nombre" required="">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                            <input class="form-control" placeholder="Apellido" name="apellido" required="">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input class="form-control" placeholder="Usuario Correo" name="correo" required="">
                        <!--<span class="input-group-text" id="basic-addon2">@casacomercial</span>-->
                    </div>
                    <div class="input-group mb-3">
                        <input maxlength="10" minlength="5" type="password" name="clave" class="form-control" placeholder="Contrasena" required="">
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="activo" name="cheke">
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





<!-- MODAL PARA MODIFICAR DATOS -->





<form method="POST" action="add_usr.php">
    <div class="modal fade" id="editarusuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input class="form-control" placeholder="Usuario Sistema" name="usuario" >
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                            <input class="form-control" placeholder="Nombre" name="nombre">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                            <input class="form-control" placeholder="Apellido" name="apellido">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input class="form-control" placeholder="Usuario Correo" name="correo">
                        <!--<span class="input-group-text" id="basic-addon2">@casacomercial</span>-->
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="clave" class="form-control" placeholder="Contrasena">
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="activo" name="cheke">
                    </div>

                    <div class="input-group mb-3">
                        <p>Comentario</p>
                        <textarea class="form-control" name="comentario"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <input type="hidden" name="codigo" value="<?php echo $dato->usr_id; ?>"">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
</form>





<?php include '../plantilla/footer.php' ?>