<?php
include "partials/header.php"
?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...


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




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<h1>Hola</h1>
<?php
include "partials/footer.php"
?>