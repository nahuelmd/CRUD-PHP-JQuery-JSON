<?php
ob_start();

echo "HOLA";

header("Location: index.php");

ob_end_flush();
?>
?>