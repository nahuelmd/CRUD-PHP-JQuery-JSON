<?php
ob_start();
?>

<?php 
include 'partials/header.php';
require __DIR__.'/users/users.php';
if(!isset($_GET['id'])){
    // echo "Not found";
    include "../saleslayer/partials/not_found.php";
    exit;
}

$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user){
    // echo "Not found";
    include "../saleslayer/partials/not_found.php";
    exit;
}
// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {    
    $user = updateUser($_POST, $userId);    
    
    uploadImage($_FILES['userfile'], $user);
        
    header("Location: index.php");
}

?>

<?php include '_form.php'; ?>

<?php
include '../saleslayer/partials/footer.php';
?>
<?php
ob_end_flush();
?>