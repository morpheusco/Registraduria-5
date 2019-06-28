<?php
    function mitarjeta ($estado, $titulo, $contenido) {

    echo '    <div class="card text-white bg-'.$estado.'" >' ;
    echo '        <div class="card-header">'.$estado.'</div>' ;
    echo '        <div class="card-body">' ;
    echo '            <h5 class="card-title">'.$titulo.'</h5>' ;
    echo '            <p class="card-text">'.$contenido.'</p>' ;
    echo '        </div>' ;
    echo '     </div>         ' ;


    }





?>