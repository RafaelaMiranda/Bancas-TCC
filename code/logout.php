<?php  
    session_start();
    unset($_SESSION['codUser']);
    setcookie("login", $login, time()-36000);
    header("Location: index.html");
    exit;
?>