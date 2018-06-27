<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JVR - Acadêmico</title>

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
                        <a href="index.php">
                            <i class="fa fa-th-large"></i>
                            <span class="nav-label">Apresentações</span>
                        </a>
                    </li>

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
                        </ul>
                    </li>

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
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <a href="logout.php">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
