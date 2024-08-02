<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendedor</title>
    <link rel="stylesheet" href="vendedores.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,900;1,700;1,900&family=Pacifico&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,900;1,700;1,900&display=swap');
    </style>
</head>
    <?php  

	$id=$_GET['id'];  
  
  ?>
<body>
    <nav>
        <div class="logo"><a href="../pag-vendedores/index.php?prod=.&id=<?php echo $id ?>"><img src="../img/logo-cv.png" alt=""></a></div>
        <div><p class="m-0">Pagina Vendedor</p></div>
        <div class="end">
            <button onclick="location.href='../index.php'">Volver</button>
            <button data-bs-toggle="modal" data-bs-target="#modal_estructura_nuevo_producto">New Producto</button>
        </div>
    </nav>

    <main>
        <section class="lateral">
            <h5>Productos</h5>
            <div class="eleccion">
                <img src="../img/iconos/coche.png" alt="coches">
                <a href="../pag-vendedores/index.php?prod=coches&id=<?php echo $id?>">Coches</a>
            </div>
            <div class="eleccion">
                <img src="../img/iconos/telefono-inteligente.png" alt="moviles">
                <a href="../pag-vendedores/index.php?prod=moviles&id=<?php echo $id?>">Moviles</a>
            </div>
            <div class="eleccion">
                <img src="../img/iconos/muebles.png" alt="muebles">
                <a href="../pag-vendedores/index.php?prod=muebles&id=<?php echo $id?>">Muebles</a>
            </div>
            <div class="eleccion">
                <img src="../img/iconos/bicicleta.png" alt="bicicletas">
                <a href="../pag-vendedores/index.php?prod=bicicletas&id=<?php echo $id?>">Bicicletas</a>
            </div>
            <div class="eleccion">
                <img src="../img/iconos/televisor.png" alt="televisores">
                <a href="../pag-vendedores/index.php?prod=televisores&id=<?php echo $id?>">Televisores</a>
            </div>
            <div class="eleccion">
                <img src="../img/iconos/cocina.png" alt="cocina">
                <a href="../pag-vendedores/index.php?prod=cocina&id=<?php echo $id?>">Cocina</a>
            </div>
            <div class="eleccion">
                <img src="../img/iconos/reloj.png" alt="reloj">
                <a href="../pag-vendedores/index.php?prod=reloj&id=<?php echo $id?>">Relojes</a>
            </div>
            <div class="eleccion">
                <img src="../img/iconos/otros.png" alt="otros">
                <a href="../pag-vendedores/index.php?prod=otros&id=<?php echo $id?>">Otros</a>
            </div>
        </section>
        <section class="pantalla">
            <h3 class="title">Tus Productos</h3>
            <div class="productos">

                <?php

                    $id=$_GET['id'];
					$prod=$_GET['prod'];
                    include ("../conectar.php");

                    $sql_buscar="SELECT * FROM productos WHERE id_vendedor=$id AND tipo_prod like '%$prod%'";
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

                    $id=$_GET['id'];
					$prod=$_GET['prod'];
                    include ("../conectar.php");

                    $sql_buscar="SELECT * FROM productos WHERE id_vendedor=$id AND tipo_prod like '%$prod%'";
                    $busqueda=mysqli_query($mysql, $sql_buscar);

                    while ($producto=mysqli_fetch_array($busqueda)){
                    
                    echo '
                    
                        <div class="modal"  data-bs-backdrop="static"  id="modal_estructura'.$producto['id_prod'].'" >
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"> 
                                <div class="modal-content"> 
                                    <H4 class="modal-header">
                                    	<p>Editar Producto</p>                                
                                        <a type="button" class="btn btn-close" data-bs-dismiss="modal"></a>
									</H4>
                                    <form class="modal-body" action="actualizar-producto.php?prod='.$prod.'&id='.$id.'&idprod='.$producto['id_prod'].'" method="post">
                                        <div class="imagen-prod">
                                            <div class="caja">
                                                <div class="img"><img src="../img/'.$producto['foto_prod'].'" alt="foto"></div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <label for="nombre_prod">Nombre Producto:</label>
                                            <input class="input" type="text" placeholder="Nombre del Producto" value="'.$producto['nombre_prod'].'" id="nombre_prod" name="nombre_prod">

                                            <label for="tipo_prod">Tipo Producto:</label>
                                            <select name="tipo_prod" id="tipo_prod">
                                                <option value="'.$producto['tipo_prod'].'" selected>'.$producto['tipo_prod'].'</option>

                                                <option value="coches.">Coches</option>
                                                <option value="moviles.">Moviles</option>
                                                <option value="muebles.">Muebles</option>
                                                <option value="bicicletas.">Bicicletas</option>
                                                <option value="televisores.">Televisores</option>
                                                <option value="cocina.">Cocina</option>
                                                <option value="relojes.">Relojes</option>
                                                <option value="otros.">Otros</option>
                                            </select>
                                            <label for="precio_prod">Precio Producto:</label>
                                            <input class="input" type="text" placeholder="Precio del Producto" value="'.$producto['precio_prod'].'" name="precio_prod" id="precio_prod">
                                            <label for="descuento">Descuento %:</label>
                                            <input class="input" type="text" placeholder="Descuento %" value="'.$producto['descuento'].'" name="descuento" id="descuento">
                                            <div class="botones">
                                                <a type="button" class="btn btn-danger" href="borrar-producto.php?id='.$id.'&idprod='.$producto['id_prod'].'&opcion=0">Borrar</a>
                                                <input type="submit" class="btn btn-success enviar" name="enviar_actualizacion" value="Actualizar">
                                            </div>
                                        </div>
                                    </form>
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

        <!--INICIO MODAL NUEVO PRODUCTO-->

        <div class="modal"  data-bs-backdrop="static"  id="modal_estructura_nuevo_producto" >
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"> 
                <div class="modal-content"> 
                    <H4 class="modal-header"><p>Nuevo Producto</p></H4>
                    <?php

                    $id=$_GET['id'];

                    echo '
                    <form class="modal-body pt-2" action="agregar-producto.php?id='.$id.'" method="post" enctype="multipart/form-data">';?>
                        <div class="info p-0">
                            <label for="nombre_prod">Nombre Producto:</label>
                            <input class="input" type="text" placeholder="Nombre del Producto" id="nombre_prod" name="nombre_prod" required>
                            <label for="tipo_prod">Tipo Producto:</label>
                            <select name="tipo_prod" id="tipo_prod" required>
                                <option value="coches.">Coches</option>
                                <option value="moviles.">Moviles</option>
                                <option value="muebles.">Muebles</option>
                                <option value="bicicletas.">Bicicletas</option>
                                <option value="televisores.">Televisores</option>
                                <option value="cocina.">Cocina</option>
                                <option value="relojes.">Relojes</option>
                                <option value="otros.">Otros</option>
                            </select>
                            <label for="precio_prod">Precio Producto:</label>
                            <input class="input" type="text" placeholder="Precio del Producto" name="precio_prod" id="precio_prod" required>
                            <label for="descuento">Descuento %:</label>
                            <input class="input" type="text" placeholder="Descuento %" name="descuento" id="descuento" required>
                            <label for="foto">Foto Producto <a href="https://www.remove.bg/es" target="_blank">(recomendado quitar fondo)</a>:</label>
                            <input class="input" type="file" name="foto" id="foto" required>
                            <div class="botones">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                <input type="submit" class="btn btn-success enviar" value="Publicar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
        <!--FIN MODAL NUEVO PRODUCTO-->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>