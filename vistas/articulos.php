<?php
session_start();

if(isset($_SESSION['usuario'])){


	?>



	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Articulos</title>
		<?php require_once "menu.php" ?>
	</head>
	<body>
		<div class="container">
			<h1>Articulos</h1>
			<div class="row">

				<div class="col-sm-4">
					<form id="frmArticulos" id="multipart/form-data" > <!--necesario para enviar archivos-->
					<label>Categorias</label>
					<select class="form-control input-sm" id="categoriaSelect" name="categoriaSelect">
<!--  Cuando invoca "A" quiere decir que el select está vacío (funciones.js) -->
						<option value="A">Selecciona una categoria </option>
					</select>
					<label>Nombre</label>
					<input type="text" class="form-control input-sm" id="nombre" name="nombre">
					<label>Descripcion</label>
					<input type="text" class="form-control input-sm" id="descripcion" name="descripcion">
					<label>Cantidad</label>
					<input type="text" class="form-control input-sm" id="cantidad" name="cantidad">
					<label>Precio</label>
					<input type="text" class="form-control input-sm" id="precio" name="precio">
					<label>Imagen</label>
					<input type="file" id="imagen" name="imagen">
					<p></p>
					<span id="btnAgregarArticulo" class="btn btn-primary">Agregar</span>
					</form>

				</div>
				<div class="col-sm-8">
					<div id="tablaArticulos"></div>
			
				</div>

			</div>
		</div>
	</body>
	</html>
		<script text="text/javascript">
			$(document).ready(function () {
				$('#tablaArticulosLoad').load("articulos/tablaArticulos.php");
				$('#btnAgregarArticulo').click(function(){
					vacios=validarFormVacio('frmArticulos');
					if(vacios > 0){
					alertify.alert("Debes llenar todos los campos!!");
					return false;
				}
				da
		datos=$('#frmArticulos').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../procesos/articulos/agregarArticulos.php",
			success:function(r){
				if(r==1){
					alertify.success("Agregado con éxtio");
				}else{
					alertify.error("No se pudo agregar")
				}
			}
		});
	});
				
			})
		</script>

	<?php

}else{
	header("location:../index.php");

}
?>