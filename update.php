<?php
ob_start();
?>

<?php 
include 'partials/header.php';
require __DIR__.'/users/users.php';
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
    // updateUser($_POST, $userMail);
    $users = updateUser($_POST, $userMail);
    
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

    
    header("Location: index.php");
}
?>
<div class="container">
    <div class="card"> 
        <div class="card-header">
            <h3>Update contact <b><?php echo $user['name']?> </b></h3>
        </div>
        <div class="card-body">  
            
                <?php include '_form.php'; ?>


            </div>    
    </div>        
</div>

<?php
include '../saleslayer/partials/footer.php';
?>
<?php
ob_end_flush();
?>