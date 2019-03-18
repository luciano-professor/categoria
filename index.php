<?php 

require_once('cabecalho.php'); 
require_once('Categoria.php');

$categoria = new Categoria();
$resultados = $categoria->listar();


?>

	<div class="float-right">
		<a href="cadastro.php" class="btn btn-primary ">Adicionar Categoria</a>
	</div>
	<table class="table table-dark">
		<tr>
			<th>Id</th>
			<th>Nome da Categoria</th>
		</tr>
		
		<?php
			foreach($resultados as $linha){
		?>

			<tr>
				<td>
					<?=$linha['id']?> 
				</td>
				<td>
					<?=$linha['nome']?> 
				</td>
			</tr>
				

		<?php
			}
		?>

	</table>

<?php require_once('rodape.php') ?>	