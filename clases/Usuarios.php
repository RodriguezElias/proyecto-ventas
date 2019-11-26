  
<?php 
	class usuarios{
		public function registroUsuario($datos){
			$c=new conectar();
			$conexion=$c->conexion();
			$fecha=date('Y-m-d');
			$sql="INSERT into usuarios (nombre,
								apellido,
								email,
								password,
								fechaCaptura)
						values ('$datos[0]',
								'$datos[1]',
								'$datos[2]',
								'$datos[3]',
								'$fecha')";
			return mysqli_query($conexion,$sql);
		}
    }

?>


