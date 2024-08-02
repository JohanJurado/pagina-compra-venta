<?php
                    
    $id=$_GET['id'];
    $prod=$_GET['prod'];
	$id_prod=$_GET['idprod'];
    include ('../conectar.php');

    $nombre_prod=$_POST['nombre_prod'];
    $tipo_prod=$_POST['tipo_prod'];
    $precio_prod=$_POST['precio_prod'];
    $descuento=$_POST['descuento'];

    $sql_actualizar="UPDATE productos SET nombre_prod='$nombre_prod', tipo_prod='$tipo_prod', precio_prod='$precio_prod', descuento='$descuento' WHERE id_vendedor=$id and id_prod=$id_prod";
    $resultado= mysqli_query($mysql,$sql_actualizar);

    if ($resultado) {
    echo "
        <script>
            alert ('La actualizacion del producto fue un exito');
            location.href='../pag-vendedores/index.php?prod=$prod&id=$id';
        </script>";
    }
    else {
        echo "
            <script>
                alert ('No se pudo actualizar el producto');
                location.href='../pag-vendedores/index.php?prod=$prod&id=$id';
            </script>";
        }
                    
    ?>