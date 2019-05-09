<?php
session_start();
session_destroy();
unset($_SESSION['lid']);
header('location:Login/login_autoshop.php');
?>

