<?php
    function mitarjeta ($estado, $titulo, $contenido) {
    $claseTarjeta = "dark" ;
    if ($estado == "Terminado") {
        $claseTarjeta = "warning";
    } elseif ($estado == "Pendiente") {
        $claseTarjeta = "info";
    } elseif ($estado == "Iniciado") {
        $claseTarjeta = "success";
    } elseif ($estado == "Urgente") {
        $claseTarjeta = "danger";
    } else {
        $claseTarjeta = "dark";
    }

    echo '    <div class="card text-white bg-'.$claseTarjeta.'" >' ;
    echo '        <div class="card-header">'.$estado.'</div>' ;
    echo '        <div class="card-body">' ;
    echo '            <h5 class="card-title">'.$titulo.'</h5>' ;
    echo '            <p class="card-text">'.$contenido.'</p>' ;
    echo '        </div>' ;
    echo '     </div>         ' ;


    }





?>