<?php 
	$contrasena =$_POST['contrasena'];

	session_start();
	$conex = mysqli_connect("localhost","root","","proyecto_educativo");

	$consulta="SELECT*FROM pass where password='$contrasena'";
	$resultado=mysqli_query($conex, $consulta);

	$filas=mysqli_num_rows($resultado);

	if($filas){
	header("location:login_profesor.php");
	} else{
		?>
		<?php
		include("Profesores.php");
		?>
		<br>
		<br>
		<!-- <center><h1>error de autentificacion</h1></center> -->
		<?php
	}

mysqli_free_result($resultado);
mysqli_close($conex);
?>