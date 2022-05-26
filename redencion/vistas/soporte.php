<?php 
session_start();
include '../plantilla/header.php' 

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <h1>Bienvenidos a soporte</h1>
        </div>

        <form class="row g-3">
            <div class="col-md-4">
                <label for="validationDefault01" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="validationDefault01">
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="validationDefault02">
            </div>
            <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label">Usuario</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationDefault03" class="form-label">Correo</label>
                <input type="text" class="form-control" id="validationDefault03" required>
            </div>
            <div class="col-md-3">
                <label for="validationDefault04" class="form-label">Problema en Modulo</label>
                <select class="form-select" id="validationDefault04" required>
                    <option selected disabled value="">Ventas...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="validationDefault05" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="validationDefault05" required>
            </div>
            <div class="col-md-3">
                <label for="validationDefault06" class="form-label">Detalle del Problema</label>
                <textarea class="form-control" name="comentario"></textarea>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>



        <!--SECCION DONDE SE MUESTRAN LOS ARTICULO-->

    </div>
</div>




<?php include '../plantilla/footer.php' ?>