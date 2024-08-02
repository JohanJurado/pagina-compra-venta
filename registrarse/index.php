<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrarse</title>

    <link rel="stylesheet" href="estilos-registrarse.css">

</head>

<body>



            <form action="./registrar.php" method="post" enctype="multipart/form-data">

                <div class="title">

                    <h2 class="m-0">REGISTRARSE</h2>

                    <hr>

                </div>

                <input type="text" placeholder="Nombre Usuario" name="usuario" required>

                <input type="password" placeholder="Contraseña" name="contrasenia" required>

                <input type="number" placeholder="N° Documento" name="documento" required>

                <input type="text" placeholder="Telefono" name="telefono" required>

                <input type="text" placeholder="Direccion" name="direccion" required>

                <button><h2>REGISTRAR</h2></button>

            </form>



</body>

</html>