<?php 
session_start();
include '../plantilla/header.php' 

?>
<?php
include_once "../config/conexion.php";
$sentencia = $db->query("select * from articulo");
$cliente = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($usuario);
?>



<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary mb-3">
                <div class="card-header">Detalles Cliente</div>
                <div class="card-body text-primary">

                    <div class="form-group row">

                        <div class="col-md-3">
                            <input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Codigo cliente" required>
                            <input id="id_cliente" type='hidden'>
                        </div>

                        <div class="col-md-3">
                            <input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Nombre cliente" required>
                            <input id="id_cliente" type='hidden'>
                        </div>

                        <div class="col-md-3">
                            <input type="text" class="form-control input-sm" id="mail" placeholder="NIT" readonly>
                        </div>

                        <div class="col-md-3">
                            <input type="text" class="form-control input-sm" id="mail" placeholder="telefono" readonly>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">

                        <div class="col-md-6">
                            <input type="text" class="form-control input-sm" id="tel1" placeholder="Direccion Entrega" readonly>
                        </div>

                        <div class="col-md-3">
                            <input type="text" class="form-control input-sm" id="mail" placeholder="Contacto" readonly>
                        </div>

                        <div class="col-md-3">
                            <input type="text" class="form-control input-sm" id="mail" placeholder="Email" readonly>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-primary mb-3">
                <div class="card-header">Detalles de Facturacion</div>
                <div class="card-body text-primary">
                    <?php
                    echo "Fecha de Facturacion: "
                        . date("d/m/Y") . "<br>";
                    ?>
                </div>
            </div>
        </div>
        <br />
    </div>
    <hr />
    <br />


    <style type="text/css" media="screen">
        .my-custom-scrollbar {
            position: relative;
            height: 200px;
            overflow: auto;
        }

        .table-wrapper-scroll-y {
            display: block;
        }
    </style>


    <div class="col-md-12">
        <div class="card border-success mb-3">
            <div class="card-header">Detalle de Compra</div>
            <div class="card-body text-success">
                <div class="p-6">
                    <table class="table align-midle">
                        <thead>
                            <tr>
                                <th width="2%">Cod Articulo</th>
                                <th width="10%">Descripcion</th>
                                <th width="5%">Precio Unitario</th>
                                <th width="5%">Stock</th>
                                <th width="3%">Cantidad</th>
                                <th width="3%">Total Linea</th>
                            </tr>
                        </thead>
                    </table>
                    <div class="table-wrapper-scroll-y my-custom-scrollbar">
                        <table class="table table-bordered table-striped mb-0">
                            <tbody>
                                <!--PRIMERA LINEA DE DETALLE DE FACTURA-->
                                <tr>
                                    <td width="2%">
                                        <input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Cod. Prod." required>
                                        <input id="id_cliente" type='hidden'>
                                    </td>
                                    <td width="10%"><input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Descripcion" required></td>
                                    <td width="5%">
                                    <input type="text" class="form-control input-sm" id="mail" placeholder="Precio" readonly>
                                    </td>
                                    <td width="5%">
                                    <input type="text" class="form-control input-sm" id="mail" placeholder="Stock" readonly>
                                    </td>
                                    <td width="3%">
                                    <input id="txt_cantidad" name="txt_cantidad" type="text" class="col-md-2 form-control" placeholder="Cantidad" autocomplete="off" />
                                    </td>
                                    <td width="3%">
                                        <p>-</p>
                                    </td>
                                </tr>
                                <!--SEGUNDA LINEA DE DETALLE DE FACTURA-->
                                <tr>
                                <td width="2%">
                                        <input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Cod. Prod." required>
                                        <input id="id_cliente" type='hidden'>
                                    </td>
                                    <td width="10%"><input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Descripcion" required></td>
                                    <td width="5%">
                                    <input type="text" class="form-control input-sm" id="mail" placeholder="Precio" readonly>
                                    </td>
                                    <td width="5%">
                                    <input type="text" class="form-control input-sm" id="mail" placeholder="Stock" readonly>
                                    </td>
                                    <td width="3%">
                                    <input id="txt_cantidad" name="txt_cantidad" type="text" class="col-md-2 form-control" placeholder="Cantidad" autocomplete="off" />
                                    </td>
                                    <td width="3%">
                                        <p>-</p>
                                    </td>
                                </tr>
                                <!--TERCERA LINEA DE DETALLE DE FACTURA-->
                                <tr>
                                <td width="2%">
                                        <input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Cod. Prod." required>
                                        <input id="id_cliente" type='hidden'>
                                    </td>
                                    <td width="10%"><input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Descripcion" required></td>
                                    <td width="5%">
                                    <input type="text" class="form-control input-sm" id="mail" placeholder="Precio" readonly>
                                    </td>
                                    <td width="5%">
                                    <input type="text" class="form-control input-sm" id="mail" placeholder="Stock" readonly>
                                    </td>
                                    <td width="3%">
                                    <input id="txt_cantidad" name="txt_cantidad" type="text" class="col-md-2 form-control" placeholder="Cantidad" autocomplete="off" />
                                    </td>
                                    <td width="3%">
                                        <p>-</p>
                                    </td>
                                </tr>
                                <!--CUARTA LINEA DE DETALLE DE FACTURA-->
                                <tr>
                                <td width="2%">
                                        <input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Cod. Prod." required>
                                        <input id="id_cliente" type='hidden'>
                                    </td>
                                    <td width="10%"><input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Descripcion" required></td>
                                    <td width="5%">
                                    <input type="text" class="form-control input-sm" id="mail" placeholder="Precio" readonly>
                                    </td>
                                    <td width="5%">
                                    <input type="text" class="form-control input-sm" id="mail" placeholder="Stock" readonly>
                                    </td>
                                    <td width="3%">
                                    <input id="txt_cantidad" name="txt_cantidad" type="text" class="col-md-2 form-control" placeholder="Cantidad" autocomplete="off" />
                                    </td>
                                    <td width="3%">
                                        <p>-</p>
                                    </td>
                                </tr>
                                <!--QUINTA LINEA DE DETALLE DE FACTURA-->
                                <tr>
                                <td width="2%">
                                        <input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Cod. Prod." required>
                                        <input id="id_cliente" type='hidden'>
                                    </td>
                                    <td width="10%"><input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Descripcion" required></td>
                                    <td width="5%">
                                    <input type="text" class="form-control input-sm" id="mail" placeholder="Precio" readonly>
                                    </td>
                                    <td width="5%">
                                    <input type="text" class="form-control input-sm" id="mail" placeholder="Stock" readonly>
                                    </td>
                                    <td width="3%">
                                    <input id="txt_cantidad" name="txt_cantidad" type="text" class="col-md-2 form-control" placeholder="Cantidad" autocomplete="off" />
                                    </td>
                                    <td width="3%">
                                        <p>-</p>
                                    </td>
                                </tr>
                                <!--SEXTA LINEA DE DETALLE DE FACTURA-->
                                <tr>
                                <td width="2%">
                                        <input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Cod. Prod." required>
                                        <input id="id_cliente" type='hidden'>
                                    </td>
                                    <td width="10%"><input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Descripcion" required></td>
                                    <td width="5%">
                                    <input type="text" class="form-control input-sm" id="mail" placeholder="Precio" readonly>
                                    </td>
                                    <td width="5%">
                                    <input type="text" class="form-control input-sm" id="mail" placeholder="Stock" readonly>
                                    </td>
                                    <td width="3%">
                                    <input id="txt_cantidad" name="txt_cantidad" type="text" class="col-md-2 form-control" placeholder="Cantidad" autocomplete="off" />
                                    </td>
                                    <td width="3%">
                                        <p>-</p>
                                    </td>
                                </tr>
                                <!--SEPTIMA LINEA DE DETALLE DE FACTURA-->
                                <tr>
                                <td width="2%">
                                        <input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Cod. Prod." required>
                                        <input id="id_cliente" type='hidden'>
                                    </td>
                                    <td width="10%"><input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Descripcion" required></td>
                                    <td width="5%">
                                    <input type="text" class="form-control input-sm" id="mail" placeholder="Precio" readonly>
                                    </td>
                                    <td width="5%">
                                    <input type="text" class="form-control input-sm" id="mail" placeholder="Stock" readonly>
                                    </td>
                                    <td width="3%">
                                    <input id="txt_cantidad" name="txt_cantidad" type="text" class="col-md-2 form-control" placeholder="Cantidad" autocomplete="off" />
                                    </td>
                                    <td width="3%">
                                        <p>-</p>
                                    </td>
                                </tr>
                                <!--OCTAVA LINEA DE DETALLE DE FACTURA-->
                                <tr>
                                <td width="2%">
                                        <input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Cod. Prod." required>
                                        <input id="id_cliente" type='hidden'>
                                    </td>
                                    <td width="10%"><input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Descripcion" required></td>
                                    <td width="5%">
                                    <input type="text" class="form-control input-sm" id="mail" placeholder="Precio" readonly>
                                    </td>
                                    <td width="5%">
                                    <input type="text" class="form-control input-sm" id="mail" placeholder="Stock" readonly>
                                    </td>
                                    <td width="3%">
                                    <input id="txt_cantidad" name="txt_cantidad" type="text" class="col-md-2 form-control" placeholder="Cantidad" autocomplete="off" />
                                    </td>
                                    <td width="3%">
                                        <p>-</p>
                                    </td>
                                </tr>
                                <!--NOVENA LINEA DE DETALLE DE FACTURA-->
                                <tr>
                                <td width="2%">
                                        <input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Cod. Prod." required>
                                        <input id="id_cliente" type='hidden'>
                                    </td>
                                    <td width="10%"><input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Descripcion" required></td>
                                    <td width="5%">
                                    <input type="text" class="form-control input-sm" id="mail" placeholder="Precio" readonly>
                                    </td>
                                    <td width="5%">
                                    <input type="text" class="form-control input-sm" id="mail" placeholder="Stock" readonly>
                                    </td>
                                    <td width="3%">
                                    <input id="txt_cantidad" name="txt_cantidad" type="text" class="col-md-2 form-control" placeholder="Cantidad" autocomplete="off" />
                                    </td>
                                    <td width="3%">
                                        <p>-</p>
                                    </td>
                                </tr>
                                <!--DECIMA LINEA DE DETALLE DE FACTURA-->
                                <tr>
                                <td width="2%">
                                        <input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Cod. Prod." required>
                                        <input id="id_cliente" type='hidden'>
                                    </td>
                                    <td width="10%"><input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Descripcion" required></td>
                                    <td width="5%">
                                    <input type="text" class="form-control input-sm" id="mail" placeholder="Precio" readonly>
                                    </td>
                                    <td width="5%">
                                    <input type="text" class="form-control input-sm" id="mail" placeholder="Stock" readonly>
                                    </td>
                                    <td width="3%">
                                    <input id="txt_cantidad" name="txt_cantidad" type="text" class="col-md-2 form-control" placeholder="Cantidad" autocomplete="off" />
                                    </td>
                                    <td width="3%">
                                        <p>-</p>
                                    </td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>



    <hr />
    <br />
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-primary mb-3">
                <div class="card-header">Detalles / Comentarios</div>
                <div class="card-body text-primary">
                    <p>Empleado del departamento</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-primary mb-3">
                <div class="card-header">Montos</div>
                <div class="card-body text-primary">
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br />
    </div>
