<?php
	function if_logado()
	{
		
	
	session_start();
	if(isset($_SESSION["Logado"]))
	{
		if($_SESSION["Logado"] == "Sim")
		{	
			?>
			
<?php
		}
	}
}
	function else_logado()
	{
	else 
	{
		echo "Área Restrita.";
	}
	
	}

?>