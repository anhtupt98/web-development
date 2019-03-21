<?php 
unset($_SESSION["User"]);
unset($_SESSION["role"]);
header("Location:../index.php");
?>
