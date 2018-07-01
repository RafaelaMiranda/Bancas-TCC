<?php  
    setcookie("login", $login, time()-36000);
    header("Location: index.html");
?>