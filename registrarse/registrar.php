<?php

    include ('../conectar.php');

    $usuario=$_POST['usuario'];
    $contrasenia=$_POST['contrasenia'];
    $documento=$_POST['documento'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];

    $sql_insertar="INSERT INTO vendedor (`id_vendedor`,`nombre_vendedor`,`doc_vendedor`,`telefono_vendedor`,`direc_vendedor`,`contrasenia_vendedor`) VALUES (NULL,'$usuario','$documento','$telefono','$direccion','$contrasenia')";

    $guardardatos= mysqli_query($mysql,$sql_insertar);

    if ($guardardatos){
        echo "
        <script>
            alert('El usuario fue creado con exito');
    	    location.href='../index.php';
        </script>
        ";
    }
else {
  echo "no se guardaron los datos";
}

?>