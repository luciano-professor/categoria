<?php

require_once ('Conexao.php');
/**
 * 
 */
class Categoria
{
	
	private $id;
	private $nome;

	public function listar()
	{
		$sql = "SELECT * FROM categorias";
		//$c = new Conexao();
		//print_r($c);
		//var_dump($c);
	//die();
		
		$conexao = Conexao::pegarConexao();	
		
		
		$resultado = $conexao->query($sql);
		$lista = $resultado->fetchAll();
		return $lista;
	}

	
}