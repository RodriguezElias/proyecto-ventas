<?php 
require_once "../../clases/Conexion.php";
require_once "../../clases/Categorias.php";

$obj = new categorias();

$datos = array(
	$_POST['idcategoria'],
	$_POST['categoriaU']
);

echo $obj->actualizaCategoria($datos);

?>