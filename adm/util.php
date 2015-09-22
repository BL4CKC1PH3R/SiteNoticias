<?php
if(isset($_POST['operacao']))
{
	$operacao = $_POST['operacao'];
	if($operacao == "excluir")
	{
		excluir();
	}
	
	else if($operacao == "visualizar") 
	{
		visualizar();
	}
 }

function excluir() {
	include("conexao.php");
	$id = $_POST['id'];
	$tabela = $_POST['tabela'];
	
	$SQL = "DELETE FROM $tabela WHERE ID_NOTICIA = $id";
	$conn->query($SQL);
	
	if($conn){
		echo "Foi";
	}
} 

function visualizar() {
	include("conexao.php");
	$id = $_POST['id'];
	$tabela = $_POST['tabela'];
	
	$SQL = "SELECT * FROM $tabela WHERE ID_NOTICIA = $id";
	$resultado = $conn->query($SQL);
	
	if($resultado){
		while($linha=mysqli_fetch_object($resultado))
	{
		echo "<script>
		$('#modalVisualiza').modal('show');
		$('.modal-body').html('<p>$linha->corpo</p>');
		$('.modal-title').html('<p>$linha->titulo</p>');
		</script>";
	}
	}
} 

function categorias()
{

 
	include("conexao.php");
	
	$Sql = "SELECT * FROM CATEG ORDER BY nome_categoria and Status='Ativo'";
	
	$resultado = $conn->query($Sql);
	
	while($linha=mysqli_fetch_object($resultado))
	{
		echo "<option value='$linha->id_categoria'>$linha->nome_categoria";
		echo "</option>";
		
		
	}
}

function noticias() 

{
	
	include("conexao.php");
	
	$Sql = "SELECT * FROM NOTICIA ORDER BY data_postagem and Status='Ativo'";
	
	$resultado = $conn->query($Sql);
	
	while($linha=mysqli_fetch_object($resultado))
	{
		
		
		
	echo "<tr id='$linha->id_noticia'>";
		echo "<td class='id' style='text-align: center;display:none;'></td>";
        echo "<td style='text-align: center;'>$linha->titulo</td>";
        echo "<td style='text-align: center;'>$linha->autor</td>";
        echo "<td style='text-align: center;'>$linha->data_postagem</td>";
		echo "<td style='text-align: center;'><button type='button' class='btn btn-warning btn-sm visualizar_btn'>
          <span class='glyphicon glyphicon-th-list'></span>
        </button>&nbsp;";
		echo "<button type='button' class='btn btn-danger btn-sm excluir_btn'>
          <span class='glyphicon glyphicon-trash'></span>
        </button>&nbsp;";
		echo "<button type='button' class='btn btn-success btn-sm'>
          <span class='glyphicon glyphicon-pencil'></span>
        </button></td>";
    echo "</tr>";
		
		
	}
	
	
}


	
?>
