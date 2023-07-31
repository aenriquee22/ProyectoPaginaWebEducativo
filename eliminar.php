<?php 
$id_nota=$_GET['id_nota'];
include("con_bd.php");
$sql="delete from notas where id_nota='".$id_nota."'";
$resultado=mysqli_query($conex,$sql);

if($resultado){
	echo "<script language='JavaScript'> alert('Los datos fueron eliminados de forma correcta');
				location.assign('Nota.php')
				</script>";
}else{
	echo "<script language='JavaScript'> alert('ERROR: Los datos NO fueron eliminados de forma correcta');
				location.assign('Nota.php')
				</script>";

}
 ?>

