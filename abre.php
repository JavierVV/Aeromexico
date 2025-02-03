<?php
    $conexion = new mysqli("localhost", "root", "", "Aeromexico",3307);
    if($conexion){
        echo "Exitoso!";
    } else{
        echo "Algo salio mal";
    }
?>