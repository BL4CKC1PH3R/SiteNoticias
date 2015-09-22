<?php
	include("conexao.php");
	
	$Login = $_POST["usuario"];
	
	$Senha = $_POST["senha"];
	
	$Sucesso = 0;
	
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
    
    

	
	
	

	
?>