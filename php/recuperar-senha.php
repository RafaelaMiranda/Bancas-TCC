<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recuperar Senha</title>
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
            margin: 200px auto;
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
        <form role="form" method="post" action="recupera_senha.php">
            <fieldset>
                <input id="textinput" name="textinput" placeholder="email@email.com" class="form-control input-md" required="" type="text">
                <span class="help-block">Insira o email cadastrado no sistema</span>

                <button id="recupera" name="recupera" class="btn btn-success">Recuperar</button>
                <button id="cancela" name="cancela" class="btn btn-danger">Cancelar</button>
            </fieldset>
        </form>

    </div>

</body>

</html>