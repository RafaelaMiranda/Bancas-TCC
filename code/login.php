<?php 
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
  $connect = mysqli_connect('localhost','root','','banca');
    if (isset($entrar)) {
      
      $verifica = mysqli_query($connect, "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'");
      if(mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
        die();
      } 
      
      else {
        setcookie("login",$login);
        header("Location:index.html");
      }
    }
?>