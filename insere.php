<?php

	include 'conecta.php';

	$nome = $_POST['nome'];
	$email = $_POST['email'];
        $senha = $_POST['senha'];    
	$consulta = $conexao -> prepare("INSERT INTO usuario (nome,email,senha) VALUES ('$nome','$email','$senha')");

	$consulta -> execute();
        
	header('Location: cadastro.php');


?>