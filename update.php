<?php
ob_start();
?>

<?php 
include 'partials/header.php';

require __DIR__.'/users.php';
if(!isset($_GET['mail'])){
    // echo "Not found";
    include "../saleslayer/partials/not_found.php";
    exit;
}

$userMail = $_GET['mail'];
$user = getUserByMail($userMail);

if (!$user){
    // echo "Not found";
    include "../saleslayer/partials/not_found.php";
    exit;
}

// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';
    updateUser($_POST, $userMail);

    // echo '<pre>';
    // var_dump($_FILES);
    // echo '</pre>';
    // exit;

    
    if($_POST) {

        $nombre_archivo = $_FILES['userfile']['name'];
        $tipo_archivo = $_FILES ['userfile'] ['type'];
        $file_size = $_FILES ["userfile"]["size"];
        $carpeta = 'receta/';
        $extension = explode(".", $_FILES['userfile']['name']);
        $extension_nueva = end($extension);


          //defino el nombre nuevo para el archivo
        $nombre_nuevo = $_POST['name']."_".$_POST['company'].'.'.$extension_nueva;

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

          if (($_FILES["userfile"]["size"] > 100000000)) {
              echo "<p>El peso del archivo no puede ser superior a 100kb </p>";
          }

          elseif (! in_array($file_extension, $allowed_image_extension)) {

              echo "<p>La extension del archivo es incorrecta, solo puedes enviar archivos con extension PNG, JPG o JPEG</p>";
          }


          else{
              $target = "receta/" . basename($_FILES["userfile"]["name"]);

              if(move_uploaded_file($_FILES['userfile']['tmp_name'], $carpeta.$nombre_nuevo)) {

                               echo "<p> Imagen cargada correctamente</p>";
                          }  else {
                              echo "<p> No se pudo subir el archivo, ha ocurrido un error</p>";
                           }

          }

    }

    // header("Location: index.php");
    
}


?>
<div class="container">
    <div class="card"> 
        <div class="card-header">
            <h3>Update contact <b><?php echo $user['name']?> </b></h3>

        </div>
        <div class="card-body">
            
                <form method="POST" action="" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label for="">Name</label>
                        <input class="form-control" type="text" name="name" value="<?php echo $user['name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Mail</label>
                        <input class="form-control" type="text" name="mail" value="<?php echo $user['mail'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Company</label>
                        <input class="form-control" type="text" name="company" value="<?php echo $user['company'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Role</label>
                        <input class="form-control" type="text" name="role" value="<?php echo $user['role'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Profile Rate</label>
                        <input class="form-control" type="text" name="profile_rate" value="<?php echo $user['profile_rate'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Last Acces</label>
                        <input class="form-control" type="text" name="last_access" value="<?php echo $user['last_access'] ?>">
                    </div>
                
                    <div class="form-group">
                        <label for="">Avatar</label>

                        <input class="form-control-file" type="file" name="userfile" >
                    </div>

                    <button class="btn btn-success" >Submit</button>                     
                </form>
            </div>    
    </div>        

</div>





<?php
include '../saleslayer/partials/footer.php';
?>

<?php
ob_end_flush();
?>