<?php
                    
    $id=$_GET['id'];
    include ('../conectar.php');

    $nombre_prod=$_POST['nombre_prod'];
    $tipo_prod=$_POST['tipo_prod'];
    $precio_prod=$_POST['precio_prod'];
    $descuento=$_POST['descuento'];
    $foto_prod=$_FILES['foto']['name'];

    $destino='../img';
    move_uploaded_file($_FILES['foto']['tmp_name'], $destino.'/'.$_FILES['foto']['name']);

    $sql_agregar= "INSERT INTO `productos` (`id_prod`,
    `nombre_prod`,`id_vendedor`,`foto_prod`,
    `precio_prod`, `tipo_prod`, `descuento`, `etiqueta_producto`) VALUES 
    (NULL, '$nombre_prod', '$id', '$foto_prod', '$precio_prod', '$tipo_prod', '$descuento', '$tipo_prod')";

    $guardardatos= mysqli_query($mysql,$sql_agregar);

    if ($guardardatos) {
    echo "
        <script>
            alert ('La inserción del nuevo producto fue un exito');
            location.href='../pag-vendedores/index.php?prod=.&id=$id';
        </script>";
    }
    else {
        echo "
            <script>
                alert ('No se pudo agregar el producto');
                location.href='../pag-vendedores/index.php?prod=.&id=$id';
            </script>";
        }
                    
    ?>