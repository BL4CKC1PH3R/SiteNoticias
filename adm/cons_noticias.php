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
<div id='resposta'></div>
<div class='modal fade' id='modalVisualiza' role='dialog'>
		<div class='modal-dialog modal-sm'>
		<div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
          <h4 class='modal-title'>Erro</h4>
        </div>
        <div class='modal-body' id="texto">
          <p>Preencha todos os campos!</p>
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
        </div>
      </div>
    </div>
  </div>
  
  
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
		<li><a href="cad_usuarios.php">Cadastrar Usuários</a></li> 
		<li><a href="logout.php">Logout</a></li>
		
      </ul>
    </div>
	<?php 
	Menu("Nova Notícia");
	?>
	
	<table class="table table-responsive table-bordered">
    <thead>
      <tr>
        <th style='text-align: center;'>Titulo</th>
        <th style='text-align: center;'>Autor</th>
        <th style='text-align: center;'>Data da Postagem</th>
		<th style='text-align: center;'></th>
      </tr>
    </thead>
	<?php
	noticias()
	?>
	</table>	
	
		
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
						$('#conc_noticia').ajaxForm(function()
						{    
				
							
				
						}).submit(); 
						$('#conc_noticia').hide("slow");
							$('#corpo_panel').hide("slow");
							$('#corpo_panel').show("slow");
							$('#corpo_panel').load("sucesso.php");
					}
					
				});
        });
		
		
	$(".excluir_btn").click(function(){

		var id = $(this).parents("tr").attr("id");
		
		
		$.post("util.php",{id:id, operacao:"excluir",tabela:"noticia"},function(dados){
			$("tr#"+id).remove();
			$("#resposta").html(dados);
		});
	});
	
	$(".visualizar_btn").click(function(){
		var id = $(this).parents("tr").attr("id");
					$.post("util.php",{id:id, operacao:"visualizar",tabela:"noticia"},function(dados){
						$("#resposta").html(dados);
					});
					
					
				});

		  $(".editar_btn").click(function(){

			  var id = $(this).parents("tr").attr("id");
			  $.post("util.php",{id:id, operacao:"editar",tabela:"noticia"},function(dados){
				alert(dados);
			  });


		  });

</script>
		
		
  
  
 <?php
	Fim();
		}
	}
	else 
	{
		header("Location: ./restrito.html");
	}

?>