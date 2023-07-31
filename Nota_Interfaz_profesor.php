<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Notas</title>

	<link rel="stylesheet" type="text/css" href="assets/css/estilos5notasprof.css">
</head>
<body>
<div class="top-bar">
<img src="logo.png" alt="Logo" class="logo">
<h1 class="title">The Universe Of Physics</h1>
</div>

	<?php 
		include("con_bd.php");

		$sql="SELECT * from notas";
		$resultado=mysqli_query($conex,$sql);
	 ?>
	<h1>Notas Estudiantes</h1>
	<br>
	<br>
	<br>
	<br>
<table>
	<thead>
		
		<tr>
				 <th>id</th>
				 <th>nombre</th>
				 <th>apellido</th>
				 <th>parcial1</th>
				 <th>parcial2</th>
				 <th>parcial3</th>
				 <th>promedio</th>
		</tr>

	</thead>
	<tbody>
			<?php 
					while ($filas=mysqli_fetch_assoc($resultado)) {
 			?>
 	<tr>
		<td> <?php echo $filas['id_nota']; ?> </td>
		<td> <?php echo $filas['nombre']; ?> </td>
		<td> <?php echo $filas['apellido']; ?> </td>
		<td> <?php echo $filas['parcial1']; ?> </td>
		<td> <?php echo $filas['parcial2']; ?> </td>
		<td> <?php echo $filas['parcial3']; ?> </td>
		<td> <?php echo $filas['promedio']; ?> </td>
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