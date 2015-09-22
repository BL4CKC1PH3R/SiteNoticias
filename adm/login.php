<?php
include("conexao.php");
	
	$Login = $_POST["usuario"];
	
	$Senha = $_POST["senha"];
	
	$Sucesso = 0;
	if(isset($senha,$Login))
	{
	session_start();
	
	$Sql = "SELECT * FROM usuario WHERE login='$Login'";
	
	$result = $conn->query($Sql);
	
	$teste = $result->fetch_assoc();
    

	if($Senha == $teste["senha"])
	{
		$Sucesso = 1;
		
		$_SESSION["Logado"] = "Sim";
		
		$_SESSION["Nome"] = $Login;
		
		echo "Teste";
	}
	else
	{
		$Sucesso = 0;
		echo "Usuário ou senha incorretos!";
		echo "<br>
				<a href='login.html'>Voltar</a>";
	}
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Administrativo</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//cdn.ckeditor.com/4.5.3/standard/ckeditor.js"></script>
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<style>
body {
background-color: #eaea;
}

</style>
</head>

<body>
	<div class="container" style="text-align: center">
		<h1>Painel Administrativo do Site de Notícias</h1>
		
		 <div class="row">
			<div class="col-md-4 col-md-offset-4"" style="text-align: center">
			<form action="login.php" method="post">

        <div class="form-group">
            <label>Usuário:</label>
            <input type="text" class="form-control" name="usuario" /></p>
        </div>
		<div class="form-group">
            <label>Senha:</label>
            <input type="text" class="form-control" name="senha" /></p>
        </div>
        <center>
            <p><input type="submit" class="btn btn-success" value="Cadastrar" /></p>
        </center>
    </form>
		</div>  
	</div>
	</div>
</body>
</html>