<?php 
	$usuario =$_POST['usuario'];
	$contrasena =$_POST['contrasena'];

	session_start();
	$_SESSION['usuario']=$usuario;
	$conex = mysqli_connect("localhost","root","","proyecto_educativo");

	$consulta="SELECT*FROM admin where usuario='$usuario' and password='$contrasena'";
	$resultado=mysqli_query($conex, $consulta);

	$filas=mysqli_num_rows($resultado);

	if($filas){
	header("location:interfaz_admin.html");
	} else{
		?>
		<?php
		include("login_admin.php");
		?>
		<br>
		<br>
		<!-- <center><h1>error de autentificacion</h1></center> -->
		<?php
	}

mysqli_free_result($resultado);
mysqli_close($conex);
?>