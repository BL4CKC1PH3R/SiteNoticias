<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php 
		include('conexao.php');

		$sql = "SELECT * FROM noticia";
		$result = $conn->query($sql);

		
			// output data of each row
		while($row = $result->fetch_assoc())
		{
			echo $row["data_postagem"];
		}
		echo "</table>";


?>
</body>
</html>
