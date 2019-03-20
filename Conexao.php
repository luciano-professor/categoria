<?php

require_once('config.php');

/**
 * 
 */
class Conexao
{
	
	public static function pegarConexao(){

		$conexao = new PDO(DRIVE.':host='.HOSTNAME.';dbname='.BD, USER, PASSWORD, null);
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $conexao;
	}

}