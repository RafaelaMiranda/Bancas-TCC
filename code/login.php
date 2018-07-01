<?php include('conecta.php');

  $login = $_POST['login'];
  $senha = $_POST['senha'];
  $entrar = $_POST['entrar'];
  $connect = mysqli_connect('localhost','root','','banca');

    if (isset($entrar)) {
      
      $verifica = mysqli_query($connect, "SELECT * FROM usuario WHERE nome = '$login' AND senha = '$senha'");
      $linha = mysqli_affected_rows($connect);

      if($linha > 0){
        setcookie("login", $login);
        header("Location:apresentacao-lista.php");
      } 

      else {
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.html';</script>";
        die();
      }
    }
?>