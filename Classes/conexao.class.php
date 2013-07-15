<?php
	class Conexao {

	protected $id;
	protected $con;

	function __construct() { // Metodo construtora para estabelecer a conexão
		// Este arquivo conecta um banco de dados MySQL - Servidor = localhost
		$local		= "localhost"; 	// Onde o banco se encontra, geralmente localhost
		$dbname		= "genetica"; 	// Indique o nome do banco de dados que será aberto
		$usuario	= "root"; 		// Indique o nome do usuário que tem acesso
		$password	= ""; 			// Indique a senha do usuário

		//1º passo - Conecta ao servidor MySQL
		if(!($this->id = mysql_connect($local, $usuario, $password))) {
			echo "N&atilde;o foi poss&iacute;vel estabelecer uma conex&atilde;o com o gerenciador MySQL. Favor Contactar o Administrador.";
			exit;
		}

		//2º passo - Seleciona o Banco de Dados
		if(!($this->con = mysql_select_db($dbname, $this->id))) {
			echo "Não foi possível estabelecer uma conexão com o Banco de Dados. Favor comunicar o administrador !";
			exit;
		}
	}

	function __destruct() { // Classe destrutora - desfaz a conexão
		mysql_close($this->id);
	}
}
?>