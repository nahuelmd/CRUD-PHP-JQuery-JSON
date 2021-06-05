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
    
    $users = updateUser($_POST, $user);    
    
    if  (isset($_FILES['userfile'])) {
        uploadImage($_FILES['userfile'], $user);        
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