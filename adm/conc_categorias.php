<?php
include("conexao.php");
include("layout.php");
session_start();
	if(isset($_SESSION["Logado"]))
	{
		if($_SESSION["Logado"] == "Sim")
		{
	Inicio();
Inicio();
?>
<meta charset="utf-8">
<div>
    <ul class="nav navbar-nav">
        <li><a href="index.html">Início</a></li>
        <li  class="active"><a href="cad_categorias.php">Cadastrar Categorias</a></li>
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
Menu("Cadastro de Categorias");
$nome_categoria = $_POST['nome_categoria'];


$sql = "INSERT INTO Categ (nome_categoria) VALUES ('$nome_categoria')";

if ($conn->query($sql) === TRUE) {
    ?>
    <div class="alert alert-success fade in">
        <a href="./cad_categorias.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <center>
            <strong>Categoria cadastrada com Sucesso!</strong>
        </center>
    </div>
    <?php
}
else {
    ?>
    <div class="alert alert-danger fade in">
        <a href="./cad_categorias.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
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
