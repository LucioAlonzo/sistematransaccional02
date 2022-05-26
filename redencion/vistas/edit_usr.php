<?php 
session_start();
include '../plantilla/header.php' ;



    if(!isset($_GET['codigoclie'])){
        header('Location: ./modal/usuarios.php?mensaje=error');
        exit();
    }

    include_once '../config/conexion.php';
    $codigoclie = $_GET['codigoclie'];

    $sentencia = $bd->prepare("select * from usuario where usr_id = ?;");
    $sentencia ->execute([$codigoclie]);
    $usuario = $sentencia->fetch(PDO::FETCH_OBJ);
    print_r($usuario);

?>



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

 value="<?php echo $usuario->usr_user;?>" 
