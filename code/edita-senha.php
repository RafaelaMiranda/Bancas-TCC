<?php include("conecta.php");
    session_start();
    $senha_atual = $_POST['senha_atual'];
    $senha_nova = $_POST["senha_nova"];
    $confirme_senha = $_POST["confirme_senha"];
    $verifica =  mysqli_query($conexao,"SELECT senha from usuario WHERE codusuario = '{$_SESSION['codUser']}'");
    $numero =  mysqli_fetch_assoc($verifica);

    $acao = "update";
    date_default_timezone_set('America/Sao_Paulo');
    $creat_at = date("d-m-Y H:i:s");
    $user = $_SESSION['codUser'];
    $tabela = "usuario";
  
  if(md5($senha_atual) == $numero["senha"]){
    if($senha_nova == $confirme_senha){
      function updateSenha($conexao, $senha_atual, $senha_nova, $confirme_senha) {
        $query = "UPDATE usuario SET senha = md5('{$senha_nova}') WHERE codusuario = '{$_SESSION['codUser']}'";
        return mysqli_query($conexao, $query);
      }
  
      if(updateSenha($conexao, $senha_atual, $senha_nova, $confirme_senha)) {
        $log = mysqli_query($conexao, "INSERT INTO logs (acao, creat_at, user, tabela) VALUES ('{$acao}','{$creat_at}','{$user}', '{$tabela}')");
        echo"<script language='javascript' type='text/javascript'>alert('Senha alterada com sucesso');window.location.href='trocaSenha-formulario.php';</script>";
      } 
        
      else { 
        echo"<script language='javascript' type='text/javascript'>alert('Senha não pode ser alterada');window.location.href='trocaSenha-formulario.php';</script>";
        die(); 
      } 
    }
  }

  else if($senha_atual == '') {
    echo"<script language='javascript' type='text/javascript'>alert('Favor preecher o campo com sua senha atual!');window.location.href='trocaSenha-formulario.php';</script>";
  } else if($senha_nova == '') {
    echo"<script language='javascript' type='text/javascript'>alert('Favor inserir sua nova senha!');window.location.href='trocaSenha-formulario.php';</script>";  
  } else if($confirme_senha == '') {
    echo"<script language='javascript' type='text/javascript'>alert('Favor confirmar sua nova senha!');window.location.href='trocaSenha-formulario.php';</script>";  
  }

  else{
    echo"<script language='javascript' type='text/javascript'>alert('Senha diferente');window.location.href='trocaSenha-formulario.php';</script>";
    die();
  }
    
?>