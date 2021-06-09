<?php
ob_start();
?>

<?php 
include 'partials/header.php';
require __DIR__.'/users/users.php';


if(!isset($_POST['checkbox'])){
    // echo "Not found";
    include "../saleslayer/partials/not_found.php";
    exit;
}

$datos= $_POST['checkbox'];

foreach($datos as $id){
    echo  $id . "<br>";
    deleteMultiUser($id);
}

header("Location: index.php");

?>



<?php
ob_end_flush();
?>
