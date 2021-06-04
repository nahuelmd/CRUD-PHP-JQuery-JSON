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

    echo '<pre>';
    var_dump($_FILES);
    echo '</pre>';
    exit;
    if (isset($_FILES['picture'])){
        move_uploaded_file($_FILES['picture']['tmp_name'], __DIR__ . "/images/$userMail.jpg");
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
                        <input class="form-control-file" type="file" name="avatar" >
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