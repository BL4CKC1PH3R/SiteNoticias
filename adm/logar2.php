<?php
	include("conexao.php");
	
	session_start();
	
	extract($_POST);
	
	$Sql = "SELECT * FROM usuario WHERE login='$usuario'";
	
	$result = $conn->query($Sql);
	
	$teste = $result->fetch_assoc();
    

	if($senha == $teste["senha"])
	{
		$_SESSION["Logado"] = "Sim";
		
		$_SESSION["Nome"] = $usuario;
		
     	echo 0;
	}
	else
	{
		
		echo 1;
		
	}
    
    

	
	
	

	
?>