<?php
include '../saleslayer/partials/header.php';
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

?>

<form method="$_POST" action="" enctype="multipart/form-data" >
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" value="<?php echo $user['name'] ?>">
    </div>
    <div class="form-group">
        <label for="">Mail</label>
        <input type="text" name="name" value="<?php echo $user['mail'] ?>">
    </div>
    <div class="form-group">
        <label for="">Company</label>
        <input type="text" name="name" value="<?php echo $user['company'] ?>">
    </div>
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" value="<?php echo $user['role'] ?>">
    </div>
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" value="<?php echo $user['profle_rate'] ?>">
    </div>
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" value="<?php echo $user['last_access'] ?>">
    </div>

</form>

