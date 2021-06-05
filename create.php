<?php
ob_start();
?>

<?php 
include 'partials/header.php';
require __DIR__.'/users/users.php';


createUser(($_POST));



 

?>





<?php
include '../saleslayer/partials/footer.php';
?>
<?php
ob_end_flush();
?>