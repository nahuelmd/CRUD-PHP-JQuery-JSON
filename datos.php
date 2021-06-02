<?php

    $datos = file_get_contents("test-data.json");
    $contactos = json_decode($datos, true);
    echo ($contactos);

  
    
    // include 'datos.php';
    foreach ($contactos as $valor ) {
        $contenido = $valor['name'] . $valor['mail'];
        echo ($contenido);
    }



?>