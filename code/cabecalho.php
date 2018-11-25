<?php include("conecta.php");
    session_start(); 
    $id = $_SESSION['codUser'];
    $verifica = mysqli_query($conexao, "SELECT * FROM usuario WHERE codUsuario = '$id'");
    $numero = mysqli_fetch_assoc($verifica);
    $nivel = $numero["nivel"];
    $nome = $numero["nome"];
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JVR - Acadêmico</title>
    
    <link href="assets/academic-icon-13.jpg" rel="icon">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Data Tables -->
    <link href="assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="assets/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="assets/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <img src="http://www.fatec.edu.br/wp-content/themes/fatec/img/logo-colorido.png" height="80" />
                    </li>
                    <li>
                        <a href="apresentacao-lista.php">
                            <i class="fa fa-th-large"></i>
                            <span class="nav-label">Apresentações</span>
                        </a>
                    </li>
                    <?php
                        if($nivel == 1 || $nivel == 2) {
                    ?>
                    <li>
                        <a href="#">
                            <i class="fa fa-edit"></i>
                            <span class="nav-label">Cadastro</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="professor-formulario.php">Professor</a>
                            </li>
                            <li>
                                <a href="aluno-formulario.php">Aluno</a>
                            </li>
                            <li>
                                <a href="telefone-formulario.php">Telefone</a>
                            </li>
                            <li>
                                <a href="grupo-formulario.php">Grupo</a>
                            </li>
                            <li>
                                <a href="apresentacao-formulario.php">Trabalho</a>
                            </li>
                            <?php
                                if($nivel == 1) {
                            ?>
                            <li>
                                <a href="usuario-formulario.php">Usuario</a>
                            </li>
                            <?php
                                }
                            ?>
                        </ul>
                        
                    </li>
                    <?php
                        }
                    ?>
                    <li>
                        <a href="#">
                            <i class="fa fa-table"></i>
                            <span class="nav-label">Listagem</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="professor-lista.php">Professor</a>
                            </li>
                            <li>
                                <a href="aluno-lista.php">Aluno</a>
                            </li>
                            <li>
                                <a href="telefone-lista.php">Telefone</a>
                            </li>
                            <li>
                                <a href="grupo-lista.php">Grupo</a>
                            </li>
                            <?php
                                if($nivel == 1 || $nivel == 2) {
                            ?>
                            <li>
                                <a href="usuario-lista.php">Usuario</a>
                            </li>
                            <?php
                                }
                            ?>
                        </ul>
                    </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-cog"></i>
                            <span class="nav-label">Configuração</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="trocaSenha-formulario.php">Senha</a>
                            </li>
                            <?php
                                if($nivel == 1) {
                            ?>
                            <li>
                                <a href="log-lista.php">Auditoria</a>
                            </li>
                            <?php
                                }
                            ?>
                        </ul>
                        
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <ul class="nav navbar-top-links navbar-right">
                        <i>Olá <b><?php echo($nome); ?></b></i>
                        <li>
                            <a href="logout.php">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
