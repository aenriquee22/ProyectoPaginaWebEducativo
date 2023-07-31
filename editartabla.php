<?php 

include("con_bd.php");
 ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EDITAR</title>
	<link rel="stylesheet" type="text/css" href="assets/css/estilos5tablas.css">
</head>
<body>
	<div class="top-bar">
	<img src="logo.png" alt="Logo" class="logo">
	<h1 class="title">The Universe Of Physics</h1>
	</div>
	<?php 
		if (isset($_POST['enviar'])) {
			$id=$_POST['id'];
			$nombre=$_POST['nombre'];
			$correo=$_POST['correo'];
			$usuario=$_POST['usuario'];
			$password=$_POST['password'];
			$fecha_reg=$_POST['fecha_reg'];


			$sql= "update estudiantes set nombre='".$nombre."', correo='".$correo."',usuario='".$usuario."',password='".$password."'where id='".$id."'";
			$resultado = mysqli_query($conex,$sql);
			if ($resultado ) {
				echo "<script language='JavaScript'> alert('Los datos fueron actualizados de forma correcta');
				location.assign('editar_tabla_estudiantes.php')
				</script>";
			}else{
				echo "<script language='JavaScript'> alert('ERROR: Los datos NO fueron actualizados de forma correcta');
				location.assign('editar_tabla_estudiantes.php')
				</script>";
			}
			mysqli_close($conex);
			
		}else{
			$id=$_GET['id'];
			$sql="select * from estudiantes where id='".$id."'";
			$resultado=mysqli_query($conex,$sql);

			$fila=mysqli_fetch_assoc($resultado);
			$nombre=$fila["nombre"];
			$correo=$fila["correo"];
			$usuario=$fila["usuario"];
			$password=$fila["password"];
			mysqli_close($conex);
	 ?>



	<h1>Editar Estudiantes</h1>
	<br>
	<br>
	<br>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		
		<label>Nombre:</label>
		<input type="text" name="nombre" value="<?php  echo $nombre;?>"> <br>
		<label>Correo:</label>
		<input type="text" name="correo" value="<?php  echo $correo;?>"> <br>
		<label>Usuario:</label>
		<input type="text" name="usuario" value="<?php  echo $usuario;?>"> <br>
		<label>Contraseña:</label>
		<input type="text" name="password" value="<?php  echo $password;?>"> <br>


		<input type="hidden" name="id" value="<?php  echo $id;?>">
		<input type="submit" name="enviar" class="boton" value="ACTUALIZAR">
		<a href="editar_tabla_estudiantes.php">Regresar</a>
	</form>
	<?php 
		}
	 ?>
</body>
</html>