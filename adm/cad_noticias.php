<?php
	include("layout.php");
	include("conexao.php");
	include("util.php");
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
					
					if( $('#titulo').val() == '' || $('#categoria').val() == '' || $('#corpo').val() == '' || $('#arquivo').val() == '') 
					{
						
						$("#myModal").modal('show');
					}
					else 
					{
						$('#conc_noticia').ajaxForm(function(dado)
						{    
							console.log(dado);
						}).submit(); 
						
						$('#conc_noticia').hide("slow");
							$('#corpo_panel').hide("slow");
							$('#corpo_panel').show("slow");
							$('#corpo_panel').load("sucesso.php");
					}
					
				});
				
				tinymce.init({
            selector: "#corpo"
        });
        });
</script>
	<div>
		<ul class="nav navbar-nav">
        <li><a href="index.html">Início</a></li>
        <li><a href="cad_categorias.php">Cadastrar Categorias</a></li> 
        <li class="dropdown active">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Noticias<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="cad_noticias.php">Cadastrar</a></li>
        <li><a href="cons_noticias.php">Consultar</a></li>
                             
      </ul>
    </li>
		<li><a href="cad_usuarios.php">Cadastrar Usuários</a></li> 
		<li><a href="logout.php">Logout</a></li>
		
      </ul>
    </div>
	<?php 
	Menu("Nova Notícia");
	?>
	<form action="conc_noticia.php" method="post" enctype="multipart/form-data" id="conc_noticia"> 
	
		<div class="form-group">
			<label>Titulo da Notícia:</label>
			<input type="text" class="form-control" id="titulo" name="titulo"/></p>
		</div>
	
		<div class="form-group">
			<label>Categoria da Noticia:</label>
			<select class="form-control" name="categoria" id="categoria">
			<?php 
			categorias();
			?>
		</select>
		</div>
	
		<div class="form-group">
			<label>Foto da Notícia (350x250px) :</label>
			<input type="file" class="alert alert-info" value="Enviar" name="arquivo" id="arquivo"/></p>
		</div>	
		
		<div class="form-group">
		<label>Corpo da Notícia:</label>
			<br>
			<textarea name="corpo" id="corpo" rows="10" cols="80" >
                          
            </textarea>
			
            
		</div>
		<div class="form-group">
		<center>
			<input type="button" class="btn btn-success" id='bt' value='Enviar'/>
			
		</center>
		</div>
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