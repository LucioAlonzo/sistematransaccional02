$("#datos_factura").submit(function () {
	var id_cliente = $("#id_cliente").val();
	var id_vendedor = $("#id_vendedor").val();
	var condiciones = $("#condiciones").val();

	if (id_cliente == "") {
		alert("Debes seleccionar un cliente");
		$("#nombre_cliente").focus();
		return false;
	}
	VentanaCentrada('./pdf/documentos/factura_pdf.php?id_cliente=' + id_cliente + '&id_vendedor=' + id_vendedor + '&condiciones=' + condiciones, 'Factura', '', '1024', '768', 'true');
});