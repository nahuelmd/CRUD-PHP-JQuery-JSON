

        <!-- Muestra cantidad de checkbox marcados -->
        <script>        
            $('input[type=checkbox]').change(function(){
                var number = $('input[type=checkbox]:checked').length;
                $('.totalchecked').html(number + ' selected'  );            
            });
        </script>



        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
        <!-- <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet"> -->
        
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
                integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
        <link href="cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" >
                
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" >
        <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet" >

        <link href="/assets/css/styles.css" rel="stylesheet" >



<?php
    if  (isset($_FILES['userfile'])) {

        if(!is_dir('../saleslayer/users/images/')){
            mkdir('../saleslayer/users/images/');
        }
        $nombre_archivo = $_FILES['userfile']['name'];
        $tipo_archivo = $_FILES ['userfile'] ['type'];
        $file_size = $_FILES ["userfile"]["size"];
        $carpeta = 'users/images/';
        $extension = explode(".", $_FILES['userfile']['name']);
        $extension_nueva = end($extension);
        //defino el nombre nuevo para el archivo
        // $nombre_nuevo = $_POST['name']."_".$_POST['company'].'.'.$extension_nueva;
        $nombre_nuevo = $_POST['mail'].'.'.$extension_nueva;
        
        //Obtengo la extension del archivo
        $file_extension = pathinfo($_FILES["userfile"]["name"], PATHINFO_EXTENSION);
        //defino las extensiones de archivo permitidas
        $allowed_image_extension = array(
          "png",
          "jpg",
          "jpeg"
        );    
        //obtengo el peso del archivo
        $fileinfo = @getimagesize($_FILES["file-input"]["tmp_name"]);

        //FILTRO tamaño de archivo
          if (($_FILES["userfile"]["size"] > 100000000)) {
              echo "<p>El peso del archivo no puede ser superior a 100kb </p>";
          }
          //Filtro extension o admitida
          elseif (!in_array($file_extension, $allowed_image_extension)) {
              echo "<p>La extension del archivo es incorrecta, solo puedes enviar archivos con extension PNG, JPG o JPEG</p>";
          }
          //SI fue todo ok paso a guardar la imagen
          else{
              $target = "users/images/" . basename($_FILES["userfile"]["name"]);

              if(move_uploaded_file($_FILES['userfile']['tmp_name'], $carpeta.$nombre_nuevo)) {

                    // echo ($extension_nueva );
                    $user['extension'] = $extension_nueva;

                    updateUser($user, $userMail);
                                
                    echo "<p> Imagen cargada correctamente</p>";
                } else 
                    {
                    echo "<p> No se pudo subir el archivo, ha ocurrido un error</p>";
                    }
          }


    }




             // var_dump($file)."<br>";
             $dir="/images";
             if (!is_dir(__DIR__.$dir)){
                 mkdir(__DIR__.$dir);
                 echo('Se Creo el directorio');
             } else {
                 //echo('El directorio ya existe');
             }
             $filename = $file['name'];
             // echo($filename.'ALGO que escribir');
    
             $dotPosition = strpos($filename,'.');
             $extension = substr($filename, $dotPosition + 1);
            
    
             move_uploaded_file($file['tmp_name'], __DIR__. "/images/${user['mail']}.$extension");
    
             $user['extension']= $extension;
             updateUser($user, $user['mail']);
?>