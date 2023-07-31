<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validacion</title>
	<link rel="stylesheet" href="assets/css/style1.css">

</head>
<body>
	<div class="top-bar">
   <img src="logo.png" alt="Logo" class="logo">
   <h1 class="title">The Universe Of The Physics</h1>
  </div>
<!--
  	<div class="video-background">
    <video autoplay muted loop>
      <source src="video/video6.mp4" type="video/mp4">
      Tu navegador no admite la etiqueta de video.
    </video>
  </div>
-->
	<form action="validarcodigo.php" method="post">
	<section class="form-registro">
		<h4>Codigo Profesores</h4>
		<input class= "controls" type="password" name="contrasena" id= "contrasena" placeholder=" contrasena">


		<input class= "botons" type="submit" value="validar">
		<p> <a href="prueba.html">Regresar</a></p>
	</section>
	</form>

	<?php 
include("con_bd.php");
	 ?>

</body>

</html>