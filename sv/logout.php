<?php
require 'connection.php';
    session_destroy();
unset($_SESSION['id']);  
header('location: ../loginpage.php');
?>