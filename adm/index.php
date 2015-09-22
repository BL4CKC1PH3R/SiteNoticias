<?php
session_start();
	if(isset($_SESSION["Logado"]))
	{
		if($_SESSION["Logado"] == "Sim")
		{
			header("Location: ./inicio.html");
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

color: #FFFFFF;
background-image: url("../img/wp.png");
}

label {
text-shadow: 2px 2px 4px #000000;
}

</style>
</head>

<body>
	<div class="container" style="text-align: center">
		<h1 style="text-shadow: 2px 2px 4px #000000;">Painel Administrativo do Site de Notícias</h1>
		
		 <div class="row">
			<div class="col-md-4 col-md-offset-4" style="text-align: center">
			<form method="post">

        <div class="form-group">
            <label>Usuário:</label>
            <input type="text" class="form-control" name="usuario" id="usuario" style="box-shadow: 1px 1px 1px #000000;" /></p>
        </div>
		<div class="form-group">
            <label>Senha:</label>
            <input type="password" class="form-control" name="senha" id="senha" style="box-shadow: 1px 1px 1px #000000;"  /></p>
        </div>
        <center>
            <p><input type="button" class="btn btn-success" value="Login"  onclick="login()" style="box-shadow: 1px 1px 1px #000000; "/></p>
        </center>
    </form>
			<div id="alerta" style="display: none;" class="alert alert-danger">
				<p id="mensagem"><strong>Erro!</strong> Usuário ou Senha incorretos.</p>
			</div>
			<script type="text/javascript">
		
function login() {
var usuario = $('#usuario').val() 
var senha = $('#senha').val()
if(usuario == '' || senha == '') 
{
	$('#alerta').hide("fast");
	$('#alerta').show("fast");
	$('#mensagem').html("<strong>Erro!</strong> Insira um Usuário ou Senha.");
}
else
{
$.post('logar2.php', {usuario: usuario, senha: senha }, function(returnedData) {
    console.log(returnedData);
	if(returnedData == 0)
 {
	window.location.replace("./inicio.html");
 }
 else
 {
	$('#alerta').hide("fast");
	$('#mensagem').html("<strong>Erro!</strong> Usuário ou Senha incorretos.");
	$('#alerta').show("fast");
 }
});
}
}


</script>
		</div>  
	</div>
	</div>
</body>
</html>
