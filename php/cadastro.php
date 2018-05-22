<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Aluno</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            background-image: url(https://cdn.pixabay.com/photo/2015/04/10/13/07/course-716190__340.jpg);
            background-attachment: fixed;
            background-size: 100%;
            background-repeat: no-repeat;
            background-color: rgb(144, 190, 139)
        }

        .login-form {
            width: 400px;
            margin: 70px auto;
        }

        .login-form form {
            margin-bottom: 15px;
            background: #F7F7F7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .login-form h2 {
            margin: 0 0 15px;
        }

        .form-control,
        .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .btn {
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="login-form">
        <form action="/examples/actions/confirmation.php" method="post">
            <h2 class="text-center">Fazer Cadastro</h2>
            <div class="form-group">
                <label for="textNome" class="control-label">Nome</label>
                <input id="nome" name="nome" class="form-control" placeholder="Digite seu Nome..." type="text">
            </div>
            <div class="form-group">
                <label for="inputEmail" class="control-label">E-mail</label>
                <input id="email" name="email" class="form-control" placeholder="Digite seu E-mail" type="email">
            </div>

            <div class="form-group">
                <label for="inputPassword" class="control-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua Senha...">
            </div>

            <div class="form-group">
                <label for="inputConfirm" class="control-label">Confirme a Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Confirme sua Senha...">
            </div>
            <br>
            <div class="form-group">
                <button class="boton btn-lg btn btn-success btn-block" type="submit">Cadastrar</button>
            </div>

        </form>
</body>

</html>