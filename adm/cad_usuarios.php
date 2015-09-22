<?php
	include("layout.php");
	session_start();
	if(isset($_SESSION["Logado"]))
	{
		if($_SESSION["Logado"] == "Sim")
		{
	Inicio();
	
	?>
	<script type="text/javascript">
		  // wait for the DOM to be loaded 
			$(document).ready(function(){
				
				$("#bt").click(function(){
					if( $('#nome').val() == '' || $('#user').val() == '' || $('#pwd').val() == '') 
					{
						
						$("#myModal").modal('show');
					}
					else 
					{
						$('#conc_usuarios').ajaxForm(function()
						{    
				
							
				
						}).submit(); 
						$('#conc_usuarios').hide("slow");
							$('#corpo_panel').hide("slow");
							$('#corpo_panel').show("slow");
							header("Location: ./sucesso.php");
					}
				});
				
			});
				
</script>
	<div>
		<ul class="nav navbar-nav">
        <li><a href="index.html">Início</a></li>
        <li><a href="cad_categorias.php">Cadastrar Categorias</a></li> 
        <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Noticias<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="cad_noticias.php">Cadastrar</a></li>
        <li><a href="cons_noticias.php">Consultar</a></li>
                             
      </ul>
    </li>
		<li class="active"><a href="cad_usuarios.php">Cadastrar Usuários</a></li> 
		<li><a href="logout.php">Logout</a></li>
		
      </ul>
    </div>
	<?php 
	Menu("Cadastro de Usuários");
	?>
	
<form action="conc_usuarios.php" method="post" id="conc_usuarios">

	<div class="form-group">
		<label>Nome:</label>
		<input type="text" class="form-control" name="nome" id="nome" /></p>
	</div>
	
	<div class="form-group">
		<label>Usuario:</label>
		<input type="text" class="form-control" name="user" id="user" /></p>
	</div>
	
	<div class="form-group">
		<label>Senha:</label>
		<input type="password" class="form-control" name="pwd" id="pwd" /></p>
	</div>
	
	<div class="form-group">
		<label>Cargo</label>
		<select class="form-control" name="cargo">
			<option>Jornalista</option>
			<option>Editor</option>
			<option>Fotógrafo</option>
			<option>Administrador</option>
		</select>
	</div>
	<center>  <p><input type="button" class="btn btn-success" id="bt" value="Cadastrar" /></p> </center>
  
		
</form>

  <?php
  Fim();
		}
	}
	else 
	{
		header("Location: ./restrito.html");
	}
	

?>