<?php

require_once ('Conexao.php');
/**
 * 
 */
class Categoria
{
	
	private $id;
	public $nome;

	

	public function listar()
	{
		$sql = "SELECT * FROM categorias";
		
		$conexao = Conexao::pegarConexao();	
		
		
		$resultado = $conexao->query($sql);
		$lista = $resultado->fetchAll();
		return $lista;
	}

	public function salvar()
	{
		
		$sql = "INSERT INTO categorias (nome) VALUES (:nome)";

		$conexao = Conexao::pegarConexao();	
		
		$stmt = $conexao->prepare($sql);

		$stmt->bindValue(':nome', $this->nome);		

		return $stmt->execute(); //executando o comando


	}

	
}