<?php 
include('conexao.php');

$sql = "SELECT * FROM noticia";
$result = $conn->query($sql);


echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["data_postagem"]."</td><td>".$row["titulo"]."</td> <td>".$row["corpo_noticia"]."</td></tr>";
    }
    echo "</table>";


?>