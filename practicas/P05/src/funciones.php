<?php

function multiplo5y7($numero) {
    // AQUÍ VA EL CÓDIGO DE LA FUNCIÓN
    if (!empty($_GET['numero'])) {
        $numero = $_GET['numero'];
        echo multiplo5y7($numero);
    } else {
        echo '(vacío)';
    }
    return 'respuesta: '.$numero;
}



?>