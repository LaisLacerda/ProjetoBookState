<?php
session_start();


	include 'conecta.php';

	$nome = $_POST['nome'];
	$email = $_POST['email'];
        $senha = $_POST['senha'];    
	
	$consulta = $conexao->prepare("DELETE FROM cliente WHERE nome='$nome' AND email='$email' AND senha='$senha' ");

	$consulta -> execute();
	header('Location: index.php');

?>