<?php
    // include 'config.php';
    session_start();
    if(empty($_SESSION['uname'])) {
        header("location:http://localhost/php/SCOM/SComputers/admin/");
        die();
    }

    
?>