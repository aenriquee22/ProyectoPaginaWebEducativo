<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TABLA PROFESOR</title>

	<script type="text/javascript">
		function confirmar() {
			// body...
			return confirm('¿Esta seguro de que quiere eliminar a este estudiante?');
		}
	</script>
	<link rel="stylesheet" type="text/css" href="assets/css/estilos5tablas.css">

</head>
<body>
<div class="top-bar">
<img src="logo.png" alt="Logo" class="logo">
<h1 class="title">The Universe Of Physics</h1>
</div>
	
	<?php 
		include("con_bd.php");

		$sql="select * from profesor";
		$resultado=mysqli_query($conex,$sql);
	 ?>
	<h1>Editar Profesor</h1>
<!--<a href="agregar.php">AGREGAR ALUMNO</a> --> 
<a href="interfaz_editar_tabla.html">VOLVER</a> 
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
				 <th>password</th>
				 <th>fecha_reg</th>
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
		<td> <?php echo $filas['password']; ?> </td>
		<td> <?php echo $filas['fecha_reg']; ?> </td>
		<td>
<?php echo "<a href='editartablaprofesor.php?id=".$filas['id']."'>EDITAR</a>"; ?>
			-
<?php echo " <a href='eliminar_tabla_profesor.php?id=".$filas['id']."' onclick='return confirmar()'>ELIMINAR</a>"; ?>

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