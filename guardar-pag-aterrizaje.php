<?php

include ("conectar.php");


$nombre=$_POST['nombre_prod'];
$id=$_POST['id_vendedor'];
$foto=$_FILES['foto_prod']['name'];
$precio=$_POST['precio_prod'];
$tipo=$_POST['tipo_prod'];
$descuento=$_POST['descuento'];


$destino='img';
move_uploaded_file($_FILES['foto_prod']['tmp_name'], $destino.'/'.$_FILES['foto_prod']['name']);


$sql_insertar= "INSERT INTO `productos` (`id_prod`,
`nombre_prod`,`id_vendedor`,`foto_prod`,
`precio_prod`, `tipo_prod`, `descuento`) VALUES 
(NULL, '$nombre', '$id', '$foto', '$precio', '$tipo', '$descuento')";


$guardardatos= mysqli_query($mysql,$sql_insertar);

if ($guardardatos) {
	echo "<script>
	alert ('La inserccion de los datos fue correcta');
	location.href='index.php';
	</script>";
	}
else {
	echo "Error en la inserccion". mysqli_error($mysql)."a href='../index.html'><---regresar </a>";
	}
	
	mysqli_close($mysql);





?>