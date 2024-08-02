<?php

    include ('conectar.php');

    $sql_listar="select * from productos where tipo_prod='cocina.'";
    $ejecutar_sql_listar=mysqli_query($mysql,$sql_listar);
    $cant=1;

    echo '

    <div>
        <h3 class="title">¡Lo mejor para tu cocina!</h3>
        <div>';
            while($clase=mysqli_fetch_array($ejecutar_sql_listar)){
                if ($cant<=5){
                    echo '<div class="caja"><div class="img"><img src="img/'.$clase['foto_prod'].'" alt="foto"></div>
                    <p class="">'.$clase['nombre_prod'].'</p></div>';
                    $cant++;
                }
            }
        echo '</div>
    </div>
    <div>
        <h3 class="title">Descuentos:</h3>
        <div>';
            $sql_listar="select * from productos where descuento>0";
            $ejecutar_sql_listar=mysqli_query($mysql,$sql_listar);
            $cant=1;
            while($clase=mysqli_fetch_array($ejecutar_sql_listar)){
                if ($cant<=5){
                    echo '<div class="caja"><div class="img"><img src="img/'.$clase['foto_prod'].'" alt="foto"></div>
                    <p class="">'.$clase['nombre_prod'].'</p></div>';
                    $cant++;
                }
            }
        echo '</div>
    </div>
    <div>
        <h3 class="title">Lo que necesitas para tu jardín:</h3>
        <div>';
            $sql_listar="select * from productos where nombre_prod like '%jardin%'";
            $ejecutar_sql_listar=mysqli_query($mysql,$sql_listar);
            $cant=1;
            while($clase=mysqli_fetch_array($ejecutar_sql_listar)){
                if ($cant<=5){
                    echo '<div class="caja"><div class="img"><img src="img/'.$clase['foto_prod'].'" alt="foto"></div>
                    <p class="">'.$clase['nombre_prod'].'</p></div>';
                    $cant++;
                }
            }
        echo '</div>
    </div>';
    
    
    mysqli_close($mysql);
?>