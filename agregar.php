<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario Agregar Nota</title>
	<link rel="stylesheet" type="text/css" href="assets/css/estilos5notas.css">
</head>
<body>
	<div class="top-bar">
	<img src="logo.png" alt="Logo" class="logo">
	<h1 class="title">The Universe Of Physics</h1>
	</div>
	<?php 
		if (isset($_POST['enviar'])) {
			$nombre=$_POST['nombre'];
			$apellido=$_POST['apellido'];
			$parcial1=$_POST['parcial1'];
			$parcial2=$_POST['parcial2'];
			$parcial3=$_POST['parcial3'];
			$promedio=$_POST['promedio'];

			include("con_bd.php");
			$sql= "INSERT INTO notas( nombre, apellido, parcial1, parcial2, parcial3, promedio)VALUES('$nombre','$apellido','$parcial1','$parcial2','$parcial3','$promedio')";

			$resultado = mysqli_query($conex,$sql);
			if($resultado){
				echo "<script language='JavaScript'> alert('Los datos fueron ingresados de forma correcta');
				location.assign('Nota.php')
				</script>";
			}else{
				echo "<script language='JavaScript'> alert('ERROR: Los datos NO fueron ingresados de forma correcta');
				location.assign('Nota.php')
				</script>";

				mysqli_close($conex);
			}
			
		}else{
	 ?>



	<h1>Agregar Alumno</h1>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<label>Nombre:</label>
		<input type="text" name="nombre"> <br>
		<label>Apellido:</label>
		<input type="text" name="apellido"> <br>
		<label>Parcial 1:</label>
		<input type="text" name="parcial1"> <br>
		<label>Parcial 2:</label>
		<input type="text" name="parcial2"> <br>
		<label>Parcial 3:</label>
		<input type="text" name="parcial3"> <br>
		<label>Promedio:</label>
		<input type="text" name="promedio"> <br>

		<input type="submit" name="enviar" class="boton" value="AGREGAR">
		<a href="Nota.php">Regresar</a>
	</form>
	<?php 
		}
	 ?>

</body>
</html>