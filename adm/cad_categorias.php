<?php
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
Menu("Cadastro de Catagorias");
?>
    <form action="conc_categorias.php" method="post">

        <div class="form-group">
            <label>Nome da Categoria:</label>
            <input type="text" class="form-control" name="nome_categoria" /></p>
        </div>
        <center>
            <p><input type="submit" class="btn btn-success" value="Cadastrar" /></p>
        </center>
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