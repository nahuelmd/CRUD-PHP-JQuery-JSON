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

$errors = [
    'name' => "",
    'mail' => "",
    'company' => "",
    'role' => "",
    'profile_rate' => "",
    'last_access' => "",
];

$isValid = true;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {    

    $user = array_merge($user, $_POST);
    
    $isValid = validateUser($user, $errors);
    

    if($isValid){
    $user = createUser(($_POST));

    
    uploadImage($_FILES['userfile'], $user);

    
    header("Location: index.php");
 
    }
}




?>

<?php include '_form.php'; ?>





<?php
include '../saleslayer/partials/footer.php';
?>
<?php
ob_end_flush();
?>