<?php

include("con_bd.php");

if ($conex) {
	echo"todo correcto";
}else{
	echo"todo mal";
}

if (isset($_POST['enviar'])){
	if (strlen($_POST['nombre']) >=1 &&
	strlen($_POST['correo']) >=1 &&
	strlen($_POST['usuario']) >=1 &&
	strlen($_POST['password']) >=1){
		$nombre = trim($_POST['nombre']);
		$correo = trim($_POST['correo']);
		$usuario = trim($_POST['usuario']);
		$password = trim($_POST['password']);
		$fecha_reg = date("d/m/y");
		$consulta = "INSERT INTO estudiantes( nombre, correo, usuario, password, fecha_reg) VALUES ('$nombre','$correo','$usuario','$password','$fecha_reg')";
		$resultado = mysqli_query($conex,$consulta);
		if($resultado){
				echo "<script language='JavaScript'> alert('Los datos fueron ingresados de forma correcta');
				</script>";
			}else{
				echo "<script language='JavaScript'> alert('ERROR: Los datos NO fueron ingresados de forma correcta');
				</script>";

				mysqli_close($conex);
			}
	}
}

?>