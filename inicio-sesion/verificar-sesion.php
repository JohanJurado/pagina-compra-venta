<?php

    include ("../conectar.php");

    $usuario=$_POST["usuario"];
    $contrasenia=$_POST["contrasenia"];

    $sql_buscar="SELECT * FROM vendedor WHERE (nombre_vendedor='$usuario') AND (contrasenia_vendedor='$contrasenia');";
    $resultado= mysqli_query($mysql,$sql_buscar);
    $estado=mysqli_fetch_array($resultado);
	$id=$estado['id_vendedor'];

    if ($estado['nombre_vendedor']=="admin"){
        echo "
        <script>
            alert ('Bienvenido Administrador');
            location.href='../admin/index.php?name=$usuario';
        </script>
        ";
    }
    else if ($estado['nombre_vendedor']){
        echo "
        <script>
            alert ('La inserccion de los datos fue correcta');
            location.href='../pag-vendedores/index.php?prod=.&id=$id';
        </script>
        ";
    }
    else {
        echo "
        <script>
            alert ('No se encontro ningun usuario con estos datos');
            location.href='../inicio-sesion/inicio-sesion.php';
        </script>
        ";
    }

?>