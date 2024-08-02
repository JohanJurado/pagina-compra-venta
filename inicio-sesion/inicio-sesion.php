<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Iniciar Sesión</title>

    <link rel="stylesheet" href="estilos-inicio-sesion.css">

</head>

<body>

            <form action="./verificar-sesion.php" method="post" enctype="multipart/form-data">

                <div class="title">

                    <h2 class="m-0">INICIAR SESION</h2>

                    <hr>

                </div>

                <input type="text" placeholder="Nombre Usuario" name="usuario" required>

                <input type="password" placeholder="Contraseña" name="contrasenia" required>

                <button><h2>ENTRAR</h2></button>

            </form>

</body>

</html>