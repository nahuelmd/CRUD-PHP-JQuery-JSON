<?php
ob_start();
?>

<?php 
include 'partials/header.php';
require __DIR__.'/users/users.php';


$user = [
    'id' => '',
    'name' => '',
    'mail' => '',
    'compañy' => '',
    'role' => '',
    'profile_rate' => '',
    'last_access' => '',

];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {    


    $user = createUser(($_POST));

    
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