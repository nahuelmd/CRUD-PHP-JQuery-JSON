<?php
include '../saleslayer/partials/header.php';

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
// var_dump($user);
// echo '<pre>';
?>

    <div class="card">
        <div class="card-header">
            <h3>View Contact: <b><?php echo $user['name'] ?></b></h3>
        </div>    
        <table class="table">
            
        </table>
    </div>


<table class="table">
    <tbody>
        <tr>
            <th>Name</th>
            <td><?php echo $user['name'] ?></td>
        </tr>
        <tr>
            <th>Mail</th>
            <td>
                <a href="mailto:<?php echo $user['mail']?>">
                                <?php echo $user['mail']?>
                </a>
            </td>
        </tr>
        <tr>
            <th>Company</th>
            <td><?php echo $user['company'] ?></td>
        </tr>
        <tr>
            <th>Role</th>
            <td><?php echo $user['role'] ?></td>
        </tr>
        <tr>
            <th>Porcentaje</th>
            <td><?php echo $user['profile_rate'] ?></td>
        </tr>
        <tr>
            <th>Tiempo desde el ultimo acceso</th>
            <td><?php echo $user['last_access'] ?></td>
        </tr>
     </tbody>
</table>


<?php
include '../saleslayer/partials/footer.php'
?>
