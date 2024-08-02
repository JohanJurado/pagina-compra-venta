<?php



$servidor=('127.0.0.1');

$user=('root');

$clave=('');

$bd=('compra-venta');





$mysql= new mysqli($servidor,$user,$clave,$bd);



if (!$mysql) {

	echo "error al conectar".mysqli_error($mysql);

	}

?>