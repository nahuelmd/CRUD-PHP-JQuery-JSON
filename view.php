<?php
include '../saleslayer/partials/header.php';

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
// var_dump($user);
// echo '<pre>';
?>


    <div class="card">
        <div class="card-header">
            <h3>View Contact: <b><?php echo $user['name'] ?></b></h3>
        </div>    
        <div class="card-body">
            <a class="btn btn-secondary" href="update.php?id=<?php echo $user['id'] ?>"> Update</a>
            <!-- <a class="btn btn-danger" href="delete.php?id=<?php echo $user['id'] ?>"> Delete</a> -->
            <form style="display: inline-block" action="delete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $user['id']?>">
                <button class="btn btn-danger" >Delete</button>
            </form>
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
    </div>





<?php
include '../saleslayer/partials/footer.php'
?>
