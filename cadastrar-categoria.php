<?php

require_once('Categoria.php');

$categoria = new Categoria();
$categoria->nome = $_POST['nome'];
$categoria->salvar();

header('Location:index.php');

?>