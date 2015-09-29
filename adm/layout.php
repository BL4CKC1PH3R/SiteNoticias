<?php
	function Inicio()
	{
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
	<script src="http://malsup.github.com/jquery.form.js"></script> 
	<style>
		body {
			color: #000000;
			background-image: url("../img/wp.png");
		}
		
		label {
			text-shadow: 2px 2px 5px #eaeaea;
			color: #000000;
		}
		
	</style>
	</head>
	
	<body>
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Erro</h4>
        </div>
        <div class="modal-body">
          <p>Preencha todos os campos!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	<div class="container">
		<h1 style="text-shadow: 2px 2px 4px #00000; color: #FFFFFF">Painel Administrativo do Site de Notícias</h1>
		<nav class="navbar navbar-default" style="box-shadow: 10px 10px 36px -4px rgba(0,0,0,0.28);">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand dropdown-toggle" data-toggle="dropdown" ><?PHP echo $_SESSION["Nome"]; ?></a>
	  <ul class="dropdown-menu">
      <li><a href="#">Submenu 1-1</a></li>
      <li><a href="#">Submenu 1-2</a></li>
      <li><a href="#">Submenu 1-3</a></li> 
    </ul>
    </div>
	<?php
		
	}
	
	function Menu($Titulo)
	{
		
	?>
    
	
  </div>
</nav>  <div class="panel panel-primary" style="box-shadow: 10px 10px 36px -4px rgba(0,0,0,0.28);">
			<div class="panel-heading"><center><strong><?php echo $Titulo;?></strong></center></div>
			<div class="panel-body" style="width: 98%" id="corpo_panel">
			<?php
		
	}
	
	function Fim()
	{
		?>
		
					</div>
			  </div>
			</div>
			</body>
		</html>
			<?php
	}
?>