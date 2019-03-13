<?php 

require_once('cabecalho.php'); 
require_once('Categoria.php');

$categoria = new Categoria();
$resultados = $categoria->listar();

print_r($resultados);
die();


?>
		
	<table class="table table-dark">
		<tr>
			<th>Id</th>
			<th>Categoria</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Terror</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Terror</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Terror</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Terror</td>
		</tr>

	</table>

<?php require_once('rodape.php') ?>	