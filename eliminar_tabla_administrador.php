<?php 
$id=$_GET['id'];
include("con_bd.php");
$sql="delete from admin where id='".$id."'";
$resultado=mysqli_query($conex,$sql);

if($resultado){
	echo "<script language='JavaScript'> alert('Los datos fueron eliminados de forma correcta');
				location.assign('editar_tabla_administrador.php')
				</script>";
}else{
	echo "<script language='JavaScript'> alert('ERROR: Los datos NO fueron eliminados de forma correcta');
				location.assign('editar_tabla_administrador.php')
				</script>";

}
 ?>