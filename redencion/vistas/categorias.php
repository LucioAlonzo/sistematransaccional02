<?php 
session_start();
include '../plantilla/header.php' 

?>
<?php
include_once "../config/conexion.php";
$sentencia = $db->query("select * from categoria");
$categoria = $sentencia->fetchAll(PDO::FETCH_OBJ);
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
<h2>Administracion de Categorias</h2>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Nueva Categoria
            </button>
        </div>
        <div class="col-md-3">
            <form class="d-flex">
                <input onkeyup="buscar_ahora($('#buscar_1').val())" type="text" placeholder="Buscar Categoria" id="buscar_1" name="buscar_1">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
        <br>
        <!--SECCION DONDE SE MUESTRAN LOS USUARIOS-->
        <div class="p-6">
            <table class="table align-midle">
                <tr>
                    <th>ID</th>
                    <th>Codigo Categoria</th>
                    <th>Nombre Categoria</th>
                    <th>Estado</th>
                    <th>Creacion</th>
                    <th>Comentario</th>
                    <th scope="col" colspan="2">Administrar</th>
                </tr>
                <?php foreach ($categoria as $dato) { ?>
                    <tr>
                        <td><?php echo $dato->cat_id; ?></td>
                        <td><?php echo $dato->cat_cod; ?></td>
                        <td><?php echo $dato->cat_name; ?></td>
                        <td><?php echo $dato->cat_estado; ?></td>
                        <td><?php echo $dato->cat_reg; ?></td>
                        <td><?php echo $dato->cat_comnt; ?></td>
                        <td><a href="edit_usr.php?codigo=<?php echo $dato->cat_id; ?>" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarusuario"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<form method="POST" action="../modal/add_cat.php">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nueva Categoria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input class="form-control" placeholder="Codigo Categoria" name="txtcodcategoria" required="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                            <input class="form-control" placeholder="Nombre Categoria" name="txtnombrecat" required="">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text" name="txtcomentario">Comentario</span>
                        <textarea class="form-control"></textarea>
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

<script type="text/javascript">
    function buscar_ahora(buscar){
    var parametros = {"buscar":buscar};
    $.ajax({
        data:parametros,
    type: 'POST',
    url: 'buscador.php',
    sucess: function(data){
        document.getElementById("datos_buscador").innerHTML = data;
        }
    });
}
</script>

<?php include '../plantilla/footer.php' ?>