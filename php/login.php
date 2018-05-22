
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
body{
			background-image:url(https://cdn.pixabay.com/photo/2015/04/10/13/07/course-716190__340.jpg);
			background-attachment:fixed;
			background-size:100%;
			background-repeat:no-repeat;
			background-color:rgb(144, 190, 139)
		}
	.login-form {
		width: 400px;
    	margin: 150px auto;
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
    .form-control, .btn {
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
        <h2 class="text-center">Fazer Login</h2>       
        <div class="form-group">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block">Entrar</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox">Lembre-se</label>
            <a href="#" class="pull-right">Esqueceu a senha?</a>
        </div>        
    </form>
    <p class="text-center"><a href="#">Crie sua conta aqui</a></p>
</div>

</body>
</html>  