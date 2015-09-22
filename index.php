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
    
	  
      <?php 
		include('conexao.php');

		$sql = "SELECT * FROM noticia where status = 'Ativo'";
		$result = $conn->query($sql);

		
			// output data of each row
		while($row = $result->fetch_assoc())
		{
			echo "<div class=\"col-sm-4\">";	
			echo "<img class=\"img-responsive\" src=adm/" .$row["imagem"]. " height=\"250\" width=\"350\" >";
			echo $row["corpo"];
			
		
		



    echo "</div>";
  
		
		
		
		}
?>	
</div>
	
</div>
</body>
</html>
