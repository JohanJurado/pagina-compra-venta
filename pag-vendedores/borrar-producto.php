
<?php
include('../conectar.php');
//conectarme a mysql
$id=$_GET['id'];
$id_prod=$_GET['idprod'];

$opcion=$_GET['opcion'];

	if ($opcion==1)
	{
		$id=$_GET['id'];

   		$sqlb=mysqli_query($mysql,"delete from productos where id_prod='$id_prod'");


		header('location:index.php?prod=.&id='.$id);
		}
	else {
        echo "<script>
            var p;
            p = confirm('Seguro Desea Borrar el registro?');
            if(!p)
            {
                location.href='index.php?prod=.&id=$id&opcion=1';
            }
            else
            {
                location.href='borrar-producto.php?opcion=1&id=$id&idprod=$id_prod';
            }
            </script>";
	}
?>