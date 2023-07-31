<?php 

include("con_bd.php");
 ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EDITAR</title>
	<link rel="stylesheet" type="text/css" href="assets/css/estilos5notasprof.css">
</head>
<body>
	<div class="top-bar">
	<img src="logo.png" alt="Logo" class="logo">
	<h1 class="title">The Universe Of Physics</h1>
	</div>
	<?php 
		if (isset($_POST['enviar'])) {
			$id_nota=$_POST['id_nota'];
			$nombre=$_POST['nombre'];
			$apellido=$_POST['apellido'];
			$parcial1=$_POST['parcial1'];
			$parcial2=$_POST['parcial2'];
			$parcial3=$_POST['parcial3'];
			$promedio=$_POST['promedio'];


			$sql= "update notas set nombre='".$nombre."', apellido='".$apellido."',parcial1='".$parcial1."',parcial2='".$parcial2."',parcial3='".$parcial3."',promedio='".$promedio."' where id_nota='".$id_nota."'";
			$resultado = mysqli_query($conex,$sql);
			if ($resultado ) {
				echo "<script language='JavaScript'> alert('Los datos fueron actualizados de forma correcta');
				location.assign('Nota.php')
				</script>";
			}else{
				echo "<script language='JavaScript'> alert('ERROR: Los datos NO fueron actualizados de forma correcta');
				location.assign('Nota.php')
				</script>";
			}
			mysqli_close($conex);
			
		}else{
			$id_nota=$_GET['id_nota'];
			$sql="select * from notas where id_nota='".$id_nota."'";
			$resultado=mysqli_query($conex,$sql);

			$fila=mysqli_fetch_assoc($resultado);
			$nombre=$fila["nombre"];
			$apellido=$fila["apellido"];
			$parcial1=$fila["parcial1"];
			$parcial2=$fila["parcial2"];
			$parcial3=$fila["parcial3"];
			$promedio=$fila["promedio"];
			mysqli_close($conex);
	 ?>



	<h1>Editar Notas</h1>
	<br>
	
	<a onclick="mostrarCalculadora()" class="boton">CALCULADORA</a> 
	<br>
	<br>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		
		<label>Nombre:</label>
		<input type="text" name="nombre" value="<?php  echo $nombre;?>"> <br>
		<label>Apellido:</label>
		<input type="text" name="apellido" value="<?php  echo $apellido;?>"> <br>
		<label>Parcial 1:</label>
		<input type="text" name="parcial1" value="<?php  echo $parcial1;?>"> <br>
		<label>Parcial 2:</label>
		<input type="text" name="parcial2" value="<?php  echo $parcial2;?>"> <br>
		<label>Parcial 3:</label>
		<input type="text" name="parcial3" value="<?php  echo $parcial3;?>"> <br>
		<label>Promedio:</label>
		<input type="text" name="promedio" value="<?php  echo $promedio;?>"> <br>

		<input type="hidden" name="id_nota" value="<?php  echo $id_nota;?>">
		<input type="submit" name="enviar" class="boton" value="ACTUALIZAR">
		<a href="Nota.php">Regresar</a>
	</form>
	<?php 
		}
	 ?>

	 <!--<button onclick="mostrarCalculadora()">Abrir Calculadora</button> -->

<div id="calculadora" class="calculadora oculto">
  <input type="text" id="resultado" readonly>
  <div class="fila">
    <button onclick="agregarNumero('7')">7</button>
    <button onclick="agregarNumero('8')">8</button>
    <button onclick="agregarNumero('9')">9</button>
    <button onclick="operar('/')">/</button>
  </div>
  <div class="fila">
    <button onclick="agregarNumero('4')">4</button>
    <button onclick="agregarNumero('5')">5</button>
    <button onclick="agregarNumero('6')">6</button>
    <button onclick="operar('*')">*</button>
  </div>
  <div class="fila">
    <button onclick="agregarNumero('1')">1</button>
    <button onclick="agregarNumero('2')">2</button>
    <button onclick="agregarNumero('3')">3</button>
    <button onclick="operar('-')">-</button>
  </div>
  <div class="fila">
    <button onclick="agregarNumero('0')">0</button>
    <button onclick="agregarNumero('.')">.</button>
    <button onclick="calcularPorcentaje()">%</button>
    <button onclick="operar('+')">+</button>
  </div>
  <div class="fila">
    <button onclick="limpiar()">C</button>
    <button onclick="calcular()">=</button>
  </div>
  <div class="fila">
    <button onclick="ocultarCalculadora()">Salir</button>
  </div>
</div>


<script>
let expresion = '';

function mostrarCalculadora() {
  const calculadora = document.getElementById('calculadora');
  calculadora.classList.remove('oculto');
}

function ocultarCalculadora() {
  const calculadora = document.getElementById('calculadora');
  calculadora.classList.add('oculto');
}

function agregarNumero(numero) {
  expresion += numero;
  document.getElementById('resultado').value = expresion;
}

function limpiar() {
  expresion = '';
  document.getElementById('resultado').value = '';
}

function calcular() {
  try {
    const resultado = eval(expresion);
    document.getElementById('resultado').value = resultado;
  } catch (error) {
    document.getElementById('resultado').value = 'Error';
  }
}

function operar(operador) {
  expresion += operador;
  document.getElementById('resultado').value = expresion;
}

function calcularPorcentaje() {
  expresion = '(' + expresion + ')/100';
  document.getElementById('resultado').value = expresion;
}
</script>


</body>
</html>