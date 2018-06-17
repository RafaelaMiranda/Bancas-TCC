<?php  
    session_start();
    session_destroy();  
    header("Location: login.html");//use for the redirection to some page  
?>  