</div>



<?php include '../plantilla/footer.php' ?>


<script>
    $(function() {
        $("#nombre_cliente").autocomplete({
            source: "./ajax/autocomplete/clientes.php",
            minLength: 2,
            select: function(event, ui) {
                event.preventDefault();
                $('#id_cliente').val(ui.item.id_cliente);
                $('#nombre_cliente').val(ui.item.nombre_cliente);
                $('#tel1').val(ui.item.telefono_cliente);
                $('#mail').val(ui.item.email_cliente);


            }
        });


    });

    $("#nombre_cliente").on("keydown", function(event) {
        if (event.keyCode == $.ui.keyCode.LEFT || event.keyCode == $.ui.keyCode.RIGHT || event.keyCode == $.ui.keyCode.UP || event.keyCode == $.ui.keyCode.DOWN || event.keyCode == $.ui.keyCode.DELETE || event.keyCode == $.ui.keyCode.BACKSPACE) {
            $("#id_cliente").val("");
            $("#nit").val("");
            $("#tel1").val("");
            $("#direccionEntrega").val("");
            $("#contacto").val("");
            $("#email").val("");

        }
        if (event.keyCode == $.ui.keyCode.DELETE) {
            $("#nombre_cliente").val("");
            $("#id_cliente").val("");
            $("#tel1").val("");
            $("#mail").val("");
        }
    });
</script>