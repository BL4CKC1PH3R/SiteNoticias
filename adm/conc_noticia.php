<?php
include("conexao.php");
include("layout.php");
session_start();
	if(isset($_SESSION["Logado"]))
	{
		if($_SESSION["Logado"] == "Sim")
		{
	Inicio();
?>
<div>
		<ul class="nav navbar-nav">
        <li><a href="index.html">Início</a></li>
        <li><a href="cad_categorias.php">Cadastrar Categorias</a></li> 
        <li class="active"><a href="cad_noticias.php">Cadastrar Notícias</a></li> 
		<li><a href="cad_usuarios.php">Cadastrar Usuários</a></li>
		<li><a href="logout.php">Logout</a></li>
		
      </ul>
    </div>
<?php 
Menu("Cadastro de Noticia");
$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$corpo = $_POST['corpo'];

echo "[$corpo]";
$caminho = "noticias_img/";
$login = $_SESSION["Nome"];

//Upload de arquivos
// verifica se foi enviado um arquivo
if(isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0)
{
   
    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
    $nome = $_FILES['arquivo']['name'];
     
    // Pega a extensao
    $extensao = strrchr($nome, '.');
 
    // Converte a extensao para mimusculo
    $extensao = strtolower($extensao);
 
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfilero as extesões permitidas e separo por ';'
    // Isso server apenas para eu poder pesquisar dentro desta String
    if(strstr('.jpg;.jpeg;.gif;.png', $extensao))
    {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        $novoNome = md5(microtime()) . $extensao;
         
        // Concatena a pasta com o nome
        $destino = 'noticias_img/' . $novoNome;
         
        // tenta mover o arquivo para o destino
        if( @move_uploaded_file($arquivo_tmp, $destino))
        {
           
        }
       
    }
    
}

$SelectUser = "SELECT ID_USUARIO FROM USUARIO WHERE LOGIN = '$login'";
$result = $conn->query($SelectUser);
$row = mysqli_fetch_row($result);
$autor = $row[0];
$sql = "INSERT INTO Noticia (titulo, corpo, categoria,autor,data_postagem,status,imagem) VALUES ('$titulo', '$corpo', '$categoria','$autor',NOW(),'Ativo','$destino')";


if ($conn->query($sql) === TRUE) {
   ?>
	<div class="alert alert-success fade in">
		<a href="./cad_noticias.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<center>
			<strong>Noticia cadastrada com Sucesso!</strong>
		</center>
	</div>
	<?php
} 
else {
	?>
    <div class="alert alert-danger fade in">
		<a href="./cad_noticias.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<center>
			<strong>Erro no Cadastro!</strong> 
		</center>
	</div>
	<?php
}


?>

<?php

Fim();
	}
	}
	else 
	{
		header("Location: ./restrito.html");
	}
?>
