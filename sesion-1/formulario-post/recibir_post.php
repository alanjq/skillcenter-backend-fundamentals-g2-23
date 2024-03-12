<?php
    // el @ silencia los warnings
    $nombre = @$_POST['nombre'];
    $apellido = @$_POST['apellido'];

    echo "Valores recibidos. <br />";
    echo "Nombre: $nombre <br/>";
    echo "Apellido: $apellido";
?>
