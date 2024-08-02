<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Beller CV</title>

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,900;1,700;1,900&family=Pacifico&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,900;1,700;1,900&display=swap');

    </style>

</head>

<body>

    

    <nav class="row m-0">

        <div class="logo col-6">

            <img src="img/logo-cv.png" alt="logo">

            <p class="m-0">Beller CV</p>

        </div>

        <div class="buttons col-6">

            <button class="iniciar-sesion" onclick="location.href='./registrarse/index.php'">Registrarse</button>

            <button class="subir-producto" onclick="location.href='./inicio-sesion/inicio-sesion.php'">Subir producto</button>

        </div>

    </nav>

    <section class="banner row m-0">

        <div class="texto-banner col-6 m-0 row">

            <p class="p-0">Compra y vende <br> todo desde un <br>mismo sitio</p>

            <form class="col-10" action="./pag-busquedas/llegada.php?desc=0" method="post">

                <input type="text" name="buscar" placeholder="Encuentralo aquí">

                <button>Buscar</button>

            </form>

        </div>

        <div class="img-banner col-6 m-0">

            <img src="img/img-banner.png" alt="img-banner">

        </div>

    </section>

    <section class="productos">

        <img class="img-productos" src="img/fondo.jpg" alt="fondo">

        <p class="titulo">¿Qué te interesa comprar o vender?</p>

        <p class="subtitulo">Échale un vistazo a las categorías más populares</p>



        <div class="cosas">

            <button class="ob" onclick="location.href='pag-busquedas/index.php?desc=coches'">

                <img src="img/coche.png" alt="">

                <p class="m-0" >Coches</p>

            </button>

            <button class="ob" onclick="location.href='pag-busquedas/index.php?desc=moviles'">

                <img src="img/telefono-inteligente.png" alt="">

                <p class="m-0" >Moviles</p>

            </button>

            <button class="ob" onclick="location.href='pag-busquedas/index.php?desc=muebles'">

                <img src="img/muebles.png" alt="">

                <p class="m-0" >Muebles</p>

            </button>

            <button class="ob" onclick="location.href='pag-busquedas/index.php?desc=bicicletas'">

                <img src="img/bicicleta.png" alt="">

                <p class="m-0" >Bicicletas</p>

            </button>

            <button class="ob" onclick="location.href='pag-busquedas/index.php?desc=televisores'">

                <img src="img/televisor.png" alt="">

                <p class="m-0" >Televisores</p>

            </button>

            <button class="ob" onclick="location.href='pag-busquedas/index.php?desc=cocina'">

                <img src="img/cocina.png" alt="">

                <p class="m-0" >Cocina</p>

            </button>

            <button class="ob" onclick="location.href='pag-busquedas/index.php?desc=relojes'">

                <img src="img/reloj.png" alt="">

                <p class="m-0" >Relojes </p>

            </button>

            <button class="ob" onclick="location.href='pag-busquedas/index.php?desc=otros'">

                <img src="img/otros.png" alt="">

                <p class="m-0" >Otros</p>

            </button>

        </div>

    </section>

    <section class="beneficios">

        <h2>Aquí tienes de <strong> todo</strong></h2>

        <div class="texto">

            <div>

                <h6>Mas <strong>oportunidades</strong></h6>

                <p>Todos los compradores y <br>

                    vendedores, juntos en <br>

                    una sola plataforma, para <br>

                    que te sea mucho más <br>

                    fácil encontrar lo que <br>

                    buscas.</p>

            </div>

            <div>

                <h6>Nuevas <strong>funcionalidades</strong></h6>

                <p>Gestionas tu cuenta con <br>

                    unos simples clics. <br>

                    Puedes chatear con otros <br>

                    usuarios, guardar tus <br>

                    favoritos o crear alertas <br>

                    de lo que te interesa.</p>

            </div>

            <div>

                <h6><strong>Envíos</strong> fáciles y comodos</h6>

                <p>Compra y vende de forma <br>

                    segura sin moverte de <br>

                    casa, o bien lleva tú <br>

                    mismo el producto a <br>

                    Correos. Tú eliges.</p>

            </div>

        </div>

    </section>

    <section class="ventas-productos">

        <?php

            include ('conectar.php');

            include('productos.php');

        ?>

    </section>

    <section class="llamada-vender">

        <div class="contenedor">

            <div class="img">

                <img src="img/img-llamada.jpg" alt="">

            </div>

            <div class="llamada">

                <h2>¿Tienes objetos <br>de poco uso?</h2>

                <p class="m-0">Puedes venderlos aqui</p>

                <hr>

                <button onclick="location.href='./registrarse/index.php'">Deseo Vender</button>

            </div>

        </div>

    </section>

    <footer>

        <small>Copyright © 2023 Better CV © de sus respectivos propietarios</small>

        <p class="m-0">Better CV</p>

    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>