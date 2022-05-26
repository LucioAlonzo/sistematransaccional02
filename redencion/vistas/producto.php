<?php
class Producto
{
	function get(){
		$sql = "SELECT * FROM articulo";
		global $cnx;
		return $cnx->query($sql);
	}
	
	function getById($id){
		$sql = "SELECT * FROM articulo WHERE id=$id";
		global $cnx;
		return $cnx->query($sql);
	}
}