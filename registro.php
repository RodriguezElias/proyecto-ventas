<?php 
require_once "clases/Conexion.php";
$obj= new conectar();
$conexion = $obj->conexion();

$sql="SELECT * from usuarios where email='admin'";
$result = mysqli_query($conexion,$sql);
$validar = 0;
if(mysqli_num_rows($result)>0){
    header("location: index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <script src="librerias/jquery-3.2.1.min.js"></script>
    <script src="js/funciones.js"></script>

</head>
<body style="background-color: gray">
<<<<<<< HEAD
<<<<<<< HEAD
<br><br><br>
<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-danger">
					<div class="panel panel-heading">Registrar Administrador</div>
					<div class="panel panel-body">
						<form id="frmRegistro">
							<label>Nombre</label>
							<input type="text" class="form-control input-sm" name="nombre" id="nombre">
							<label>Apellido</label>
							<input type="text" class="form-control input-sm" name="apellido" id="apellido">
							<label>Usuario</label>
							<input type="text" class="form-control input-sm" name="usuario" id="usuario">
							<label>Password</label>
							<input type="text" class="form-control input-sm" name="password" id="password">
							<p></p>
							<span class="btn btn-primary" id="registro">Registrar</span>
							<a href="index.php" class="btn btn-danger">Regresar login</a>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
=======
=======
>>>>>>> 3a379e7... eliminado duplicado
    <br><br><br>
    <div class="container">
      <div class="row">
         <div class="col-sm-4"></div>
         <div class="col-sm-4">
            <div class="panel panel-danger">
               <div class="panel panel-heading">Registrar Administrador</div>
               <div class="panel panel-body">
                  <form id="frmRegistro">
                     <label>Nombre</label>
                     <input type="text" class="form-control input-sm" name="nombre" id="nombre">
                     <label>Apellido</label>
                     <input type="text" class="form-control input-sm" name="apellido" id="apellido">
                     <label>Usuario</label>
                     <input type="text" class="form-control input-sm" name="usuario" id="usuario">
                     <label>Password</label>
                     <input type="password" class="form-control input-sm" name="password" id="password">
                     <p></p>
                     <span class="btn btn-primary" id="registro">Registrar</span>
                     <a href="index.php" class="btn btn-danger">Volver</a>
                 </form>
             </div>
         </div>
     </div>
     <div class="col-sm-4"></div>
 </div>
</div>
<<<<<<< HEAD
>>>>>>> ae0567d... completado video 10
=======

>>>>>>> 3a379e7... eliminado duplicado
</body>
</html>


<script type="text/javascript">
    $(document).ready(function(){
        $('#registro').click(function(){

            vacios = validarFormVacio('frmRegistro');
            if(vacios > 0){
                alert("Debes llenar todos lo campos!");
                return false;
            }

            datos=$('#frmRegistro').serialize();
            $.ajax({
                type:"POST",
                data:datos,
                url:"procesos/regLogin/registrarUsuario.php",
                success:function(r){

                    if(r==1){
                        alert("Agregado con exito");
                    }else{
                        alert("Fallo al agregar");
                    }
                }
            });
        });

    });
</script>