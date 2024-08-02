<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Productos</title>

    <link rel="stylesheet" href="vendedores.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">



    <style>

        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,900;1,700;1,900&family=Pacifico&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,900;1,700;1,900&display=swap');

    </style>

</head>



<body>

    <nav>

        <div class="logo"><a href="../pag-busquedas/index.php?desc=."><img src="../img/logo-cv.png" alt=""></a></div>

        <div><p class="m-0">Productos</p></div>

        <div class="end">

            <button onclick="location.href='../index.php'">Volver</button>

        </div>

    </nav>



    <main>

        <section class="lateral">

            <h5>Productos</h5>

            <div class="eleccion">

                <img src="../img/iconos/coche.png" alt="coches">

                <a href="../pag-busquedas/index.php?desc=coches">Coches</a>

            </div>

            <div class="eleccion">

                <img src="../img/iconos/telefono-inteligente.png" alt="moviles">

                <a href="../pag-busquedas/index.php?desc=moviles">Moviles</a>

            </div>

            <div class="eleccion">

                <img src="../img/iconos/muebles.png" alt="muebles">

                <a href="../pag-busquedas/index.php?desc=muebles">Muebles</a>

            </div>

            <div class="eleccion">

                <img src="../img/iconos/bicicleta.png" alt="bicicletas">

                <a href="../pag-busquedas/index.php?desc=bicicletas">Bicicletas</a>

            </div>

            <div class="eleccion">

                <img src="../img/iconos/televisor.png" alt="televisores">

                <a href="../pag-busquedas/index.php?desc=televisores">Televisores</a>

            </div>

            <div class="eleccion">

                <img src="../img/iconos/cocina.png" alt="cocina">

                <a href="../pag-busquedas/index.php?desc=cocina">Cocina</a>

            </div>

            <div class="eleccion">

                <img src="../img/iconos/reloj.png" alt="reloj">

                <a href="../pag-busquedas/index.php?desc=reloj">Relojes</a>

            </div>

            <div class="eleccion">

                <img src="../img/iconos/otros.png" alt="otros">

                <a href="../pag-busquedas/index.php?desc=otros">Otros</a>

            </div>

        </section>

        <section class="pantalla">

            <div class="productos">



                <?php



                    $descGET=$_GET['desc'];

                    include ("../conectar.php");



                    $sql_buscar="SELECT * FROM productos WHERE etiqueta_producto LIKE '%$descGET%' OR nombre_prod LIKE '%$descGET%'";



                    

                    $busqueda=mysqli_query($mysql, $sql_buscar);



                    while ($producto=mysqli_fetch_array($busqueda)){

                        echo '

                        <div class="caja">

                            <button data-bs-toggle="modal" data-bs-target="#modal_estructura'.$producto['id_prod'].'" class="img"><img src="../img/'.$producto['foto_prod'].'" alt="foto"></button>

                            <p>'.$producto['nombre_prod'].'</p>

                        </div>

                        ';

                    }

                

                ?>



                

                <!-----------------INICIO MODAL CAMBIAR PRECIO--------------->



                <?php



                    $descGET=$_GET['desc'];

                    include ("../conectar.php");



                    $sql_buscar="SELECT * FROM productos WHERE etiqueta_producto LIKE '%$descGET%' OR nombre_prod LIKE '%$descGET%'";

                    $busqueda=mysqli_query($mysql, $sql_buscar);



                    while ($producto=mysqli_fetch_array($busqueda)){

                      

                      $sql_buscar_vendedor="SELECT * FROM vendedor WHERE id_vendedor='".$producto['id_vendedor']."'";

                      $busqueda_vendedor=mysqli_query($mysql, $sql_buscar_vendedor);

                      $vendedor=mysqli_fetch_array($busqueda_vendedor);

                    

                    echo '

                    

                        <div class="modal" data-bs-backdrop="static"  id="modal_estructura'.$producto['id_prod'].'" >

                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"> 

                                <div class="modal-content"> 

                                    <H4 class="modal-header">

                                    	<p>Comprar Producto</p>                                

									</H4>

                                    <div class="modal-body">

                                        <div class="desc">

                                            <div class="imagen-prod">

                                                <div class="caja">

                                                    <div class="img"><img src="../img/'.$producto['foto_prod'].'" alt="foto"></div>

                                                </div>

                                            </div>

                                            <div class="info">                                                

                                                <label for="nombre_prod" class="label"><strong>Vendedor(a):</strong> '.$vendedor['nombre_vendedor'].'</label>

                                                <label class="label mb-1"><strong>Cel:</strong> '.$vendedor['telefono_vendedor'].'</label>

                                                

                                                <label for="nombre_prod" class="label">Nombre Producto:</label>

                                                <label class="input">'.$producto['nombre_prod'].'</label> 

                                                <label for="tipo_prod" class="label">Tipo Producto:</label>

                                                <label class="input">'.$producto['tipo_prod'].'</label>

                                                <label for="precio_prod" class="label">Precio Producto:</label>

                                                <label class="input">$'.number_format($producto['precio_prod']).'</label>

                                                <label for="descuento" class="label">Descuento %:</label>

                                                <label class="input">'.$producto['descuento'].'%</label>



                                            </div>

                                        </div>

                                        <H6 class="mt-3 mb-3">Datos Personales: </H6>

                                        <form class="info">

                                            <label class="label">Nombre Completo:</label>

                                            <input type="text" class="input" id="floating nombre" placeholder="Nombre Completo" required/> 

                                            <label class="label">Direccion:</label>

                                            <input type="text" class="input" id="floating direccion" placeholder="Direccion (Incluido Barrio)" required/>

                                            <label class="label">Codigo Postal:</label>

                                            <input type="text" class="input" id="floating postal" placeholder="Código Postal" required/>

                                            <label class="label">Telefono:</label>

                                            <input type="text" class="input" id="floating telefono" placeholder="Telefono" required/>

                                            <label class="label">Correo Electronico:</label>

                                            <input type="text" class="input" id="floating correo" placeholder="Correo Electronico" required/>

                                        </form>

                                        <H6 class="mt-4 mb-3">Informacion de Pago: </H6>

                                        <form class="info">

                                            <label class="label">N° Tarjeta de Credito:</label>

                                            <input type="text" class="input" id="floating credito" placeholder="N° Tarjeta de Credito" required/>

                                            <label class="label">Nombre Tarjetahabiente:</label>

                                            <input type="text" class="input" id="floating tarjetahabiente" placeholder="Nombre Tarjetahabiente" required/>

                                            <label class="label">Numero de Cedula:</label>

                                            <input type="text" class="input" id="floating cedula" placeholder="Numero Cedula" required/>

                                            <label class="label">Numero CVV:</label>

                                            <input type="text" class="input" id="floating cvv" placeholder="Numero CVV" required/>

                                        </form>

                                    </div>

                                    <div class="botones modal-footer">

                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>

                                        <button type="submit" class="btn btn-success enviar" name="enviar_actualizacion">Comprar</button>

                                    </div>

                                </div>

                            </div>

                        </div>

                    

                    ';

                    }

                

                ?>



                <!-----------------FIN MODAL CAMBIAR PRECIO--------------->



            </div>

            <footer>

                <small>Copyright © 2023 Better CV © de sus respectivos propietarios</small>

                <p class="m-0">Better CV</p>

            </footer>

        </section>

    </main>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>