<?php 
    session_destroy();
    unset($_SESSION['mt_user_name']);
    header('location:index.php');

?>