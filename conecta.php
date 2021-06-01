<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "database";

	$conexao = new MySQLi("$host","$usuario","$senha","$banco");

	if ($conexao -> connect_error) {
		echo "Erro de Conexão!";
	}
	else{
		#echo "CONECTADO!";
	}
?>