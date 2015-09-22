<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
  <h1><center>Hello World!</center></h1>
  <p></p> 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Notícias</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Pagina 1</a></li>
        <li><a href="#">Pagina 2</a></li> 
        <li><a href="#">Pagina 3</a></li> 
      </ul>
    </div>
  </div>
</nav>  
  <div class="row">
    <div class="col-sm-4">
	  
      <?php 
		include('conexao.php');

		$sql = "SELECT * FROM noticia where status = 'Ativo'";
		$result = $conn->query($sql);

		
			// output data of each row
		while($row = $result->fetch_assoc())
		{
			echo "<img class=\"img-responsive\" src=adm/".$row["imagem"].">";
			echo $row["data_postagem"];
			
		
		



    echo "</div>";
    echo "<div class=\"col-sm-4\">";
	   
		
			echo "<img class=\"img-responsive\" src=adm/".$row["imagem"].">";
			echo $row["data_postagem"];
			
		
		
		
		}
?>	
</div>
	<div class="col-sm-4">
	  <img class="img-responsive" src="img/foto.jpg"> 	
	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	</div>
  </div>
  
  <div class="row">
    <div class="col-sm-4">
	  <img class="img-responsive" src="img/foto.jpg">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="col-sm-4">
	   <img class="img-responsive" src="img/foto.jpg">
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
	<div class="col-sm-4">
	  <img class="img-responsive" src="img/foto.jpg"> 	
	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	</div>
  </div>
</div>
</body>
</html>
