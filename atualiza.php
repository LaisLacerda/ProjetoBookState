<?php


	include 'conecta.php';

	$id =         $_POST['id'];
	$nome_novo =  $_POST['nome_novo'];
	$email_novo = $_POST['email_novo'];
	$senha_novo = $_POST['senha_novo'];
	
	$consulta = $conexao -> prepare("UPDATE cliente SET nome='$nome_novo', email='$email_novo', senha = '$senha_novo' WHERE id = '$id'");

	$consulta -> execute();

	header('Location: home.php');


?>