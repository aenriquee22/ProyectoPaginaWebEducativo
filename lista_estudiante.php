<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabla Registro</title>

	<link rel="stylesheet" type="text/css" href="assets/css/estilos5notasprof.css">
</head>
<body>
<div class="top-bar">
<img src="logo.png" alt="Logo" class="logo">
<h1 class="title">The Universe Of Physics</h1>
</div>

	<?php 
		include("con_bd.php");

		$sql="SELECT * from estudiantes";
		$resultado=mysqli_query($conex,$sql);
	 ?>
	<h1>Estudiantes Registrados</h1>
	<br>
	<br>
	<br>
	<br>
<table>
	<thead>
		
		<tr>
				 <th>id</th>
				 <th>nombre</th>
				 <th>correo</th>
				 <th>usuario</th>
				 <th>fecharegistro</th>
		</tr>

	</thead>
	<tbody>
			<?php 
					while ($filas=mysqli_fetch_assoc($resultado)) {
 			?>
 	<tr>
		<td> <?php echo $filas['id']; ?> </td>
		<td> <?php echo $filas['nombre']; ?> </td>
		<td> <?php echo $filas['correo']; ?> </td>
		<td> <?php echo $filas['usuario']; ?> </td>
		<td> <?php echo $filas['fecha_reg']; ?> </td>
		<td>

		</td>
	</tr>
			<?php 
					}
			 ?>
	</tbody>
</table>
<?php 
	mysqli_close($conex);
 ?>
</body>
</html>