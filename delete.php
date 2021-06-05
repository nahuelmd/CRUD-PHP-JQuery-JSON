<?php
ob_start();
?>

<?php 
include 'partials/header.php';
require __DIR__.'/users/users.php';


if(!isset($_POST['id'])){
    // echo "Not found";
    include "../saleslayer/partials/not_found.php";
    exit;
}

$userId = $_POST['id'];
deleteUser($userId);


header("Location: index.php");


?>


<?php
ob_end_flush();
?>