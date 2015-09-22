<?php 
include("layout.php");
?>
<script>
$(document).ready(function(){
	$('a#voltar').click(function(){
		parent.history.back();
		return false;
	});
});
</script>
<div class="alert alert-success fade in">
		<a id='voltar' class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<center>
			<strong>Ação efetuada com Sucesso!</strong>
		</center>
	</div>
