<?php
    $correo = $_GET['mail'];

    //Importo datos y lo paso a un array
    $datos = file_get_contents("test-data.json");
    $contactos = json_decode($datos, true);
    //echo ($contactos);

    if (is_array($contactos)){
        echo("Es un array");
      }

    ?> <br><br> <?php

    //echo var_dump($contactos);

    foreach($contactos as $contacto=>$datos) {

        //echo "$contacto:<br>";

        while(list($clave,$valor)=each($datos)){
            //echo "$clave=$valor";
            if(in_array($correo,$datos )){
                //echo("AL FIN EL INDICE es: ". $contacto . "<br>");
                $camion = $contacto;
            }
            
        }    
    }
    echo ("Este es el indice :" . $camion . "<br>");

    unset($contactos[$camion]);

    echo(count($contactos));

    $json_string = json_encode($contactos);
    $file = 'clientes.json';
    file_put_contents($file, $json_string);
    





    


    if(in_array($correo,$contactos )){
        echo("SE encontro el correo ". $contacto . "<br>");
        $camion = $contacto;
    }


  
    
    ?> <br><br> <?php


    

    echo($correo);
    





    // header("Location: index.php");


?>