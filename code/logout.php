<?php  
    session_start();
    unset($_SESSION['codUser']);
    header("Location: index.html");
    exit;
?>